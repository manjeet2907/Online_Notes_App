<div class="modal fade" id="<?php echo $modal_use; ?>_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="color:black">
        <div class="modal-header">
          <div class="modal-title" id="exampleModalLabel"> <h5> <?php echo $modal_title ;?> </h5> </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="<?php echo $modal_use ;?>_message">
          </div>

          <?php echo $modal_body ; ?> </div>
        <div class="modal-footer">
          <?php echo $modal_footer ;?>
        </div>

      </div>
    </div>
  </div>