<?php
$connect = mysqli_connect("localhost", "root", "", "oema");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_itemcontent 
	WHERE item_name LIKE '%".$search."%'
	OR or_number LIKE '%".$search."%' 
	OR c_number LIKE '%".$search."%' 
	OR date_purchased LIKE '%".$search."%' 
	OR price_id LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tbl_itemcontent  ORDER BY or_number";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Item Name</th>
							<th>Control Number</th>
							<th>Or Number</th>
							<th>Date Purchased</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row['item_name'].'</td>
				<td>'.$row['c_number'].'</td>
				<td>'.$row['or_number'].'</td>
				<td>'.$row['date_purchased'].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>