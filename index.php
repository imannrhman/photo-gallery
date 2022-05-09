<?php
session_start();
?>

<html>

<head>
	<link rel="stylesheet" href="style/index.css">
	<title>
		Home
	</title>
	<link rel="stylesheet" href="style/navbar.css" />
	<link rel="stylesheet" href="style/index.css" />
	<link rel="stylesheet" href="style/home.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<!-- jQuery Modal -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</head>


<body>
	<div id="item01" class="port">

		<div class="row">
			<div class="description">
				<h1>Item 01</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat.
					Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.
				</p>
			</div>

			<img src="https://cdn.dribbble.com/users/545884/screenshots/3981307/lorena2.png" alt="">
		</div>
	</div> <!-- / row -->

	</div> <!-- / Item 02 -->


	<div id="item02" class="port">

		<div class="row">
			<div class="description">
				<h1>Item 02</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat.
					Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.
				</p>
			</div>
			<img src="https://cdn.dribbble.com/users/545884/screenshots/2883479/cover.jpg" alt="">
		</div> <!-- / row -->

	</div>


	<nav>
		<input id="nav-toggle" type="checkbox">
		<div class="logo"><strong>GALLERY PHOTO</strong></div>
		<ul class="links">
			<li><a class="active" href="">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="project.php">Projects</a></li>
	
			<?php if (isset($_SESSION['nama_lengkap'])) {
				echo '<li><a href="logout.php">Logout</a></li>';
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
	<main>
		<div class="block">
			<div class="block-text">
				<?php
						$nama = $_SESSION['nama_lengkap'] ?? '';
						if(isset($_SESSION['nama_lengkap'])) {
							echo "<h1>Hallo, ". $nama ."!<h1>";
						}
				?>
				<h1>Upload gambar mu sekarang juga</h1>
				<p>Daripada foto bagus anda tidak terpublish, mari jual saja</p>
				<button id="button-submit" class="button-shadow">
					Upload Foto
				</button>
			</div>
			<div class="block-image">
				<img src="https://images.unsplash.com/photo-1648432055195-0d12ae99f217?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2835&q=80" alt="">
			</div>
		</div>

		<div id="top"></div>
		<article>
			<h2>List upload</h2>

			<section class="gallery">
				<div class="row">
					<ul>
						<a href="#" class="close"></a>
						<li>
							<a href="#item02">
								<img src="https://images.unsplash.com/photo-1648522604798-54d3f977da31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1364&q=80" alt="">
							</a>
						</li>

						<li>
							<a href="#item02">
								<img src="https://images.unsplash.com/photo-1648484479126-10c313d3722d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="">
							</a>
						</li>

						<li>
							<a href="#item02">
								<img src="https://images.unsplash.com/photo-1648460430908-166ffc8ee0bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#item01">
								<img src="https://images.unsplash.com/photo-1648536596631-10f321aa4c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#item02">
								<img src="https://images.unsplash.com/photo-1648481707108-db87c67e53a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#item01">
								<img src="https://images.unsplash.com/photo-1648514741567-b2d28e0700b8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#item01">
								<img src="https://images.unsplash.com/photo-1640622307877-1e40352b9a48?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#item01">
								<img src="https://images.unsplash.com/photo-1648492678518-0f7171f7a623?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80" alt="">
							</a>
						</li>
					</ul>
				</div> <!-- / row -->

			</section>
		</article>
	</main>

</body>


<script type="text/javascript">
	$('#item02').show();
</script>

</html>