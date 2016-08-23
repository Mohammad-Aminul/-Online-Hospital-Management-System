<!DOCTYPE html>
<html lang="en">
	<div class="maindiv">
		<head>
			<title>Appointment with Dr.Mahamudul</title>
			<meta charset="UTF-8" />

			<script src="../JS/home.js"></script>
			<link rel="stylesheet" href="../CSS/appointment.css" type="text/css" />
			<header>

				<li class="home">
					<a href="../HTML/home.html">Home</a>
				</li>

				<li class="appointment_time">

					Appointment Time:
					<span>10am-4pm</span>
				</li>

				<li id="clock"  class="clocksize">

				</li>

			</header>
		</head>
		<body onload="startTime()">
<div class="noticemarquee">
	<marquee dir="ltr" scrollamount="1" scrolldelay="5">Now Dr. Mahamudul is in his chamber and is meeting with patients </marquee>
</div>
			<div class="formdiv">
				<h1 align="center"> Sign up Here </h1>
				
				<form action="appointment_with_mahamudul.php" method="post">

					<label>First Name:<mark>*</mark> </label>
					<input type="text" placeholder="First name" size="40px" id="first_name" name="first_name"/>
					<br />
					<br />
					<label>Last Name: </label>
					<input type="text" placeholder="Last name" size="40px" id="last_name"  name="last_name"/>
					<br />
					<br />
					<label>Phone/Mobile No.:<mark>*</mark></label>
					<input type="tel" placeholder="Phone/Mobile No."  size="40px" id="mobile_no" name="mobile_no"/>
					<br />
					<br />
					<label>Email:</label>
					<input type="email" placeholder="Enter your email" size="40px"  id="email" name="email"/>
					<br />
					<br />
					<label>Address:<mark>*</mark></label>
					<input type="text" placeholder="Address" size="40px" id="address" name="address"/>
					<br />
					<br />
					<label>Gender:</label>
					<select style="width: 269px;" id="gender" name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select>
					<br />
					<br />
					<label>Age:</label>
					<input type="number" placeholder="Enter your age" style="width: 265px;" id="age" name="age"/>
					<br />
					<br />

					<div class="appoint_date">
						<label for="appt_date">Appointment Date:<mark>*</mark></label>
						<br />
						
						<label>Date:</label>
						<select id="date" name="date">
								
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								
						</select>
						<label>Month:</label>
                        <select id="month" name="month">
							
								<option>January</option>
								<option>February</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>Octorber</option>
								<option>November</option>
								<option>December</option>

							</select>
							<label>Year:</label>
							<select id="year" name="year">
										
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>

							</select>
		
					</div>
					<br />
					<input type="submit" value="Submit"  style="width: 107px; height:35px" id="submit" name="submit"/>
				</form>

			</div>

			<div class="physicianinfo">
				<h2>Dr.Mahamudul Hasan</h2>
				<img src="../physician_image/mahamudul.JPG" id="imagesize" />
				<p>
					<pre>
	Director of Medical services and Consultant
	Department of General Surgery
	Mobile No.:01938782837
				</pre>
				</p>

			</div>

		  <h3>Today's Patients List <a href="print_allpatienlist_of_mahamudul.php">(To see All patients click here)</a></h3>
			<?php
			require 'print_todaypatienlist_of_mahamudul.php';
			?>
		
		</body>
	<footer>
			<pre>
	Bindobasini girls school road, old bus stand,Tangail
Phone: (880-2) 8159457, 8142431, Mobile: 01713141447 (PABX), PABX for OPD Appointment: 2001, 2002 and 2018
24hr Emergency and Ambulance service: 8144466, 8144477, 8144488
ER Mobile: 01714418963-5, Fax: (880-2) 9118921, 9114342, email: info@aminul.ruet@yahoo.com, web: www.medicohospital.com
			</pre>
		</footer>

	</div>		

</html>