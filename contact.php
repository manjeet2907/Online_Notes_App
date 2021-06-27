<?php
require_once 'includes/header.php'
?>

<?php
$section_body = '
<section>
    <form method="GET" id="contact">
            <div class="form-group">
                <label for="name" class="visually-hidden">Your Name</label>
                <input id="name" type="text" class="form-control" name="name" placeholder="Enter Your Full Name" max-length="30">
            </div>
            <div class="form-group">
                <label for="Email" class="visually-hidden">Email</label>
                <input id="Email" type="text" class="form-control" name="mail" placeholder="Enter Your Email id" max-length="50">
            </div>
            <div class="form-group">
                <label for="message" class="visually-hidden">Message</label>
                <input id="message" type="textarea" class="form-control" name="message" placeholder="Enter Your Message here" max-length="200">
            </div>
            <div class="form-group">
                <label for="Email" class="visually-hidden">Email</label>
                <input id="button" type="button" class="form-control" name="submit" value="SUBMIT">
            </div>
    </form>

</section>';
  
include 'includes/mainSection.php';
?>


<?php
require_once 'includes/footer.php'
?>