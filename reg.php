<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Welcome!</title>
   <link rel="icon" type="image/png" href="office.png">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,600'>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min1.css">

      <link rel="stylesheet" href="style1.css">

  
</head>

<body>


  
<div class="panel_blur"></div>
  <div class="panel">
    <div class="panel__form-wrapper">
      <!-- <button type="button" class="panel__prev-btn" aria-label="Go back to home page" title="Go back to home page"> -->
           <!--  <svg fill="rgba(255,255,255,0.5)" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"> -->
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/>
            </svg>
          </button>

      <ul class="panel__headers">

       <!--  <li class="panel__header"><a href="#register-form" class="panel__link" role="button">Sign Up</a></li> -->
        <li class="panel__header active"><a href="" class="panel__link" >Sign Up</a></li>
      </ul>

      <div class="panel__forms">













        <!-- Login Form -->
          <form action="regq.php" method="POST">
          <div class="form__row">
            <input type="text" id="uname" class="form__input" name="uname" data-validation="text" data-error="Invalid Username." required>
            <span class="form__bar"></span>
            <label for="username" class="form__label">Username</label>
            <span class="form__error"></span>
          </div>

            <div class="form__row">
            <input type="text" id="first_name" class="form__input" name="first_name" data-validation="text" data-error="Invalid First Name." required>
            <span class="form__bar"></span>
            <label for="first_name" class="form__label">First Name</label>
            <span class="form__error"></span>
          </div>

            <div class="form__row">
            <input type="text" id="last_name" class="form__input" name="last_name" data-validation="text" data-error="Invalid Last Name." required>
            <span class="form__bar"></span>
            <label for="last_name" class="form__label">Last Name</label>
            <span class="form__error"></span>
          </div>

            <div class="form__row">
            <input type="number" id="age" class="form__input" name="age" data-validation="number" data-error="Invalid Age." required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "3" value="">
            <span class="form__bar"></span>
            <label for="age" class="form__label">Age</label>
            <span class="form__error"></span>
          </div>

            <div class="form__row">
            <input type="number" id="cpnum" class="form__input" name="cpnum" data-validation="number" data-error="Invalid Phone Number." required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "11" value="">
            <span class="form__bar"></span>
            <label for="phonenum" class="form__label">Phone Number</label>
            <span class="form__error"></span>
          </div>

          <div class="form__row">
            <input type="text" id="address" class="form__input" name="address" data-validation="text" data-error="Invalid Address." required>
            <span class="form__bar"></span>
            <label for="address" class="form__label">Address</label>
            <span class="form__error"></span>
          </div>

          <div class="form__row">
            <input type="text" id="email" class="form__input" name="email" data-validation="email" data-error="Invalid Email Address." required>
            <span class="form__bar"></span>
            <label for="email" class="form__label">Email Address</label>
            <span class="form__error"></span>
          </div>

          <div class="form__row">
            <input type="password" id="pass" class="form__input" name="pass" data-validation="length" data-validation-length="8-25" data-error="Password must contain 8-25 characters." required>
            <span class="form__bar"></span>
            <label for="password" class="form__label">Password</label>
            <span class="form__error"></span>
          </div>

           <div class="form__row">
            <input type="password" id="cpass" class="form__input" name="cpass" data-validation="length" data-validation-length="8-25" data-error="Password must contain 8-25 characters." required>
            <span class="form__bar"></span>
            <label for="password" class="form__label">Confirm Password</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <br>
                  <input type="submit" name="login" value="Sign Up" class="btn btn-primary btn-block">
                  <input type="submit" formaction="manageAccount.php" value="Back to Manage Account"  class="btn btn-primary btn-block">
           
          </div>
        </form>



















  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
