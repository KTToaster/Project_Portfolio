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
    Hi! I'm Kian, a fullstack software engineer with a focus on embedded systems and Internet of Things Devices.<br>
    I have a Master's Degree in Software Engineering from Lancaster University - a top 10 university in the UK.
    In a professional setting I have worked with the <a href="https://microbit.org">Micro:Bit Educational Foundation</a> 
    and <a href="https://hampshire.police.uk/">Hampshire Constabulary</a><br>
    This site aims to showcase some of my experience and the projects that I have completed throughout my software engineering career.
    <br>
    <a href="./about.php">Learn More</a>
    <br><br><br>
  </div>
  <h3 class="title">Featured Projects</h3>
  <div class="project-container-outer">
    <div class="album py-5 project-container">
      <div class="container">
        <div class="row">
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
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  $content = ob_get_clean();
  include __DIR__ . '/layouts/base.php';
?>