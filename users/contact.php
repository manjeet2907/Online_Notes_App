<?php
$Ltitle ='Contact US';
require_once '../users/loginheader.php';
?>

<?php
$section_body = '
<section>
    <form method="GET" id="contact" style="max-width:600px; margin:auto;">
            <div class="form-group mb-2">
                <label for="name" class="visually-hidden">Your Name</label>
                <input id="name" type="text" class="form-control" name="name" placeholder="Enter Your Full Name" max-length="30">
            </div>
            <div class="form-group mb-2">
                <label for="Email" class="visually-hidden">Email</label>
                <input id="Email" type="text" class="form-control" name="mail" placeholder="Enter Your Email id" max-length="50">
            </div>
            <div class="form-group mb-2">
                <label for="message" class="visually-hidden">Message</label>
                <input id="message" type="textarea rows-5"  class="form-control" name="message" placeholder="Enter Your Message here" max-length="200">
            </div>
            <div class="form-group">
                <label for="Email" class="visually-hidden">Email</label>
                <input id="button" type="textarea rows="10" class="form-control btn btn-primary" name="submit" value="SUBMIT">
            </div>
    </form>

</section>';
  
include '../includes/mainSection.php';
?>

<?php
require_once '../includes/footer.php'
?>