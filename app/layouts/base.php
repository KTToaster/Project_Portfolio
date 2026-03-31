<!doctype html>
<html lang="en" data-bs-theme="dark">

<!--HEAD-->
<?php
  $title ??= '';
  $stylesheets ??= '';
  include __DIR__ . '/../components/head.php';
?>


<!--BODY-->
<body class="d-flex flex-column h-100">
  <?php 
    // SVGs
    include __DIR__ . '/../components/svgs.php';

    include __DIR__ . '/../components/theme_toggle.php';

    // Navbar
    $activepage ??= '';
    include __DIR__ . '/../components/navbar.php';
  ?>

  <!--Content-->
  <main class="main flex-shrink-0">
    <div class="container">
      <?= $content ?>
    </div>
  </main>

  <!--Footer-->
  <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

<!--SCRIPTS-->
<?php include __DIR__ . '/../components/scripts.php'; ?>
</html>