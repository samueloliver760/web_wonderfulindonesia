<html>

<head>
	<?php
		$conn = mysqli_connect("localhost", "root","mulutmerah");
		$db = mysqli_select_db($conn,"evisa_application");

		$sql = mysqli_query($conn, "SELECT * FROM evisa_request WHERE order_id = '$_GET[kode]'");
		$data = mysqli_fetch_array($sql);
	?>	

	<style>

* {
			margin: 0px;
			padding: 10px;
			font-size: 20px;
			font-family: 'QuickSand';
		}

		td {
			width: 200px;
		}

		input {
			width: 400px;
		}

		table {
			margin-left: auto;
			margin-right: auto;
		}

		h1 {
			text-align: center;
			font-size: 30px;
		}
	</style>
</head>


<body>
	<h1>Change the data </h1>
<form action="" method="post">
	<table>
		<tr>
			<td  width = "120">Order ID</td>
			<br/>
			<td><input type="text" name="order_id" value="<?php echo $data['order_id']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Full Name</td>
			<td><input type="text" name="full_name" value="<?php echo $data['full_name']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Sex</td>
			<td><input type="text" name="sex" value="<?php echo $data['sex']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Place of Birth</td>
			<td><input type="text" name="place_of_birth" value="<?php echo $data['place_of_birth']; ?>"></td>
		</tr>
		

		<tr>
			<td width = "120">Date of Birth</td>
			<td><input type="text" name="date_of_birth" value="<?php echo $data['date_of_birth']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Nationality</td>
			<td><input type="text" name="nationality" value="<?php echo $data['nationality']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Full Address</td>
			<td><input type="text" name="full_address" value="<?php echo $data['full_address']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Phone Number</td>
			<td><input type="text" name="phone_number" value="<?php echo $data['phone_number']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Email</td>
			<td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
		</tr>
		

		<tr>
			<td width = "120">Occupation</td>
			<td><input type="text" name="occupation" value="<?php echo $data['occupation']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Passport Number</td>
			<td><input type="text" name="pasport_number" value="<?php echo $data['pasport_number']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Duration</td>
			<td><input type="text" name="duration" value="<?php echo $data['duration']; ?>"></td>
		</tr>
		

		<tr>
			<td width = "120">Type of data</td>
			<td><input type="text" name="type_of_visa" value="<?php echo $data['type_of_visa']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Reason</td>
			<td><input type="text" name="reason" value="<?php echo $data['reason']; ?>"></td>
		</tr>

		<tr>
			<td width = "120">Pasport photography</td>
			<td><input type="text" name="pasport_photography" value="<?php echo $data['pasport_photography']; ?>"></td>
		</tr>
		

		<tr>
			<td width = "120">Vaccine Certificate</td>
			<td><input type="text" name="vaccine_certificate" value="<?php echo $data['vaccine_certificate']; ?>"></td>
		</tr>
		
		<tr>
			<td colspan="2"><input type="submit" value="Submit" name="submit" class="btn-submit" class="btn-submit"></td>
		</tr>
	</table>
</form>

<?php
	if (isset($_GET['submit'])) {
		mysqli_query($conn,"UPDATE evisa_request SET 
		full_name = '$_POST[full_name]',
		sex = '$_POST[sex]',
		place_of_birth = '$_POST[place_of_birth]',
		date_of_birth = '$_POST[date_of_birth]',
		nationality = '$_POST[nationality]',
		full_address = '$_POST[full_address]',
		phone_number = '$_POST[phone_number]',
		email = '$_POST[email]',
		occupation = '$_POST[occupation]',
		pasport_number = '$_POST[pasport_number]',
		duration = '$_POST[duration]',
		type_of_visa = '$_POST[type_of_visa]',
		reason = '$_POST[reason]',
		pasport_photography = '$_POST[pasport_photography]',
		vaccine_certificate = '$_POST[vaccine_certificate]'
		WHERE order_id = '$_GET[kode]'");
	}

?>
</body>
</html>