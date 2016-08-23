<!DOCTYPE html>
<html lang="en">
	<div class="maindiv">
		<head>
			<meta charset="UTF-8" />
			<title>Welcome to Blood donation group</title>

			<header>
				<h1 align="top">Medico Hospital Limited</h1>

				<div id="clock" class="clocksize">
					clock
				</div>
				<h2> Service is our vision </h2>
			</header>

			<link rel="stylesheet" href="../CSS/blood_donation.css" type="text/css" />
			<link rel="stylesheet" href="../CSS/header_footer.css" type="text/css" />
		</head>

		<nav >
			<li >
				<a href="../HTML/home.html">Home</a>
			</li>
			<li>
				<a href="../HTML/department_list.html">Departments</a>
			</li>
			<li>
				<a href="../HTML/physicians_list.html">Physicians</a>
			</li>
			
			<li>
				<a href="room_rates.php"> Seat Rent</a>
			</li>
			<li>
				<a href="../HTML/ambulance_service.html">Ambulance service</a>
			</li>
			<li>
				<a href="admin_panel_login_form.php">Admin</a>
			</li>
			
			<form action="search_doctor.php" method="post">
			 	<select name="select_doc">
			 		<option >--select doctor--</option>
			 		<option value="Dr. Mostafa Miah">Dr. Mostafa Miah</option>
			 		<option>Dr. Rajib Miah</option>
			 		<option>Dr. Mahamudul Hasan</option>
			 		<option>Dr. Saddam Hossain</option>
			 	</select>
			 	<input type="submit" title="Search" name="submit" id="submit" value="Search" " />
			</form>
			
		</nav>
		<body onload="startTime()">
			
			<div id="loginform">
				<form action="donarinfoform.php" method="post">
					<label>Username:</label><input type="text" name="contact_no" size="30px" placeholder="your contact number"/><label>Password:</label><input type="password" size="30px" name="password" placeholder="password"/>
					<input type="submit" value="Log In" />
				</form>
			</div>
			
			
			<div class="content_form">
				<h2> To be a blood donar please sign up here</h2>
				<form action="blood_donation_connection.php" method="post">
				<label>Name<p id="star">*</p>:</label><br>
				<input type="text" name="name" placeholder="Enter your name"  size="30px"/><br><br>
				
				<label>password<p id="star">*</p>:</label><br>
				<input type="password" name="password" placeholder="Enter your password"  size="30px"/><br><br>
				
				<label >Contact Number<p id="star">*</p>:</label><br>
				<input type="text" name="contact_no" size="30px" placeholder="Enter contact number"/><br /><br>
				<label>Blood Group<p id="star">*</p>:</label><br>
				<select name="blood_group"  style="width: 209px;">
					<option>Select blood group</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>

				</select><br /><br>
				<label>Age:</label><br />
				<input type="number" name="age" style="width: 204px;" placeholder="Enter your age" /><br /><br>
				<label>Occupation:</label><br />
				<input type="text" name="occupation" placeholder="Enter your occupation" size="30px"/><br /><br>
				<label>Current City:</label><br />
				<input type="text" name="currentcity" placeholder="Enter your current city" size="30px"/><br /><br>
				<label>Home Town:</label><br />
				<input type="text" name="hometown" placeholder="Enter your home town" size="30px"/><br /><br>
				<label>Address:</label><br />
				<input type="text" name="address" placeholder="Enter your address" size="30px"/><br /><br>
				<input type="submit" name="submit" id="submit" value="Submit" /><br><br>
				
			</form>
			
			</div>
			<script src="../JS/home.js"></script>
			
		</body>
			<footer>
				<pre>
	Bindobasini girls school road, old bus stand,Tangail
24hr Emergency and Ambulance service: 8144466, 8144477, 8144488
ER Mobile: 01714418963-5, Fax: (880-2) 9118921, 9114342, email: info@aminul.ruet@yahoo.com, web: www.medicohospital.com
			</pre>
			</footer>
</div>
</html>