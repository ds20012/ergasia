<?php
	$HOST = "localhost";
	$username = "root";
	$password = "";
	$DATABASE = "announceapp";
	$conn = new mysqli($HOST,$username,$password,$DATABASE);
	$sql = "select distinct Author from article";
	$result = $conn->query($sql);
	
	echo "<select id = 'teachers' onchange='FilterTeacher()'>";
	while ($row = $result->fetch_assoc() ) {
		echo "<option value = '".$row["Author"]."'>";
		echo $row["Author"];
		echo "</option>";
	}
	echo "</select>";

?>