<?php
  /*
  * Variable Quick Reference
  *  $active_page  - The name of the page that the user is currently on.
  */

  function is_active($name, $active_page){
    return $name === $active_page ? "active" : "";
  }
?>

<!--Navbar-->
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kian Tomkins - Portfolio &nbsp;&nbsp; |</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link <?= is_active("Index", $active_page) ?>" href="/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= is_active("Software", $active_page) ?>" href="/software.php">Projects</a>
          </li>
          <li class="nav-item dropdown">
            <button class="nav-link dropdown-toggle <?= is_active("About", $active_page) ?>" data-bs-toggle="dropdown">About Me</button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/about.php">Overview</a></li>
              <li><a class="dropdown-item" href="/about.php#education">Education</a></li>
              <li><a class="dropdown-item" href="/about.php#experience">Industry Experience</a></li>
              <li><a class="dropdown-item" href="/about.php#values">My Values</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br>
</header>