<?php
  $title = "KTToaster - About Me";
  $activepage = "About";
  $stylesheets = '<link href="/static/css/index.css" rel="stylesheet">';
  $scripts = '<script src="/static/ts/index.ts" type="module"></script>';

  ob_start();
?>
  
<h1>About</h1>

<?php
  $content = ob_get_clean();
  include __DIR__ . '/layouts/base.php';
?>