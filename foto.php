<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/about.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/input_foto.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <title>input foto</title>
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
<div class="input">
    <form>
        <h1>Input Foto</h1>
        <label id="judulfoto">Judul Foto</label> <br>
        <input type="text"> <br>
        <label id="descfoto">Deskripsi Foto</label> <br>
        <input type="text"> <br>
        <label id="tanggalfoto">Tanggal Foto</label> <br>
        <input type="date"> <br>
        <label id="linkfoto">Link Foto</label> <br>
        <input name="image3" type="file" accept="image/*" id="menu_images"/>
        <img id="menu_image" class="preview_img"/>
        <a href="index.php">
            <button id="button-submit">SUBMIT</button>
        </a>
    </form>
</div>
</body>
<script type="text/javascript">
    document.getElementById("menu_images").onchange = function () {
        var reader = new FileReader();
        if (this.files[0].type.indexOf("image") == -1) {
            alert("Invalid Type");
            $("#menu_image").attr("src", "blank");
            $("#menu_image").hide();
            $('#menu_images').wrap('<form>').closest('form').get(0).reset();
            $('#menu_images').unwrap();
            return false;
        }
        reader.onload = function (e) {
            document.getElementById("menu_image").src = e.target.result;
            $("#menu_image").show();
        };


        reader.readAsDataURL(this.files[0]);
    };

</script>
</html>