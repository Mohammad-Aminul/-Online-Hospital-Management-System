<?php
$select_doc = $_POST['select_doc'];

if($select_doc=='Dr. Mostafa Miah'){
	header("location:appointment_form_mostafa.php");
	return false;
}

else if($select_doc=='Dr. Mahamudul Hasan'){
	header("location:appointment_form_mahamudul.php");
	return false;
}

?>