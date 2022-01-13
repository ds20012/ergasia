<?php 
	$HOST = "localhost";
	$username = "root";
	$password = "";
	$DATABASE = "announceapp";
	$conn = new mysqli($HOST,$username,$password,$DATABASE);
	$sql = "select * from article";
	$result = $conn->query($sql);
	
	if (isset($_GET["teacher"])) {
		while ($row = $result->fetch_assoc() )
			if ($_GET["teacher"] == $row["Author"])
				echo "<div class = 'announces'> Author :".$row["Author"]." <br><br> 
					Message : <br> ".$row["Text"]." <br><br> </div>";
	}
	else {
		while ($row = $result->fetch_assoc() )
			echo "<div class = 'announces'> Author :".$row["Author"]." <br><br> 
				Message : <br> ".$row["Text"]." <br><br> </div>";
	}
?>