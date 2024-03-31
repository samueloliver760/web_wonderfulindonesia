<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tourist Destination</title>
	<link rel="icon" href="logo.png">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.flip.js"></script>


	<style>
		@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');

		* {
			margin: 0px;
			padding: 0px;
			font-family: 'QuickSand';
		}

		body {
			margin: 0px;
			padding: 0px;
			position: absolute;
			width: 100%;
			background-size: cover;
		}

		.wrapper {
			width: 1200px;
			margin: auto;
			position: relative;
			margin-bottom: 40px;
			margin-top: 20px;
		}

		.logo img {
			width: 80px;
			height: 80px;
			float: left;
			padding: 10px
		}

		.title {
			font-size: 30px;
			font-weight: 800;
			font-family: Pacifico;
			color: navy;
			float: left;
			margin: 10px;
			padding: 5px;
		}

		.menu {
			float: right;
			margin: 20px;
		}

		nav {
			width: 100%;
			margin: auto;
			line-height: 60px;
			position: sticky;
			padding: 2px;
			background-color: transparent;
			position: fixed;
			z-index: 1;

		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			font-size: 20px;

		}

		nav ul li {
			float: left;
		}

		a.tbl:hover {
			color: black;
			font-weight: 900x;
			border-bottom: 4px solid red;
		}

		nav ul li a {
			color: navy;
			font-weight: bold;
			padding: 10px 20px;
			text-decoration: none;
			margin-top: 10px;
			width: 400px;
		}

		.active_nav {
			background-color: rgb(255, 255, 255);
			top: 0;
			left: 0;
			right: 0;
			border-bottom: 3px solid black;
		}
		
		.header {
			width: 100%;
			height: 110px;
		}

		h1 {
			margin-top: 50px;
			margin-bottom: 30px;
			font-family: 40px;
			text-align: center;
			font-weight: 800;
		}

		h2 {
			margin-top: 20px;
			font-family: 40px;
			text-align: center;
			font-weight: normal;

		}

		.text {
			font-size: 20px;
			text-align: justify;
			padding: 20px;
		}


		mark {
			background-color: transparent;
			font-family: Permanent Marker;
		}

		.acara {
			padding: 20px;
			width: 300px;
			height: 300px;
		}

		.footer {
			background-color: lightblue;
			margin-top: 10px;
		}

		.social-link .sm {
			display: inline-block;
			height: 30px;
			width: 30px;
			margin: 0 10px 10px 0;
		}

		.social-link .sma {
			display: inline-block;
			height: 30px;
			width: 40px;
			margin: 0 10px 10px 0;
		}

		.footer-col {
			width: 20%;
			padding: 20px 20px;
			margin: 50px;
		}

		.container {
			max-width: 1170px;
			margin: auto;
		}

		.row {
			display: flex;
			flex-wrap: wrap;
		}

		ul {
			list-style: none;
		}


		.footer-col h3 {
			font-size: 25px;
			margin-bottom: 10px;
			line-height: 30px;
			height: 100px;
		}

		.footer-col p ul option {
			font-size: 20px;
		}

		.copyright {
			text-decoration: none;
			text-align: center;
			background-color: black;
			color: white;
			font-size: 20px;
			padding: 5px;
		}

		.biodata {
			margin: 20px;
			padding: 20px;
			font-size: 25px;
		}

		.form {
			padding: 10px;
			margin: 10px;
		}

		.form-element {
			margin-bottom: 10px;
			
		}

		label {
			margin-bottom: 30px;
			font-size: 25px;
			font-weight: bold;
		}

		input {
			width: 450px;
			height: 20px;
			margin-top: 20px;
			font-size: 20px;
			padding: 10px;
		}

		select {
			width: 470px;
			height: 50px;
			margin-top: 20px;
			font-size: 20px;
			padding: 10px;
		}

		textarea {
			font-size: 20px;
			width: 470px;
			padding: 10px;
		}
		.form {
			padding: 30px;
			margin: 0 350px;
			width: 500px;
			font-size: 20px;
		}

		.btn-submit {
			height: 50px;
			width: 470px;
			background-color: #76818d;
			font-weight: bold;
			border: none;
			border-radius: 10px;
			color: white;
		}

		.btn-reset {
			height: 50px;
			width: 470px;
			background-color:salmon;
			font-weight: bold;
			border: none;
			border-radius: 10px;
		}


		.register {
			margin-top: 30px;
			text-align: center;
		}

		.cover_header img {
			position: absolute;
			height: 1000;
			width: 100%;
			background-size: cover;
		}

		a {
			text-decoration: none;
			color: black;
		}

		.cb {
			margin-right: 200px;
			border: 2px solid red;
		}

		input#texta {
			margin-top: 30px;
			width: 30px;
			margin-top:10px;
		}
.form-element {
	margin-bottom: 30px;
}

	</style>
</head>

<body>
	<div class="header">
		<nav>
			<div class="wrapper">
				<div class="logo"><img src="logo.png"></div>
				<div class="title">Visit Indonesia</div>
				<div class="menu">
					<ul>
						<li><a href="Visit Indonesia - Home Page.html" class="tbl">Home</a></li>
						<li><a href="Visit Indonesia - Indonesia.html" class="tbl">About Indonesia</a></li>
						<li><a href="Visit Indonesia - Tempat Wisata.html" class="tbl">Tourism
								Destination</a></li>
						<li><a href="Visit Indonesia - Login.php" class="tbl">Apply E-visa</a>
						</li>
					</ul>
				</div>
			</div>

		</nav>
		<div class="cover_header">
		</div>
	</div>

	<div class="profile">
		<div class="wrapper">
			
			<div class="forma">
				<h1>Register</h1>
				<h2>Register now to enter the site !</h2>
					<form class="form" id="form" name="form" autocomplete="off" action="test.php" method="post">
						<div class="form-element">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" placeholder="Name" required>
						</div>

						<div class="form-element">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" placeholder="Email" required>
						</div>

						<div class="form-element">
							<label for="password">Password</label>
							<input type="password" id="password" name="password" placeholder="Password" required>
							<input type="checkbox" id="texta" onclick="showPass()">Show Password
						</div>

						<div class="form-element">
							<label for="password">Confirm Password</label>
							<input type="password" id="c_password" name="c_password" placeholder="Confirm Password" required>
							<input type="checkbox" id="texta" onclick="showConfirmPass()">Show Password
						</div>

						<input type="submit" value="Submit" name="submit" class="btn-submit" class="btn-submit">

					</form>
		</div>
			</div>

		</div>
	</div>

	
	<script>
		//Kalau discroll, navigator akan berubah warna//
		const nav = document.querySelector('nav');

		window.addEventListener('scroll', () => {
			if (window.scrollY >= 10) {
				nav.classList.add('active_nav');
			}

			else {
				nav.classList.remove('active_nav');
			}

		})

		$(document).ready(function () {
			$(".caption").mouseover(function () {
				$(".ubah_warna").css({ "color": "red" });
				$(".ubah_warnatwo").css({ "color": "whitesmoke" });
			})

			$(".caption").mouseout(function () {
				$(".ubah_warna").css({ "color": "black" });
				$(".ubah_warnatwo").css({ "color": "black" });
			})
		})

		function showPass() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
			}

			function showConfirmPass() {
			var x = document.getElementById("c_password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
			}

	</script>
</body>

</html>