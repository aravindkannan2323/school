<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tmail Nadu public school</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../students/index.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../teachers/index.php">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../administrators/index.php">Administrators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../hrs/index.php">Hrs</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <?php if(!isset($_SESSION['username'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="../access/login.php">Login</a>
        </li>
        <?php endif; ?>

        <?php if(isset($_SESSION['username'])) : ?>
        <li class="nav-item">
          Hello, <?php echo $_SESSION['username']; ?>
        </li>
        <?php endif; ?>

        <?php if(isset($_SESSION['username'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="../access/logout.php">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
      
    </div>
  </div>
</nav>
