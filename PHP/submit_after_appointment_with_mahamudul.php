<?php
$conn = mysql_connect("localhost", "root", "");
if (!$conn) {
	die("database connection failed:" . mysql_error());

}

//select a database

$dbselect = mysql_select_db("dbappointment", $conn);
if (!$dbselect) {
	die("Database selection failed:" . mysql_error());
	
}
$status = $_POST['status'];
$serial_no =$_POST['serial_no'];

$query = "update tblmahamudul set status=$status where serial_no=$serial_no";

$result = mysql_query($query, $conn);

if ($result) {
header("location:admin_of_mahamudul.php");
	return false;
}
	else {
		echo "upadate Failed.";
	}
?>