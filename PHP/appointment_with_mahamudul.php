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

?>
<?php
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$mobile = $_POST['mobile_no'];
$email = $_POST['email'];
$address  = $_POST['address'];
$gender  = $_POST['gender'];
$age = $_POST['age'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];

?>


<?php

$query = "insert into tblmahamudul(first_name,last_name,mobile_no,email,address,gender,age,date,month,year) values 
		('{$firstname}','{$lastname}',{$mobile},'{$email}','{$address}','{$gender}',{$age},'{$date}','{$month}','{$year}')";


		
// if (mysql_query($query,$conn)) {
// header("Location: content.php");
// exit;
// }
// else {
// echo "<p>account creation failed</p>";
	// }
	if(mysql_query($query,$conn)){
		
		header("location:appointment_form_mahamudul.php");
		return false;
	}
	
	else {
		echo "Please check your entry  : ".mysql_error();
}

?>