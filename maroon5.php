!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Maroon 5</title>
		<meta name="Maroon5" content="maroon5">
		<link rel="icon" href="media/favMar.png" type="image/x-icon">
		<link rel="stylesheet" href="maroon5.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body>
	   
	    <div class="menu"> 
		   <ul>
		      <li><a href="index.html">HOME</a></li>
			  <li><a href="http://localhost/php/maroon5.php"style=" font-weight: 1000;"> MAROON 5</a></li>
			  <li><a href="http://localhost/php/pinkfloyd.php">PINK FLOYD</a></li>
			  <li><a href="diagwnismos.html">TICKETS CONTEST</a></li>
			  <li><a href="http://localhost/php/vote.html">VOTE</a></li>
		   </ul>
		</div>
		<center>
		<h2 class="hedline"; style="font-weight:900; " >MAROON 5</h2> 
		</center>
		<center>
		<div class="content"> 
		<table>
		  <tr class="row1">
	             <td class="info1">
	                 <br> <p><strong>Maroon</strong> 5 is an American pop rock band from Los Angeles, California. It currently consists of lead <br>
				      vocalist Adam Levine, keyboardist and rhythm guitarist Jesse Carmichael, lead guitarist James Valentine,<br> 
				      drummer Matt Flynn, keyboardist PJ Morton and multi-instrumentalist and occasional bassist Sam Farrar.Original <br>
					  members Levine, Carmichael, bassist Mickey Madden, and drummer Ryan Dusick first came together as Kara's <br>
					  Flowers in 1994, while they were still in high school.After self-releasing their independent album We Like <br>
					  Digging?, the band signed to Reprise Records and released the album The Fourth World in 1997. The album garnered <br>
					  a tepid response, after which the record label dropped the band and the members focused on college. In 2001,<br>
					  the band re-emerged as Maroon 5, pursuing a different direction and adding guitarist Valentine.[3] The band <br>
					  signed with Octone Records, an independent record label with a separate joint venture relationship with J <br>
					  Records and released their debut album Songs About Jane in June 2002. 
					  </p> <br>
					    
	             </td>
			  	 <td></td>
			     <td class="info1"> 
				    <div class="img_wrap">
			           <img class="alb" src="media/maroonalb1.png"  alt="alb1">
					   									
						<?php
							/* http://localhost/php/maroon5.php  */
							/* http://localhost/php/voting.html  */
							/* http://localhost/php/pinkfloyd.php  */
							$servername = "localhost";
							$username = "root"; 
							$password = ""; 
							$dbname = "vote";

							$conn = mysqli_connect($servername, $username, $password, $dbname);

							if (!$conn) {
							 die("Connection failed: " . mysqli_connect_error());
							}

							mysqli_set_charset($conn, "utf8");
		
						$result3= $conn->query ("SELECT ROUND(AVG(asteria)) FROM vote WHERE albums='album3'; ");
						while ($row = $result3->fetch_assoc()) {
							$MO3 =  array_shift($row) ;
						}
							echo "<div style='font-size:30px; '>  ";
							echo str_repeat("⭐",$MO3);
							echo "</div>";
							
							mysqli_close($conn);  ?>
					   
					   <div class="img_overlay">
					      <div class="img_info">Jordi,<br>released on June 11, 2021</div>
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
			            <img class="alb" src="maroonalb2.jpg" alt="alb2">
						
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
	
					$result4= $conn->query ("SELECT ROUND(AVG(asteria)) FROM vote WHERE albums='album4'; ");
					while ($row = $result4->fetch_assoc()) {
						$MO4 =  array_shift($row) ;
					}
						echo "<div style='font-size:30px; '>  ";
						echo str_repeat("⭐",$MO4);
						echo "</div>";
						
						mysqli_close($conn);  ?>
						
					    <div class="img_overlay">
					        <div class="img_info">Overexposed ,<br>released on June 20, 2012</div>
						</div>

					</div>  
				        
				 </td>
				<td></td>
		         <td class="info2">
				      <br> <p>   Aided by the singles "Harder to Breathe", "This Love" and "She Will Be Loved", the album peaked at <br>
					  number six on the Billboard 200 chart[4] and went quadruple platinum in 2005. In the same year, the band won the<br>
					  Grammy Award for Best New Artist.[5] In 2006, Dusick left the band after suffering from serious wrist and shoulder<br> 
					  injuries and was replaced by Matt Flynn.The band's second album It Won't Be Soon Before Long was released in May 2007.<br> 
					  It debuted at number one on the US Billboard 200 chart and the lead single "Makes Me Wonder", became the band's first <br>
					  number-one single on the Billboard Hot 100. In 2010, the band released the third album Hands All Over, to favorable <br>
					  reviews, re-releasing a year later to include the single "Moves like Jagger", which topped the Billboard Hot 100. <br>
					  In 2012, Carmichael left the group and was replaced by musician PJ Morton, as the band released the fourth album Overexposed,<br>
					  with the song "One More Night", topping the Billboard Hot 100 chart for nine consecutive weeks. </p><br> 
			     </td>
		   
		  </tr>
		  <tr></tr>
		  
		</table>  
	    </div>
		</center>

    </body>
</html>