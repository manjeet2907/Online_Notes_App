<?php
require 'includes/header.php'
?>

<!-- Main Section -->
<section>
<?php
$section_body = '
<section>
<h1>Online Notes App</h1>
<p>Your notes with you wherever you go.</p>
<p>Easy to use, Protect all your Notes</p>
<button type="button" class="btn btn-success btn-lg mt-4 signup" data-bs-target="#sup_modal" data-bs-toggle="modal">Sign up- it&apos; free</button>
</section';

require 'includes/mainSection.php';
?>
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

<!-- footer Section -->
<section>
  <?php
  require 'includes/footer.php';
  ?>

</section>