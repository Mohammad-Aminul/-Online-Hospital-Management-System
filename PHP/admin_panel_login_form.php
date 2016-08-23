<!DOCTYPE html>
<html lang="en">
	<div class="maindiv">	
			<head>
			<title>Admin panel</title>
			<meta charset="UTF-8" />
			<script src="home.js">
			</script>

			<link rel="stylesheet" href="../css/admin_panel.css" type="text/css" />
		</head>

			<div class="content">
				<h1>Admin Panel</h1>
				<form action="admin_panel.php" method="post">
					<label for="Doctor's Name:">Doctor's Name :</label>
					<select style="width:208px" name="doctor" id="doctor">
						<option>Select Doctor</option>
						<option>Dr. Mostafa Miah</option>
						<option>Dr. Rajib Miah</option>
						<option>Dr. Mahamudul Hasan</option>
						<option>Dr. Amin </option>
					</select>
					<br /><br/><br />
					<label for="username"> Username :</label>
					<input type="text" name="username" id="username" size="30px" placeholder="Enter username"/>
					<br /><br/><br />
					
					<label for="password">Password : </label>
					<input type="password" name="password" id="password" size="30px" placeholder="Enter password"/>
					<br/>
					<br/><br/><br/>
					<input type="submit" name="submit" id="submit" style="width: 107px; height:35px" value="Submit"></form>
			</div>

	
		
		
</div>

</html>