<html>
	<title>Admin Of Dr. Mostafa Miah</title>
	<style>
		form{
			border: medium outset green;
			background-color: #f9f9f9;
			padding: 12px;
			margin: 5px 0 0 13em;
			box-shadow: 1px 1px 1px 1px solid black;
		    width: 927px;
		}
		
		label,input,select{
			margin-top: 9px;
		}
		h2{
			margin: 0 9em;
			color: red;
		}
		.seen{
			background-color: green;
			color: white;
		}
		.unseen{
			background-color: red;
			color: white;
		}
	</style>
	
	<form action="submit_after_appointment_with_mostafa.php" method="post">
		<h2>Admin Of Dr. Mostafa Miah</h2>
		<label for="serial number">Enter Seen patient Serial number :</label>
		<input type="text" name="serial_no" id="serial_no" placeholder="Enter serial number" /><br />
		<label for="status">Enter Status :</label>
		<select name="status">
			
			<option value="1">Seen</option>
			<option value="0">Unseen</option>
		</select><br />
		<input type="submit" value="submit" />
	</form>
	
</html>
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


if (!$result = mysql_query("select * from tblmostafa", $conn)) {
	echo "Data Not found";
	return false;
}

?>
<?php

echo "<table  border='2px outset white' style=\" background-color:#F9F9F9;width:957px;	margin: 23px 0 0 13em; color:blue; padding:5px\">
<tr style=\" background-color:green; color:white;  \" >
	<th>Serial No</th>
	<th>First name</th>
	<th> Last name</th>
	<th>Mobile No</th>
	<th> email</th>
	<th> address</th>
	<th>gender</th>
	<th>Age</th>
	<th>Appointment Date</th>
	<th>Status</th>

</tr>";

	while ($row = mysql_fetch_array($result)) {
echo "
<tr>
	";
	echo "<td>".$row['serial_no'] . "</td>";
	echo "<td>".$row['first_name'] . "</td>";
	echo "<td>".$row['last_name'] . "</td>";
	echo "<td>".$row['mobile_no'] . "</td>";
	echo "<td>".$row['email'] . "</td>";
	echo "<td>".$row['address'] . "</td>";
	echo "<td>".$row['gender'] . "</td>";
	echo "<td>".$row['age'] . "</td>";
	echo "<td>".$row['date'] ."/".$row['month']."/".$row['year']."/". "</td>";
	
	if ($row['status']==1) {
	echo "<td>"."<p class=\"seen\">"."seen"."</p>"."</td>";
		}

		else if($row['status']==0){
	echo "<td>"."<p class=\"unseen\">"."unseen"."</p>"."</td>";
		}

		echo "
</tr>
";
}
			
		echo "</table>";
		
mysql_close($conn); ?>













