<?php session_start();
	require_once( 'js-config.php' );
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Joshua Smith Film and Photography - Biography</title>
		<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
		<link rel="stylesheet" type="text/css" href="css/bio.css" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/vid_play.css" type="text/css"/>
		<script type="text/javascript" src="js/vid_play.js"></script>
		<script type="text/javascript" src="js/core.js"></script>
		<script type="text/javascript" src="js/nav.js"></script>
		<script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>
	</head>


	<body>
		<div id="back_graphic">
			<div id="container">
				<?php
					include "php/branding.php";
					include "php/nav_main.php";
				?>	
					<div  id="content_main">
						
						<h1>About Joshua Smith</h1>
						<div id='boundry_box'>
							<div id="bio">
							<!--<h2 class="title_bar">Newest Images</h2>-->
							<p class='thumbnail'><img src='	images/photos/self_portraits/C-DSC_4468.jpg'alt='picture of josh smith' height=221/></p>
							<p class='bio_body'></p>
								<?php
									$sql = "SELECT * FROM mics_text WHERE txt_name='bio' ";
									$result = mysql_query($sql, $db);
							
									while($row = mysql_fetch_array($result))// Loops untill the end of the array
									{
										echo	$row['txt_body'];
									}
								?>
							
							</div><!--bio-->
							<!--<div id='self_port'>
								<h2 class="title_bar">Self Portraits</h2>
								<?php
									$sql = "SELECT * FROM self_p ORDER BY p_date DESC  LIMIT 6";
									$result = mysql_query($sql, $db);
								
									while($row = mysql_fetch_array($result))// Loops untill the end of the array
									{
										echo	"<p class='thumbnail_2'><a href='".$row['p_link']."' rel='lightbox[self]' title='".$row['img_description']."'><img src='".$row['thumb']."' alt='' class='thumbnail_2'/></a></p>";
									}
								?>
							</div>self_port-->
						
							<!--<div id='fav_picts'>
								<h2 class="title_bar">Favorite Photographs</h2>
							
								<?php
									$sql = "SELECT * FROM images WHERE fav='t' ORDER BY img_date DESC  LIMIT 6";
									$result = mysql_query($sql, $db);
								
									while($row = mysql_fetch_array($result))// Loops untill the end of the array
									{
										echo	"<p class='thumbnail_2'><a href='".$row['img_address']."' rel='lightbox[picts]' title='".$row['img_description']."'><img src='".$row['thumb']."' alt='' class='thumbnail_2'/></a></p>";
									}
								?>
							</div>fav_picts-->
						
							<!--<div id='fav_vids'>
								<h2 class="title_bar">Favorite Videos</h2>
								<?php
									$sql = "SELECT * FROM videos WHERE fav='t' ORDER BY vid_date DESC LIMIT 6";
									$result = mysql_query($sql, $db);
								
									while($row = mysql_fetch_array($result))// Loops untill the end of the array
									{
										$a = $row['vid_address'];
										$b = $row['vid_description'];
										
										echo	"<p class='thumbnail_2' onclick='vidPlayer(this,".$a.",".$b.")'><img class='thumbnail_2' src='".$row['thumb']."' /></p>";
										//      "<p class='thumbnail' onclick='vidPlayer(this,".$a.",".$b.")'><img class='thumbnail' src='".$pict['thumb']."' /></a></p>
									}
								?>
							</div>fav_vids-->
						</div><!--boundry_box-->
					</div><!--content_main-->
					
				<?include "php/site_info.php";?>
				
			</div><!--container-->
		</div><!--back_graphic-->
		<div id='b_grad'>
		<p><img src='images/b_grad.png'/></p>
		</div>
	</body>
</html>