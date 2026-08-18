<?php
  $title = "KTToaster - Projects";
  $activepage = "Projects";
  $stylesheets = '<link href="/static/css/index.css" rel="stylesheet">';
  $scripts = '<script src="/static/ts/index.ts" type="module"></script>';

  ob_start();
?>
  
<h1>Projects</h1>
<main>
  
</main>

<?php
  $content = ob_get_clean();
  include __DIR__ . '/layouts/base.php';
?><br>