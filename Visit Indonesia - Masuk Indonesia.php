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


		.cover_header img {
			position: absolute;
			height: 700px;
			width: 100%;
			background-size: cover;
		}

		.caption {
			position: relative;
			overflow: hidden;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
			font-size: 60px;
			font-family: Permanent Marker;
			color: black;
		}

		.header {
			width: 100%;
			height: 700px;
		}

		h1 {
			font-family: 40px;
			text-align: center;
			font-weight: 800;
			margin: 30px;
		}

		h2 {
			text-align: center;
			font-size: 20px;
			width: 250px;
			margin: 20px;
			padding: 20px;

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
			margin-bottom: 20px;
			
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
			padding: 80px;
			margin: 0 300px;
			width: 500px;
			height: 2300px;
			font-size: 20px;
		}

		.btn-submit {
			height: 50px;
			width: 470px;
			background-color: aquamarine;
			font-weight: bold;
			border: none;
			border-radius: 10px;
		}

		.btn-reset {
			height: 50px;
			width: 470px;
			background-color:salmon;
			font-weight: bold;
			border: none;
			border-radius: 10px;
		}

		.form-elementa {
			border: 2px solid red;
			justify-items: left;
		}

	</style>

<?php
		define("DB_HOST", "localhost");
		define("DB_USER", "root");
		define("DB_PASSWORD", "mulutmerah");
		define("DB_DATABASE", "evisa_application");

		$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		$db = mysqli_select_db($conn,DB_DATABASE);

?>

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
			<img src="cover2.png" />
		</div>

		<div class="caption"><mark class="ubah_warna">Apply</mark><mark class="ubah_warnatwo"> Visa</mark></div>
	</div>

	<div class="profile">
		<div class="wrapper">
			<h1>Apply Visa</h1>
			<div class="profile_negara">
				<div class="tulisan_profil">
					<p class="biodata">Due to the pandemic condition, starting from September 15 <sup>th</sup>
						2022,
						foreign tourists are restricted and need visa to enter Indonesia. To apply the visa,
						you can
						fill the following form</p>
				</div>

				<div class="forma">
					<form class="form" id="form" name="form" autocomplete="off" action="test2.php" method="get">

						<div class="form-element">
							<label for="name">Full Name</label>
							<br>
							<input type="text" id="fullname" name="fullname" placeholder="Full name"
								required>
						</div>

						<div class="form-element">
							<label for="sex">Sex</label>
							<br>
							<select name="sex" id="sex" required>
								<option>Choose sex</option>
								<option>Male</option>
								<option>Women</option>
							</select>
						</div>


						<div class="form-element">
							<label for="pob">Place of Birth</label>
							<br>
							<input type="text" id="pob" name="pob" placeholder="Place of Birth" required>
						</div>

						<div class="form-element">
							<label for="dob">Date of Birth</label>
							<br>
							<input type="date" id="dob" name="dob" required>
						</div>

						<div class="form-element">
							<label for="nationality">Nationality</label>
							<br>
							<select name="nationality" id="nationality" required>
								<option>Choose nationality</option>									
								<option>Afganistan</option>
								<option>Albania</option>
								<option>Algeria</option>
								<option>Andorra</option>
								<option>Angola</option>
								<option>Antigua and Barbuda</option>
								<option>Argentina</option>
								<option>Armenia</option>
								<option>Australia</option>
								<option>Austria</option>
								<option>Azerbaijan</option>
								<option>Bahamas</option>
								<option>Bahrain</option>
								<option>Bangladesh</option>
								<option>Barbados</option>
								<option>Belarus</option>
								<option>Belgium</option>
								<option>Belize</option>
								<option>Benin</option>
								<option>Bhutan</option>
								<option>Bolivia</option>
								<option>Bosnia and Herzogovina</option>
								<option>Botswana</option>
								<option>Brazil</option>
								<option>Brunei</option>
								<option>Bulgaria</option>
								<option>Burkina Faso</option>
								<option>Burundi</option>
								<option>Cote d'Ivoire</option>
								<option>Cape Verde</option>
								<option>Cambodia</option>
								<option>Cameroon</option>
								<option>Canada</option>
								<option>Central African Republic</option>
								<option>Chad</option>
								<option>Chile</option>
								<option>China</option>
								<option>Colombia</option>
								<option>Comoros</option>
								<option>Congo</option>
								<option>Costa Rica</option>
								<option>Croatia</option>
								<option>Cuba</option>
								<option>Cypryus</option>
								<option>Czechia</option>
								<option>Republic of Congo</option>
								<option>Denmark</option>
								<option>Djibouti</option>
								<option>Dominica</option>
								<option>Dominican Republic</option>
								<option>Ecuador</option>
								<option>Egypt</option>
								<option>El Salvador</option>
								<option>Equatorial Guinea</option>
								<option>Eritrea</option>
								<option>Estonia</option>
								<option>Eswatini</option>
								<option>Ethiopia</option>
								<option>Fiji</option>
								<option>Finland</option>
								<option>France</option>
								<option>Gabon</option>
								<option>Gambia</option>
								<option>Georgia</option>
								<option>Germany</option>
								<option>Ghana</option>
								<option>Greece</option>
								<option>Grenada</option>
								<option>Guatemala</option>
								<option>Guinea</option>
								<option>Guinea-Bissau</option>
								<option>Guyana</option>
								<option>Haiti</option>
								<option>Honduras</option>
								<option>Hungary</option>
								<option>Iceland</option>
								<option>India</option>
								<option>Iran</option>
								<option>Iraq</option>
								<option>Ireland</option>
								<option>Israel</option>
								<option>Italy</option>
								<option>Jamaica</option>
								<option>Japan</option>
								<option>Jordan</option>
								<option>Kazakshstan</option>
								<option>Kenya</option>
								<option>Kiribati</option>
								<option>Kuwait</option>
								<option>Krgyzstan</option>
								<option>Laos</option>
								<option>Latvia</option>
								<option>Lenbanon</option>
								<option>Lesotho</option>
								<option>Liberia</option>
								<option>Libya</option>
								<option>Liechtenstein</option>
								<option>Lithuania</option>
								<option>Luxembourg</option>
								<option>Madagascar</option>
								<option>Malawi</option>
								<option>Malaysia</option>
								<option>Maldivies</option>
								<option>Mali</option>
								<option>Malta</option>
								<option>Marshall Islands</option>
								<option>Mauritania</option>
								<option>Mexico</option>
								<option>Micronesia</option>
								<option>Moldova</option>
								<option>Monaco</option>
								<option>Mongolia</option>
								<option>Montenegro</option>
								<option>Morroco</option>
								<option>Mozambique</option>
								<option>Myanmar</option>
								<option>Namibia</option>
								<option>Nauru</option>
								<option>Nepal</option>
								<option>Netherlands</option>
								<option>New Zealand</option>
								<option>Nicaragua</option>
								<option>Niger</option>
								<option>Nigeria</option>
								<option>North Korea</option>
								<option>North Macedonia</option>
								<option>Norway</option>
								<option>Oman</option>
								<option>Pakistan</option>
								<option>Palau</option>
								<option>Palestine</option>
								<option>Panama</option>
								<option>Papua New Guinea</option>
								<option>Paraguay</option>
								<option>Peru</option>
								<option>Philipines</option>
								<option>Poland</option>
								<option>Portugal</option>
								<option>Qatar</option>
								<option>Romania</option>
								<option>Russia</option>
								<option>Rwanda</option>
								<option>Saint Kitts and Nevis</option>
								<option>Saint Lucia</option>
								<option>Saint Vincent and the Grenadines</option>
								<option>Samoa</option>
								<option>San Marino</option>
								<option>Sao Tome and Principle</option>
								<option>Saudia Arabia</option>
								<option>Senegal</option>
								<option>Serbia</option>
								<option>Seychelles</option>
								<option>Sierra Leone</option>
								<option>Singapore</option>
								<option>Slovakia</option>
								<option>Slovenia</option>
								<option>Solomon Islands</option>
								<option>Somalia</option>
								<option>South Africa</option>
								<option>South Korea</option>
								<option>South Sudan</option>
								<option>Spain</option>
								<option>Sri Langka</option>
								<option>Sudan</option>
								<option>Suriname</option>
								<option>Sweden</option>
								<option>Switzerland</option>
								<option>Syria</option>
								<option>Tajikstan</option>
								<option>Tanzania</option>
								<option>Thailand</option>
								<option>Timor Leste</option>
								<option>Togo</option>
								<option>Tonga</option>
								<option>Trindad and Tobago</option>
								<option>Tunisia</option>
								<option>Turkey</option>
								<option>Turkmenistan</option>
								<option>Tuvalu</option>
								<option>Uganda</option>
								<option>Ukraine</option>
								<option>United Arab Emirates</option>
								<option>United Kingdom</option>
								<option>United States of America</option>
								<option>Uruguary</option>
								<option>Uzbekistan</option>
								<option>Vanuatu</option>
								<option>Venezuela</option>
								<option>Vietnam</option>
								<option>Yemen</option>
								<option>Zambia</option>
								<option>Zimbabwe</option>
							</select>

						</div>

						<div class="form-element">
							<label for="address">Full Address</label>
							<br>
							<textarea id="address" name="address" cols="70" rows="10" required></textarea>
						</div>

						<div class="form-element">
							<label for="telephone">Phone Number</label>
							<br>
							<input type="text" id="telephone" name="telephone" placeholder="Phone number"
								required>
						</div>

						<div class="form-element">
							<label for="email">Email</label>
							<br>
							<input type="email" id="email" name="email" placeholder="Email" required>
						</div>

						<div class="form-element">
							<label for="occupation">Occupation</label>
							<br>
							<select name="occupation" id="occupation" required>
							<option>Choose occupation</option>
							<option>Accountant</option>	
							<option>Artist</option>	
							<option>Athlete</option>	
							<option>Lawyer</option>	
							<option>Chef</option>	
							<option>Consulant</option>	
							<option>Doctor</option>	
							<option>Nurse</option>	
							<option>Domestic Worker</option>	
							<option>Employee</option>	
							<option>Engineer</option>	
							<option>Enterpreneur</option>	
							<option>Government Official</option>	
							<option>Housewife</option>	
							<option>Research</option>	
							<option>Student</option>	
							<option>Teacher</option>	
							<option>Others</option>	
							</select>
						</div>

						<div class="form-element">
							<label for="pasport_number">Pasport Number</label>
							<br>
							<input type="number" id="pasport_number" name="pasport_number"
								placeholder="Pasport Number" required>
						</div>

						<div class="form-element">
							<label for="duration">Duration (in days)</label>
							<br>
							<input type="number" id="duration" name="duration" placeholder="Duration"
								required>
						</div>

						<div class="form-element">
							<label for="visa_type">Type of Visa</label>
							<br>
							<select name="visa_type" id="visa_type" required>
							<option>Choose type</option>
							<option>Travel Visa</option>	
							<option>Diplomatic Visa</option>	
							<option>Worker Visa</option>	
							<option>Study Visa</option>	
							</select>
						</div>

						<div class="form-element">
							<label for="reason">Reason</label>
							<br>
							<textarea id="reason" name="reason" cols="70" rows="10" required></textarea>
						</div>

						<div class="form-element">
							<label for="vaccer">Passport Photography</label>
							<br>
							<input type="file" name="pasphoto" id="pasphoto" required>
						</div>

						<div class="form-element">
							<label for="vaccer">Lastest Vacine certificate</label>
							<br>
							<input type="file" name="vaccer" id="vaccer" required>
						</div>
						

						<input type="submit" value="Submit" name="submit" class="btn-submit" class="btn-submit">
						<input type="reset" value="Reset" name="Reset" class="btn-reset">
					</form>

				</div>
			</div>

		</div>
	</div>

	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="footer-col">
						<h3>Ministry of Tourism and Creative Economy</h3>
						<p>Jalan Medan Merdeka Barat No 17, RT/RW 02/03, Gambir, Central Jakarta City,
							Jakarta 10110</p>
					</div>

					<div class="footer-col">
						<h3>Services on this Website</h3>
						<ul>
							Terms of Service
							FAQ
							Privacy Policy
						</ul>
					</div>

					<div class="footer-col">
						<h3>Follow us on this social media !</h3>
						<div class="social-link">
							<a href="https://www.instagram.com/pesona.indonesia/"><img class="sm"
									src="https://icon-library.com/images/instagram-small-icon/instagram-small-icon-12.jpg" /></a>
							<a href="https://twitter.com/pesonaindonesia"><img img class="sm"
									src="https://cdn-icons-png.flaticon.com/512/733/733579.png"></a>
							<a href="https://www.youtube.com/c/PesonaIndonesiaofficial"><img img
									class="sma"
									src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png"
									</a>
								<a href="https://www.facebook.com/pesona.indonesia"><img img class="sm"
										src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png"></a>
								<a href="https://www.tiktok.com/@pesonaindonesia"><img img class="sm"
										src="https://pnggrid.com/wp-content/uploads/2021/04/TikTok-Logo-1363x1536.png"></a>
						</div>
					</div>
				</div>

			</div>


		</div>
	</footer>
	<div class="copyright">
		<div class="wrapper"> <span> &copy;
				<script>document.write(new Date().getFullYear())
				</script> | Visit Indonesia. All Rights Reserved.
			</span> </div>
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
	</script>
</body>

</html>