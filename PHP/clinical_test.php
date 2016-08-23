<!DOCTYPE html>
<html lang="en">
	<div class="maindiv">
		
		<head>
			<meta charset="UTF-8" />
			<title>Clinical Test</title>

			<header>
				<h1 align="top">Medico Hospital Limited</h1>

				<div id="clock" class="clocksize">
					clock
				</div>

				<h2> Service is our vision </h2>
			</header>
			
	        <link rel="stylesheet" href="../CSS/clinical_test.css" type="text/css" />
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
				<a href="../PHP/room_rates.php"> Seat Rent</a>
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
			
			<table id="sidetable">
			<caption id="mainmenucaption">
			Main Menu
			</caption>
			<tr>
			<th class="odd"><a href="../HTML/home.html"> Home</a></th>
			</tr>

			<tr>
			<th class="even"><a href="../HTML/department_list.html"> Departments</a></th>
			</tr>
			<tr>
			<th class="odd"><a href="../HTML/physicians_list.html"> physicians</a></th>
			</tr>
			<tr>
			<th class="even"><a href="../PHP/room_rates.php"> Seat Rent</a></th>
			</tr>
            <tr>
			<th class="odd"><a href="../PHP/blood_donation.php"> Blood Donation group</a></th>
			</tr>
			<tr>
			<th class="even"><a href="../PHP/clinical_test.php"> Clinical Test </a></th>
			</tr>
			<tr>
			<th class="odd"><a href="">Cafeteria</a></th>
			</tr>

			</table>

			
		   <div align="center" class="bodyheader">
					<h3> Clinical Test </h3>
	       </div>
				
			<div class="content">
					<table>
					
					<tr>
						<td>Test Name</td>
						<td>Cost(TK)</td>
					</tr>
					<tr>
						<td>ECG</td>
						<td>400</td>
					</tr>
					
					<tr>
						<td>Blood Test</td>
						<td>300</td>
					</tr>
					
					<tr>
						<td>Altrasnography</td>
						<td>350</td>
					</tr>
					
					<tr>
						<td>Eye Test</td>
						<td>400</td>
					</tr>
					
					<tr>
						<td>Urine Examination</td>
						<td>400</td>
					</tr>
					
					<tr>
						<td>Scan</td>
						<td>550</td>
					</tr>
					
						<tr>
						<td>Blood Test</td>
						<td>300</td>
					</tr>
					
					<tr>
						<td>Altrasnography</td>
						<td>350</td>
					</tr>
						<tr>
						<td>Urine Examination</td>
						<td>400</td>
					</tr>
					
					<tr>
						<td>Scan</td>
						<td>550</td>
					</tr>
					
						<tr>
						<td>Blood Test</td>
						<td>300</td>
					</tr>
					
					<tr>
						<td>Altrasnography</td>
						<td>350</td>
					</tr>
				</table>
			</div>
				
		</body>
		<script src="../JS/home.js"></script>
			<footer>
				<pre>
	Bindobasini girls school road, old bus stand,Tangail
Phone: (880-2) 8159457, 8142431, Mobile: 01713141447 (PABX), PABX for OPD Appointment: 2001, 2002 & 2018
24hr Emergency and Ambulance service: 8144466, 8144477, 8144488
ER Mobile: 01714418963-5, Fax: (880-2) 9118921, 9114342, email: info@aminul.ruet@yahoo.com, web: www.medicohospital.com
			</pre>
			</footer>
	</div>

			</html>