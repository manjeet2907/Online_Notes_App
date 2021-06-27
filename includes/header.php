<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="links/style.css" rel="stylesheet">
  <title>online Notes App</title>
</head>

<body>
  <!-- navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Online Notes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.php">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>

        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php" data-bs-target ="#sin_modal" data-bs-toggle="modal" >Login</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  
<!-- sign-in Form -->

<section>
<form method="POST" id="signinform">
  <?php
  $modal_use = 'sin';
  $modal_title = 'Log In';
  $modal_body = '
  <section>
  <div class="form-group">
  <label for="sin_username" class="visually-hidden">Username</label>
  <input id="sin_username" type="text" class="form-control" name="sin_username" placeholder="Username" max-length="30">
</div>

<div class="form-group">
  <label for="sin_password" class="visually-hidden">password</label>
  <input id="password" type="text" class="form-control" name="sin_password" placeholder="Enter Password" max-length="30">
</div>
<div class="actionarea d-flex justify-content-sm-between">
  <div class="rememberme">
    <input id="remember" type="checkbox" class="" name="pass" placeholder="Enter Password" max-length="30">
    <label for="password" class="#"> Remember Me</label>
  </div>
  <div class="forgotpassword" 8>
    <a href="#forgot_modal" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot Password</a>
  </div>
  </section';
  $modal_footer = '
  <section>
  <button type="button" class="btn btn-primary" data-bs-target="#sup_modal" data-bs-toggle="modal" data-bs-dismiss="modal"> Register</button>
  <a href="users/index.php" type="button" class="btn btn-success">Log In</a>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
  </section';

  include 'includes/modal.php';
  ?>
        
  </form>
  </section>

  
<!-- sign uP form -->

<section>

<form method="POST" id="signupform">
  <!-- Modal -->
  <?php
  $modal_use = 'sup';
  $modal_title = 'Sign up today and start using our online Notes App';
  $modal_body = '
  <section>
  <div class="form-group">
  <label for="username" class="visually-hidden">Username</label>
  <input id="username" type="text" class="form-control" name="name" placeholder="Username" max-length="30">
</div>

<div class="form-group">

  <label for="email" class="visually-hidden">Email</label>
  <input id="email" type="email" class="form-control" name="email" placeholder="Enter your Email" max-length="50">
</div>

<div class="form-group">
  <label for="password" class="visually-hidden">password</label>
  <input id="password" type="text" class="form-control" name="pass" placeholder="Choose a password" max-length="30">
</div>

<div class="form-group">
  <label for="confirm-password" class="visually-hidden">Confirm-password</label>
  <input id="confirm-password" type="text" class="form-control" name="C_pass" placeholder="Confirm Password" max-length="30">
</div>
  </section';
  
  $modal_footer = '
  <section>
  <button type="button" class="btn btn-primary">Sign Up</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
  </section';

  include 'includes/modal.php';

  ?>
</form>
</section>

  <!-- forgot password -->
<section>
  <form method="POST" id="forgotpassword">
    <!-- Modal -->
    <?php
  $modal_use = 'forgot';
  $modal_title = 'Forgot Password';
  $modal_body = '
  <section>
  <div class="form-group">
      <label for="forgot_email" class="#">Enter your Email id</label>
      <input id="forgot_email" type="email" class="form-control" name="forgot_email" placeholder="Enter your Email" max-length="50">
  </div>
  </section';

  $modal_footer = '
  <section>
  <button type="button" class="btn btn-primary" data-bs-target="#">Send Reset Email</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
  </section';

  include 'includes/modal.php';
?>
  </form>
</section>
