<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Welcome!</title>
   <link rel="icon" type="image/png" href="office.png">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,600'>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min1.css">

      <link rel="stylesheet" href="css/style.css">

  
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
        <li class="panel__header active"><a href="" class="panel__link" >Sign In</a></li>
      </ul>

      <div class="panel__forms">













        <!-- Login Form -->
          <form action="logq.php" method="POST">
          <div class="form__row">
            <input type="text" id="email" class="form__input" name="email" data-validation="email" data-error="Invalid email address." required>
            <span class="form__bar"></span>
            <label for="email" class="form__label">E-mail</label>
            <span class="form__error"></span>
          </div>

          <div class="form__row">
            <input type="password" id="password" class="form__input" name="password" data-validation="length" data-validation-length="8-25" data-error="Password must contain 8-25 characters." required>
            <span class="form__bar"></span>
            <label for="password" class="form__label">Password</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <br>
                  <input type="submit" name="Login" value="Login" class="btn btn-primary btn-block">
           
          </div>
        </form>


















        <!-- Register Form -->
        <form class="form panel__register-form" id="register-form" method="post" action="/">
          <div class="form__row">
            <input type="text" id="register-email" class="form__input" name="register-mail" data-validation="email" data-error="Invalid email address." required>
            <span class="form__bar"></span>
            <label for="register-email" class="form__label">E-mail</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="password" id="register-password" class="form__input" name="register-pass" data-validation="length" data-validation-length="8-25" data-error="Password must contain 8-25 characters" required>
            <span class="form__bar"></span>
            <label for="register-password" class="form__label">Password</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="password" id="register-password-check" class="form__input" name="register-repeat-pass" data-validation="confirmation" data-validation-confirm="register-pass" data-error="Your passwords did not match." required>
            <span class="form__bar"></span>
            <label for="register-password-check" class="form__label">Check password</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="submit" class="form__submit" value="Register!">
          </div>
        </form>







        <!-- Forgot Password Form -->
        <form class="form panel__password-form" id="password-form" method="post" action="/">
          <div class="form__row">
            <p class="form__info">Can't log in? Please enter your email. We will send you an email with instructions on how to reset your password.</p>
          </div>
          <div class="form__row">
            <input type="text" id="retrieve-pass-email" class="form__input" name="retrieve-mail" data-validation="email" data-error="Invalid email address." required>
            <span class="form__bar"></span>
            <label for="retrieve-pass-email" class="form__label">E-mail</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="submit" class="form__submit" value="Send new password!">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
