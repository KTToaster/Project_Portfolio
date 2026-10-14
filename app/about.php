<?php
  $title = "KTToaster - About Me";
  $active_page = "About";
  $stylesheets = '<link href="/static/css/about.css" rel="stylesheet">';
  $scripts = '<script src="/static/ts/about.ts" type="module"></script>';

  ob_start();
?>
  
<main>
  <h1 class="title">About Me</h1>
  <div class="about">
    <div class="about-text">
      I am a recent graduate from 
      <a href="https://www.lancaster.ac.uk/">Lancaster University</a>,
      having acheived a MSci Hons in 
      <a href="https://www.lancaster.ac.uk/study/undergraduate/courses/software-engineering-with-industrial-experience-msci-hons-g601/2026/">Software Engineering (with Industrial Experience)</a>,
      in which I specialised in Embedded and Internet of Things (IoT) systems. I researched and developed accessibility tools for the micro:bit, working alongside the 
      <a href="https://www.lancaster.ac.uk/microbit/">Micro:Bit Innovation and Research Lab</a> at Lancaster University;
      reduced the barrier for entry to control IoT devices with IoTA; and 
      <a href="./software">more</a>. 
      <br><br>
  
      Outside of software, I have a passion for anything creative, particularly music. I play guitar, collect vinyls, bake, paint and can always be seen with headphones in.<br><br>
      
      Currently, I am looking to progress my career in software engineering, with long-term aspirations of obtaining a PhD.
    </div>
    <img class="about-image" src="./static/assets/Hrensko.jpg">
  </div>
  
  <h2 class="title" id="values">Values</h2>
  <div class="about">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>

  <h2 class="title" id="education">Education</h2>
  <div class="about">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
  <h2 class="title" id="experience">Industry Experience</h2>
  <div class="about">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>  
</main>

<?php
  $content = ob_get_clean();
  include __DIR__ . '/layouts/base.php';
?>