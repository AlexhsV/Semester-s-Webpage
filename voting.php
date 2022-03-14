<?php
	/* http://localhost/php/vote.html */

	$servername = "localhost";
	$username = "root"; 
	$password = ""; 
	$dbname = "vote";


	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
	}

	mysqli_set_charset($conn, "utf8");


	$sql = "INSERT INTO `vote` (`albums`, `username`, `asteria`, `sxolia`) VALUES ('".$_POST['albums']."','".$_POST['username']."','".$_POST['asteria']."','".$_POST['sxolia']."') ;";
	
	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "<center>";
		echo "<img src='congrats.jpg' alt='icon' style='height:50% ; width: 50%'/>";
		echo "</center>";
		header( "Refresh:5; url=main.html", true, 303);
	}

	mysqli_close($conn);
?>