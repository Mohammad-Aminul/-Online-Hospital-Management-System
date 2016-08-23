<?php
$conn = mysql_connect("localhost", "root", "");
if (!$conn) {
	die("database connection failed:");

}

//select a database

$dbselect = mysql_select_db("dbappointment", $conn);
if (!$dbselect) {
	die("Database selection failed:");
	
}

$name = $_POST['name'];
$password = $_POST['password'];
$contact_number = $_POST['contact_no'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$occupation = $_POST['occupation'];
$currentcity = $_POST['currentcity'];
$hometown = $_POST['hometown'];
$address = $_POST['address'];
$query = "INSERT INTO tblblood_donation( name, password, contact_number, blood_group, age, occupation,currentcity,hometown,address)values('{$name}','{$password}',
'{$contact_number}','{$blood_group}',{$age},'{$occupation}','{$currentcity}','{$hometown}','{$address}')";



	if(mysql_query($query,$conn)){
		header("location:blood_donation.php");
		return false;
	}
		
else {
			echo "Please check your entry.".mysql_error();
}

?>