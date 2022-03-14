<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Pink Floyd</title>
		<meta name="Maroon5" content="maroon5">
		<link rel="icon" href="favPink.png" type="image/x-icon">
		<link rel="stylesheet" href="pinkfloyd.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body>
	   
	    <div class="menu"> 
		   <ul>
		      <li><a href="main.html">HOME</a></li>
			  <li><a href="http://localhost/php_6minou/maroon5.php"> MAROON 5</a></li>
			  <li><a href="http://localhost/php_6minou/pinkfloyd.php" style=" font-weight: 1000;" >PINK FLOYD</a></li>
			  <li><a href="diagwnismos.html" >TICKETS CONTEST</a></li>
			  <li><a href="http://localhost/php_6minou/vote.html">VOTE</a></li>
		   </ul>
		</div>
		<center>
		<h2 class="hedline"; style="font-weight:900; color:#000;"  >PINK FLOYD</h2> 
		
		</center>
		<center>
		<div class="content"> 
		<table>
		  <tr class="row1">
	             <td class="info1">
	                 <br> <p>
					   <strong>Pink Floyd</strong> were an English rock band formed in London in 1964. Gaining an <br>
					   early following as one of the first British psychedelic groups, they were distinguished for <br>
					   their extended compositions, sonic experimentation, philosophical lyrics and elaborate live shows.<br>
					   They became a leading band of the progressive rock genre, cited by some as the greatest progressive<br>
					   rock band of all time.Pink Floyd were founded in 1964 by Syd Barrett (guitar, lead vocals), Nick Mason <br>
					   (drums), Roger Waters (bass guitar, vocals), Richard Wright (keyboards, vocals) and Bob Klose <br>
					   (guitars); Klose quit in 1965.Under Barrett's leadership, they released two charting singles and <br>
					   the successful debut album The Piper at the Gates of Dawn (1967).By 2013, Pink Floyd had sold more<br>
					   than 250 million records worldwide, making them one of the best-selling music artists of all time. <br>
					   Wish You Were Here, The Dark Side of the Moon, and The Wall are among the best-selling albums of all<br>
					   time,and the latter two have been inducted into the Grammy Hall of Fame.[1] Four of the band's albums<br>
					   topped the US Billboard 200, and five of their albums topped the UK Album Chart. Hit singles include<br>
					   "See Emily Play" (1967), "Money" (1973),"Another Brick in the Wall, Part 2" (1979), "Not Now John" <br>
					   (1983), "On the Turning Away" (1987) and "High Hopes" (1994).
					 </p> <br>
					    
	             </td>
			  	 <td></td>
			     <td class="info1"> 
				    <div class="img_wrap">
			           <img class="alb" src="pinkalb1.png"  alt="alb1">
					   <?php
						/* http://localhost/php_6minou/maroon5.php  */
						/* http://localhost/php_6minou/voting.html  */
						/* http://localhost/php_6minou/pinkfloyd.php  */
						$servername = "localhost";
						$username = "root"; 
						$password = ""; 
						$dbname = "vote";

						$conn = mysqli_connect($servername, $username, $password, $dbname);
						if (!$conn) {
						 die("Connection failed: " . mysqli_connect_error());
						}
						mysqli_set_charset($conn, "utf8");
	
					$result1= $conn->query ("SELECT ROUND(AVG(asteria)) FROM vote WHERE albums='album1'; ");
					while ($row = $result1->fetch_assoc()) {
						$MO1 =  array_shift($row) ;
					}
						echo "<div style='font-size:30px; '>  ";
						echo str_repeat("⭐",$MO1);
						echo "</div>";
						
						mysqli_close($conn);  ?>
					   <div class="img_overlay">
					      <div class="img_info">The Dark Side of the Moon,<br> released on 1 March 1973 </div>
					   </div>
					</div>   
			  	 </td>
		   </tr>
		   
		   <tr>
		   <td></td> <td></td>
		   
		   <td> </td>
		   
		   </tr>
		   
		   <tr class="row2">
		         <td class="info2"> 
				  <div class="img_wrap">
			            <img class="alb" src="pinkalb2.png" alt="alb2">
						
						<?php
						/* http://localhost/php_6minou/maroon5.php  */
						/* http://localhost/php_6minou/voting.html  */
						/* http://localhost/php_6minou/pinkfloyd.php  */
						$servername = "localhost";
						$username = "root"; 
						$password = ""; 
						$dbname = "vote";

						$conn = mysqli_connect($servername, $username, $password, $dbname);

						if (!$conn) {
						 die("Connection failed: " . mysqli_connect_error());
						}

						mysqli_set_charset($conn, "utf8");
	
					$result2= $conn->query ("SELECT ROUND(AVG(asteria)) FROM vote WHERE albums='album2'; ");
					while ($row = $result2->fetch_assoc()) {
						$MO2=  array_shift($row) ;
					}
						echo "<div style='font-size:30px; '>  ";
						echo str_repeat("⭐",$MO2);
						echo "</div>";
						
						mysqli_close($conn);  ?>
						
					    <div class="img_overlay">
					        <div class="img_info">Wish You Were Here,<br> released on 12 September 1975 </div>
						</div>
						
					</div>    
				 </td>
				<td></td>
		         <td class="info2">
				      <br> <p>  						
					  Guitarist and vocalist David Gilmour joined in December 1967; Barrett left in April 1968 due to<br>
					  deteriorating mental health. Waters became the primary lyricist and thematic leader, devising the <br>
					  concepts behind the band's peak success with the albums The Dark Side of the Moon (1973), Wish You<br>
					  Were Here (1975), Animals (1977) and The Wall (1979). The musical film based on The Wall, Pink Floyd<br>
					  – The Wall (1982), won two BAFTA Awards.Following personal tensions, Wright left Pink Floyd in 1979,<br>
					  followed by Waters in 1985. Gilmour and Mason continued as Pink Floyd, rejoined later by Wright. The <br>
					  band produced two more albums—A Momentary Lapse of Reason (1987) and The Division Bell (1994)—<br>
					  and toured in support of both albums before entering a long period of inactivity. In 2005, all but <br>
					  Barrett reunited for a one-off performance at the global awareness event Live 8. Barrett died in <br>
					  2006, and Wright in 2008.The last Pink Floyd studio album, The Endless River (2014), was based<br> 
					  on unreleased material from the Division Bell recording sessions.
					  </p><br> 
			     </td>
		   
		  </tr>
		  <tr></tr>
		  
		</table>  
	    </div>
		</center>

	
    </body>
</html>