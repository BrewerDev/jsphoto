<?php session_start();
	require_once( 'js-config.php' );
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Joshua Smith Film and Photography - News</title>
		<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
		<link rel="stylesheet" type="text/css" href="css/news.css" />
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
					<h1>News</h1>
					<div id="news_blog">
						<h2 class='title_bar'>Site News</h2>
						<?php
							$sql = "SELECT * FROM news_posts ORDER BY news_date DESC";
							$result = mysql_query($sql, $db);
							
							while($row = mysql_fetch_array($result))// Loops untill the end of the array
							{
								echo	"<div class='blog'>
												<h3 class='blog'>".$row['news_title']."</h3>
												<h4 class='blog'>".$row['news_date']."</h4>
												<p class='blog'>".$row['news_body']."</p>
											</div>";
							}
						?>
					</div><!--news_blog-->
					
					<div id='left_side'>
						<div id="new_picts">
							<h2 class="title_bar">Newest Images</h2>
							<?php
								$sql = "SELECT * FROM images ORDER BY img_date DESC  LIMIT 3";
								$result = mysql_query($sql, $db);
								
								while($row = mysql_fetch_array($result))// Loops untill the end of the array
								{
									echo	"<p class='thumbnail_sm'><a href='".$row['img_address']."' rel='lightbox[picts]' title='my caption'><img class='thumbnail_sm' src='".$row['thumb']."' /></a></p>";
									//echo	"<p class='thumbnail_sm'><img src='".$row['thumb']."' alt='' class='thumbnail_sm'/></p>";
								}
							?>
							<div class="divider"></div>
						</div><!--new_picts-->
						
						<div id="new_vids">
							<h2 class="title_bar">Newest Videos</h2>
							<?php
								$sql = "SELECT * FROM videos ORDER BY vid_date DESC LIMIT 3";
								$result = mysql_query($sql, $db);
								
								while($row = mysql_fetch_array($result))// Loops untill the end of the array
								{
								
									$a = $row['vid_address'];
									$b = $row['vid_description'];
									
									echo	"<p class='thumbnail_sm' onclick='vidPlayer(this,".$a.",".$b.")' ><img class='thumbnail_sm' src='".$row['thumb']."' /></p>";
									//<p class='thumbnail' onclick='vidPlayer(this,".$a.",".$b.")'><img class='thumbnail' src='".$pict['thumb']."' /></a></p>
								}
							?>
						</div><!--new_vids-->
							
						<div id="new_events">
							<h2 class="title_bar">Newest Events</h2>
							<p>
								<?php
									$sql = "SELECT * FROM events ORDER BY post_date DESC LIMIT 12";
									$result = mysql_query($sql, $db);
								
									while($row = mysql_fetch_array($result))// Loops untill the end of the array
									{
										echo	$row['event_name'].", ".$row['event_date']."<br/><br/>";
									}
							?>
							</p>
						</div>
					</div><!--left_side-->
				</div><!--content_main-->
				
				<?include "php/site_info.php";?>
				
			</div><!--container-->
		</div><!--back_graphic-->
		<div id='b_grad'>
			<p><img src='images/b_grad.png'/></p>
		</div>
	</body>
</html>
