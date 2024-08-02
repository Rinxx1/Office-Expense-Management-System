<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "oema");
$columns = array('itemid', 'item_name', 'c_number', 'or_number', 'date_purchased');

$query = "SELECT * FROM tbl_itemcontent WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'date_purchased BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (itemid LIKE "%'.$_POST["search"]["value"].'%" 
  OR item_name LIKE "%'.$_POST["search"]["value"].'%" 
  OR c_number LIKE "%'.$_POST["search"]["value"].'%" 
  OR or_number LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY itemid DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["itemid"];
 $sub_array[] = $row["item_name"];
 $sub_array[] = $row["c_number"];
 $sub_array[] = $row["or_number"];
 $sub_array[] = $row["date_purchased"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM tbl_itemcontent	";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
