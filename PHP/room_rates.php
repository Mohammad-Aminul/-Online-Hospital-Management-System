<!DOCTYPE html>
<html lang="en">
	<div class="maindiv">
		
		<head>
			<meta charset="UTF-8" />
			<title>Room Rates</title>

			<header>
				<h1 align="top">Medico Hospital Limited</h1>

				<div id="clock" class="clocksize">
					clock
				</div>

				<h2> Service is our vision </h2>
			</header>
			
	        <link rel="stylesheet" href="../CSS/room_rates.css" type="text/css" />
	        <link rel="stylesheet" href="../CSS/header_footer.css" type="text/css" />
		</head>
		<nav>
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
				<a href="#"> Seat Rent</a>
			</li>
			<li>
				<a href="../HTML/ambulance_service.html">Ambulance service</a>
			</li>
			<li>
				<a href="../PHP/admin_panel_login_form.php">Admin</a>
			</li>
			<form action="../PHP/search_doctor.php" method="post">
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
			


			
		   <div align="center" class="bodyheader">
					<h3> Room Rates </h3>
	       </div>
				<div class="image_of_bed">
					<img src="../room_image/output_I5O2SX.gif" alt="Images of Bed" />
				</div>
			<div class="content">
					<table class="first">
					
					<tr>
						<td>Types of Room</td>
						<td>Rate(TK)per day</td>
					</tr>
					<tr>
						<td>Single bed</td>
						<td>1000</td>
					</tr>
					
					<tr>
						<td>Double bed</td>
						<td>500</td>
					</tr>
					
					<tr>
						<td>Four bed</td>
						<td>400</td>
					</tr>
					
					<tr>
						<td>Executive Deluxe suite Room</td>
						<td>2000</td>
					</tr>
					
					<tr>
						<td>VIP Room(With connection Lounge)</td>
						<td>3000</td>
					</tr>
					
					<tr>
						<td>Ac single bed</td>
						<td>550</td>
					</tr>
					
						<tr>
						<td>Ac double bed</td>
						<td>500</td>
					</tr>
					
					<tr>
						<td>Ac four bed</td>
						<td>350</td>
					</tr>
					
				</table>
				<h3>ICU</h3>
				<table>
					     <tr>
							<td>Intensive Care Unit (ICU)</td>
							<td>550</td>
						</tr>

						<tr>
							<td>High Dependency Unit (HDU)</td>
							<td>300</td>
						</tr>
			
				<table>
					
				</table>
			</div>
				
		</body>
		<script src="../JS/home.js"></script>
	</div>
	<footer>
				<pre>
	Bindobasini girls school road, old bus stand,Tangail
Phone: (880-2) 8159457, 8142431, Mobile: 01713141447 (PABX), PABX for OPD Appointment: 2001, 2002 & 2018
24hr Emergency and Ambulance service: 8144466, 8144477, 8144488
ER Mobile: 01714418963-5, Fax: (880-2) 9118921, 9114342, email: info@aminul.ruet@yahoo.com, web: www.medicohospital.com
			</pre>
			</footer>
			</html>