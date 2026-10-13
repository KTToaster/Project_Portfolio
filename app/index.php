<?php
  $title = "KTToaster - Home";
  $activepage = "Index";
  $stylesheets = '<link href="/static/css/index.css" rel="stylesheet">';
  $scripts = '<script src="/static/ts/index.ts" type="module"></script>';

  ob_start();
?>
  
<h1 class="title">Home</h1>
<div class="content">
  <div class="headline">
    Hi! I'm Kian, a fullstack software engineer who has specialised in developing user-friendly embedded systems, alongside reliable Internet of Things (IoT) services.<br><br>
    I have a Master's Degree in Software Engineering from Lancaster University, and professional experience across educational, academic, and public sectors,
    leveraging my minor in psychology to better understand user perspectives.<br><br>
    This site aims to showcase some of my experience and the projects that I have completed throughout my software engineering career.
    <br><br><br>
  </div>
  <h3 class="title">Featured Projects</h3>
  <div class="project-container-outer">
    <div class="album py-5 project-container">
      <div class="container">
        <div class="row">
          <?php
          $card_title = "Turing Texts";
          $card_body = "A game to assess whether a person can identify if another user is real, or an LLM.";
          $image_alt = "The 'Turing Texts' Interface";
          include __DIR__ . '/components/project_card.php';
          ?>
          <?php
          $card_title = "IoTA (Internet of Things Automator)";
          $card_body = "A drag-and-drop code interface to control Internet of Things devices.";
          $image_alt = "The IoTA Logo";
          include __DIR__ . '/components/project_card.php';
          ?>
          <?php
          $card_title = "Sound:Bit";
          $card_body = "An additional piece of hardware to improve the micro:bit's audio-playing capabilities.";
          $image_alt = "The Sound:Bit Prototype";
          include __DIR__ . '/components/project_card.php';
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 
<div class="col-md-4 album-item">
  <div class="card mb-4 box-shadow">
    <img class="card-img-top album-image" alt="Turing Texts Interface" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShrlhoZUPFN7jDh7IZB0v_zE_wIcwI7BEqWxffW8V86A&s=10">
    <div class="card-body">
      <p class="card-text album-text">
        <b>Turing Texts</b><br>
      </p>
      <div class="d-flex justify-content-center align-items-center">
        <div class="btn-group text-center">
          <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="col-md-4 album-item">
  <div class="card mb-4 box-shadow">
    <img class="card-img-top album-image" alt="The Sound:Bit PCB" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShrlhoZUPFN7jDh7IZB0v_zE_wIcwI7BEqWxffW8V86A&s=10">
    <div class="card-body">
      <p class="card-text album-text"><b>Sound:Bit</b><br></p>
      <div class="d-flex justify-content-center align-items-center">
        <div class="btn-group text-center">
          <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 album-item">
  <div class="card mb-4 box-shadow">
    <img class="card-img-top album-image" alt="IoTA Programming Interface" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShrlhoZUPFN7jDh7IZB0v_zE_wIcwI7BEqWxffW8V86A&s=10">
    <div class="card-body">
      <p class="card-text album-text"><b>IoTA (Internet of Things Automator)</b><br></p>
      <div class="d-flex justify-content-center align-items-center">
        <div class="btn-group text-center">
          <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
        </div>
      </div>
    </div>
  </div>
</div>
-->

<?php
  $content = ob_get_clean();
  include __DIR__ . '/layouts/base.php';
?>