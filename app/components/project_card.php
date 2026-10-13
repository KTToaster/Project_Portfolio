<?php
  /* Variable Quick Reference
  * $card_title  - The title of the album card
  * $card_body   - The body of the album card 
  * $image       - The path to the image to display on the album card
  * $image_alt   - The alt text for the album card's image
  * $link        - The link the album card redirects to 
  */
  $image ??= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShrlhoZUPFN7jDh7IZB0v_zE_wIcwI7BEqWxffW8V86A&s=10";
?>
<div class="col-md-4 album-item">
  <div class="card mb-4 box-shadow">
    <img class="card-img-top album-image" alt="<?php $image_alt ?>" src="<?= $image ?>">
    <div class="card-body">
      <p class="card-text album-text">
        <b><?= $card_title ?></b><br>
        <small><?= $card_body ?></small>
      </p>
      <div class="d-flex justify-content-center align-items-center">
        <div class="btn-group text-center">
          <a type="button" class="btn btn-sm btn-outline-secondary" href="<?= $link?>">Details</a>
        </div>
      </div>
    </div>
  </div>
</div>