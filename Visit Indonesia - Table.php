<html>

<head>
	<title>Table</title>

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


		.wrapper {
			width: 1800px;
			margin: auto;
			position: relative;
			margin-bottom: 40px;
			margin-top: 20px;
			border: 2px solid red;
		}

		h1 {
			text-align: center;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		#evisa {
			border-collapse: collapse;
			margin: 30px;
		}

		#evisa td,
		#evisa th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#evisa tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#evisa tr:hover {
			background-color: #ddd;
		}

		#evisa th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;
			color: white;
			text-align: center;
		}

		button {
			background: transparent;
			border: none;
		}

		a {
			text-decoration: none;
			color: black;
		}


	</style>
</head>

<body>
	<div class="wrapper">
		
		<table border="1" id="evisa">
			<h1>E-visa request queue</h1>
			<tr> 
				<th>No</th>
				<th>Full name</th>
				<th>Sex</th>
				<th>Place of born</th>
				<th>Date of born</th>
				<th>Nationality</th>
				<th>Address</th>
				<th>Telephone</th>
				<th>Email</th>
				<th>Occupation</th>
				<th>Passport Number</th>
				<th>Duration</th>
				<th>Visa type</th>
				<th>Reason</th>
				<th>Pas poto</th>
				<th>Vaccine certificate</th>
				<th colspan="2">Button</th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "root", "mulutmerah");
			$db = mysqli_select_db($conn, "evisa_application");
			$x = 0;
			$ambil_data = mysqli_query($conn, "SELECT * FROM evisa_request ORDER BY order_id ASC");

			while ($baris = mysqli_fetch_assoc($ambil_data)) {
				echo "<tr>
						<td>$baris[order_id]</td>
						<td>$baris[full_name]</td>
						<td>$baris[sex]</td>
						<td>$baris[place_of_birth]</td>
						<td>$baris[date_of_birth]</td>
						<td>$baris[nationality]</td>
						<td>$baris[full_address]</td>
						<td>$baris[phone_number]</td>
						<td>$baris[email]</td>
						<td>$baris[occupation]</td>
						<td>$baris[pasport_number]</td>
						<td>$baris[duration]</td>
						<td>$baris[type_of_visa]</td>
						<td>$baris[reason]</td>
						<td>$baris[pasport_photography]</td>
						<td>$baris[vaccine_certificate]</td>
						<td><button><a href='update.php?kode=$baris[order_id]'>Edit</a></button></td>
						<td><button><a href='?kode=$baris[order_id]'>Delete</a></button></td>
						</tr>";

				$x++;
			}

			echo "</table>";
			?>
		</table>

	</div>


	<?php
	if (isset($_GET['kode'])) {
		mysqli_query($conn, "DELETE FROM evisa_request WHERE order_id = '$_GET[kode]'");;
	}

	?>
</body>

</html>