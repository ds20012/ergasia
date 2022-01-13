<?php
	$HOST = "localhost";
	$username = "root";
	$password = "";
	$DATABASE = "announceapp";
	$conn = new mysqli($HOST,$username,$password,$DATABASE);
	
	$Text = $_GET["ann"];
	$Author = $_GET["teacher"];
	
	$sql = "insert into article(Author,Text,DatePosted)
			values('".$Author."','".$Text."',CURDATE())";
	$conn->query($sql);
	
?>