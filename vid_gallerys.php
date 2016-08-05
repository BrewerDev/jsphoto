<?php session_start();
	require_once( 'js-config.php' );
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Joshua Smith Film and Photography - Video Galleries</title>
		<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
		<link rel="stylesheet" type="text/css" href="css/pict_gallerys.css" />
		<link rel="stylesheet" href="lightbox2/css/lightbox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/core.js"></script>
		<script type="text/javascript" src="js/nav.js"></script>
		<script type="text/javascript" src="lightbox2/js/prototype.js"></script>
		<script type="text/javascript" src="lightbox2/js/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="lightbox2/js/lightbox.js"></script>

	</head>


	<body>
		<div id="back_graphic">
			<div id="container">
				<?php
					include "php/branding.php";
					include "php/nav_main.php";
				?>	
					<div  id="content_main">
						<h1>Video Galleries</h1>
							<div id='boundry_box'>
							<?php
								$sql = "SELECT * FROM videos";
								$result = mysql_query($sql, $db);
								
								while($row = mysql_fetch_array($result))// Loops untill the end of the array
								{
									$a = $row['vid_address'];
									$b = $row['vid_description'];
									
                					echo "<p class='thumbnail' onclick='vidPlayer(this,".$a.",".$b.")'><img class='thumbnail' src='".$row['thumb']."' /></a></p>";
								}
							?>
							</div><!--boundary_box-->
					</div><!--content_main-->
				<?php include "php/site_info.php";?>
			</div><!--container-->
		</div><!--back_graphic-->
		<div id='b_grad'>
			<p><img src='images/b_grad.png'/></p>
		</div>
	</body>
</html>