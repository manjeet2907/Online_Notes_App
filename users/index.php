<?php
$Ltitle = 'My Notes';
require_once '../users/loginheader.php';
?>

<section>
    <?php
    $section_body = '
<div class="container">
    <div class="row">
         <div class="col-md-offset-3"></div>
        <div class="col-md-6>
           <div class="d-flex justify-content-between">
            <div class="btn btn-primary btn-lg" ><a href ="#" class=" text-light text-decoration-none">Add Note</div></a>
            <div class="btn btn-primary btn-lg d-none" ><a href ="#" class=" text-light text-decoration-none">All Notes</div></a>
            <div class="btn btn-primary btn-lg " ><a href ="#" class=" text-light text-decoration-none">Edit</div></a>
            <div class="btn btn-success btn-lg d-none" ><a href ="#" class=" text-light text-decoration-none">Done</div></a>
            <div class="notepad mt-3 border p-0">
                <textarea rows="10" class="w-100"></textarea>
            </div>
        </div>
        <div class="col-md-offset-3"></div>
    </div>
    </div>


</div';

    require '../includes/mainSection.php';
    ?>
</section>











<?php
require_once '../includes/footer.php';

?>