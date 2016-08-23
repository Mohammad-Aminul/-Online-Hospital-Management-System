<!DOCTYPE html>
<html lang="en">
	<div class="maindiv">
		<head>
			<meta charset="UTF-8" />
			<title >Welcome to Blood donation group</title>

			<header>
				<h1 align="top">Medico Hospital Limited</h1>

				<div id="clock" class="clocksize">
					clock
				</div>
				<h2> Service is our vision </h2>
			</header>
	<script src="../JS/home.js"></script>
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
			
		<style>
		h3{
			color: red;
		}
		article{
			
	color: black;
	font-size: 20px;		
   background-color: #006633;
	border: 3px solid white;
	padding:35px;
	width: 400px;
	font-weight: bold;
	margin: 13px 0 0 2px;
}

article p{
	border-radius: 5px;	
	background-color: white;
    padding: 5px;
  
}

article	h3{
	  color: white;
	border-radius: 5px;
	text-align: center;
	font-size: 20px;
	font-weight:bold;
	margin-top: -26px;

	}	
h4 {
   background-color:#006633;
    border: 3px solid white;
    border-radius: 10px;
    color: white;
    float: right;
    font-size: 25px;
    font-weight: bold;
    margin-right: 5px;
    margin-top: -549px;
    padding: 5px;
    text-align: center;
    width: 500px;
}
	</style>
			
		<?php //create connection
$conn = mysql_connect("localhost", "root", "");
if (!$conn) {
	die("database connection failed:" . mysql_error());

}

//select a database

$dbselect = mysql_select_db("dbappointment", $conn);
if (!$dbselect) {
	die("Database selection failed:" . mysql_error());

}


if(isset($_POST['contact_no'])&&$_POST['password']) {
	
		$contact_no=$_POST['contact_no'];
		$pass=$_POST['password'];
		
		$result = mysql_query("select * from tblblood_donation", $conn);

	//my profile
	 
while($row=mysql_fetch_array($result)) {
			if (($row['contact_number']==$_POST['contact_no']) &&($row['password']==$_POST['password'])){
echo "<article>";
echo "<h3>My Profile</h3>";
	echo "<p>Name:  ".$row['name']."</P>";
		
			echo "<p>contact Number:".$row['contact_number']."</P>";
			echo "<p>Blood group:    ".$row['blood_group']."</P>";
			echo "<p>Age:    ".$row['age']."</P>";
			echo "<p>occupation:    ".$row['occupation']."</P>";
			echo "<p>Current City:    ".$row['Currentcity']."</P>";
			echo "<p>Home Town:    ".$row['hometown']."</P>";
			echo "<p>Address:    ".$row['address']."</P>";
			echo "<a href=\"logout.php\">LogOut</a>";
			echo"</article>";
			
    require_once 'printAllDonars.php';
			
							echo"<footer>";
				echo "<pre>
	Bindobasini girls school road, old bus stand,Tangail
24hr Emergency and Ambulance service: 8144466, 8144477, 8144488
ER Mobile: 01714418963-5, Fax: (880-2) 9118921, 9114342, email: info@aminul.ruet@yahoo.com, web: www.medicohospital.com
			</pre>";
			
			echo "</footer>";
			exit;
			}
} 

			
	echo "<h3>Username or password is not correct. Please try again.</br>Thank you.</h3>";
}

else {
	header("location:blood_donation.php");
}					


?>



			
			
		
			
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