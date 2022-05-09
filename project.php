<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style/project.css" />
        <link rel="stylesheet" href="style/navbar.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
<body>
    <nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong>GALLERY PHOTO</strong></div>
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a class="active" href="project.php">Projects</a></li>

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
    <div id="content">
        <div class="article" id="artikel">
        </div>
         <div class="article" id="tutorial">
         </div>
         <div class="article" id="aktivitas">
         </div>
    </div>
</body>
<script src="src/storage.js"></script>
<script src="src/artikel.js"></script>
<script src="src/tutorial.js"></script>
</html>

