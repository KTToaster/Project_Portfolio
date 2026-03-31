<?php
  $title = "KTToaster - Software";
  $activepage = "Software";
  $stylesheets = '<link href="/static/css/index.css" rel="stylesheet">';
  $scripts = '<script src="/static/ts/index.ts" type="module"></script>';

  ob_start();
?>
  
<h1>Software</h1>

<?php
  $content = ob_get_clean();
  include __DIR__ . '/layouts/base.php';
?>