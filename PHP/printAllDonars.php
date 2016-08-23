<h4>All donars list</h4>
<style>
th:hover:nth-child(n+1) {
	background-color:#006633;}	
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

$result = mysql_query("select * from tblblood_donation", $conn);
echo "<table  border='3px solid white' style=\" background-color:#F9F9F9;width:488px;position: absolute; margin-left:488px; margin-top: -490px; color:blue; padding:5px\">
<tr style=\" background-color:#006633; color:white;  \" >
        <th>Name</th>
	<th>Blood Group</th>
	<th> Contact Number</th>
	<th>Current city</th>

</tr>";

			while ($row = mysql_fetch_array($result)) {
				echo "<tr>";
				
				echo "<td>".$row['name'] . "</td>";
				echo "<td>".$row['blood_group'] . "</td>";
				echo "<td>".$row['contact_number'] . "</td>";
				echo "<td>".$row['Currentcity'] . "</td>";
	
				echo "</tr>";
			}
			
		echo "</table>";
		

	?>