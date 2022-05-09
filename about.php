<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="style/about.css">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="style/navbar.css">
  <title>About</title>
</head>

<body>
  <nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong>GALLERY PHOTO</strong></div>
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="about.php">About</a></li>
        <li><a href="project.php">Projects</a></li>

        <?php if (isset($_SESSION['nama_lengkap'])) {
            echo '<li><a href="index.php">Logout</a></li>';
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        } ?>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</nav>
  <div class="container">
    <h1>About</h1>
    <p>Ini dibuat untuk memenuhi UTS Mata Kuliah Pemrograman Web<br><br>
      Anggota : <br>
      Arif Rahman Pamungkas - 2002923<br>
      Dimas Aditya Permana - 2000746<br>
      Iman Nurrohman - 2005086<br>
      M. Nabil Furqon - 2007037</p>
  </div>
</body>

</html>