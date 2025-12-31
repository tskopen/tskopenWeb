<?php include 'config.php'; ?>
<link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">

<nav>
  <ul class="nav-menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="resume.php">Resume</a></li>

    <li class="dropdown">
      <a href="#" class="dropbtn">Projects</a>
      <ul class="dropdown-content">
        <li><a href="rocketry.php">Rocketry (ARCS)</a></li>
        <li><a href="fair2025.php">Materials Study</a></li>
        <li><a href="websiteproject.php">This Website</a></li>

      </ul>
    </li>

<li class="pushleft"><button id="fancyBtn">Toggle Fancy</button></li>
  </ul>
</nav>


