<html>
	<style>

		.seen{
			background-color: green;
			color: white;
		}
		.unseen{
			background-color: red;
			color: white;
		}
		table{
			padding:0px;
		}
		 h3{
 	color:blue;
	text-align: center;
	background-color:#F5F5F5;
	margin-left:192PX;
	font-size: 23px;
	width: 955px;
	border: 3px solid white;
}
		h3 a {

	color:green;
	text-decoration: underline;
}
	</style>
</html>

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
	?>
	
	<h3>All Patients List of Dr. Mostafa Miah</h3>
	<?php
				$result = mysql_query("select serial_no,first_name,last_name,email,address,gender,date,month,year,status from tblmostafa", $conn);
				
echo "<table  border='3px solid white' style=\" background-color:#F9F9F9;width:957px;	margin-left: 196px; margin-top: -20px; color:blue; padding:5px\">
<tr style=\" background-color:green; color:white;  \" >
        <th>Serial No</th>
	<th>First name</th>
	<th> Last name</th>
	<th> email</th>
	<th> address</th>
	<th>gender</th>
	<th>Appointment Date</th>
	<th>Status</th>

</tr>";

			while ($row = mysql_fetch_array($result)) {
				echo "<tr>";
					echo "<td>".$row['serial_no'] . "</td>";
				echo "<td>".$row['first_name'] . "</td>";
				echo "<td>".$row['last_name'] . "</td>";
				echo "<td>".$row['email'] . "</td>";
				echo "<td>".$row['address'] . "</td>";
				echo "<td>".$row['gender'] . "</td>";
				echo "<td>".$row['date'] ."/".$row['month']."/".$row['year']."/". "</td>";
				if ($row['status']==1) {
					echo "<td>"."<article class=\"seen\">"."seen"."</article>"."</td>";
				}
				
				 else if($row['status']==0){
					echo "<td>"."<article class=\"unseen\">"."unseen"."</article>"."</td>";
				}
				
				
				echo "</tr>";
			}
			
		echo "</table>";
		
mysql_close($conn); 
?>

