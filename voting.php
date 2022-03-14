<?php
	/* http://localhost/php_6minou/vote.html */

	$servername = "localhost";
	$username = "root"; //ή όποιον χρήστη έχετε
	$password = ""; // αλλάξτε το
	$dbname = "vote";


	// Δημιουργία σύνδεσης
	$conn = mysqli_connect($servername, $username, $password, $dbname);


	// Έλεγχος σύνδεσης
	if (!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
	}


	//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
	mysqli_set_charset($conn, "utf8");


	//Δημιουργία ερωτήματος
//	$sql = "INSERT INTO `vote`(`albums`, `username`, `asteria`, `sxolia`) VALUES('Maroon5Album1','kostakispro','4','mOu AreSe PolU') ;";
	
	
	//Δημιουργία ερωτήματος
	$sql = "INSERT INTO `vote` (`albums`, `username`, `asteria`, `sxolia`) VALUES ('".$_POST['albums']."','".$_POST['username']."','".$_POST['asteria']."','".$_POST['sxolia']."') ;";
	

	//εκτέλεση ερωτήματος στη βάση
	$result = mysqli_query($conn, $sql);


	//έλεγχος αποτελεσμάτων
	if ($result) {
		echo "<center>";
		echo "<img src='congrats.jpg' alt='icon' style='height:50% ; width: 50%'/>";
		echo "</center>";
		header( "Refresh:5; url=main.html", true, 303);
	}
	//κλείσιμο σύνδεσης
	mysqli_close($conn);
?>