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

$doctor = $_POST['doctor'];
$username = $_POST['username'];
$password = $_POST['password'];
?>

<?php
$query = "select * from tbladmin";


$result=mysql_query($query,$conn);

while ($row = mysql_fetch_array($result)){
	
if( $row['docname']==$doctor&& $row['username']==$username && $row['password']==$password){
	if($doctor=='Dr. Mahamudul Hasan'){
		header("location: admin_of_mahamudul.php");
			return false;
	}
	else if($doctor=='Dr. Mostafa Miah'){
		header("location: admin_of_mostafa.php");
			return false;
	}
}	
}
	echo $doctor."'s admin panel is not found";
?>

<?php mysql_close($conn); ?>