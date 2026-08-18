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

          <?php
            function active($name, $activepage) {
              return $name === $activepage ? "active" : "";
            }
          ?>

          <li class="nav-item">
            <a class="nav-link <?= active("Index", $activepage) ?>" href="/index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= active("Software", $activepage) ?>" href="/software.php">Projects</a>
          </li>

          <li class="nav-item dropdown">
            <button class="nav-link dropdown-toggle <?= active("About", $activepage) ?>" data-bs-toggle="dropdown">About Me</button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/about.php">Overview</a></li>
              <li><a class="dropdown-item" href="/about.php#education">Education</a></li>
              <li><a class="dropdown-item" href="/about.php#experience">Industry Experience</a></li>
              <li><a class="dropdown-item" href="/about.php#values">My Values</a></li>
            </ul>
          </li>
        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>