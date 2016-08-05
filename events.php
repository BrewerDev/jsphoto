<?php session_start();
	require_once( 'js-config.php' );
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Joshua Smith film and photography</title>
		<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
		<link rel="stylesheet" type="text/css" href="css/events.css" />
		<script type="text/javascript" src="js/core.js"></script>
		<script type="text/javascript" src="js/nav.js"></script>
	</head>


	<body>
		<div id="back_graphic">
			<div id="container">
				<?php
					include "php/branding.php";
					include "php/nav_main.php";
				?>	
					<div  id="content_main">
					
						<h1>Joshua Smith Event Calendar</h1>
					
						<div id="l_side">
						<?php
							$sql = "SELECT * FROM events";
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".January."</h2>";
							$result = mysql_query($sql, $db);					
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'01',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
							
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".Febuary."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'02',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".March."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'03',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";		
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".April."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'04',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".May."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'05',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".June."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'06',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
						?>
						</div><!--l_side-->
						<div id="r_side">
						<?php
							echo 	"<div class='e-month'><h2 class='title_bar'>".July."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'07',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".August."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'08',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".September."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'09',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";		
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".October."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'10',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".November."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'11',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";			
								}
							}
							echo "</div>";/**/
							
							echo 	"<div class='e-month'><h2 class='title_bar'>".December."</h2>";
							$result = mysql_query($sql, $db);
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								if( !substr_compare($row ['event_date'],'12',5,2))
								{//echo $row ['event_date'].'-'.substr($row ['event_date'],5,2).'<br/>' ;
								echo "<p class=''>".$row['event_name'].", ".$row['event_date']."</p>";		
								}
							}
							echo "</div>";/**/
						?>
						</div><!--r_side-->
					</div><!--content_main-->
					
				<?include "php/site_info.php";?>
				
			</div><!--container-->
		</div><!--back_graphic-->
		<div id='b_grad'>
			<p><img src='images/b_grad.png'/></p>
		</div>
	</body>
</html>
