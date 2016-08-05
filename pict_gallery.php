<?php session_start();
	require_once( 'js-config.php' );
	$g=$_GET['gallery'];
	$n=$_GET['title'];
	
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Joshua Smith Film and Photography</title>
		<link rel="stylesheet" type="text/css" href="css/style_sheet.css" /><!---->
		<link rel="stylesheet" type="text/css" href="css/pict_gallery.css" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/core.js"></script>
		<script type="text/javascript" src="js/nav.js"></script>
		<script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>

	</head>


	<body>
		<div id='t_grad'>
			<p><img src='images/t_grad-2.png'/></p>
		</div>
		<div id="back_graphic">
			<div id="container">
				<?php
					include "php/branding.php";
					include "php/nav_main.php";
				?>	
					<div  id="content_main">
						
						<?php
            				$sql_1 = "SELECT * FROM gallery_contents WHERE gallery_id = '".$g."'";
            				
            				//echo $sql_1;
            				$result_1 = mysql_query($sql_1, $db);
							
							echo "<h1>".$n."</h1>";
							echo "<div id='thumbs'>";
							
            				while($row = mysql_fetch_array($result_1))// Loops untill the end of the array
            				{
            					$sql_2 = "SELECT * FROM images WHERE img_id = '".$row['content_id']."'";
            				
            					//echo $sql_2;
            				
            					$result_2 = mysql_query($sql_2, $db);
            					$pict = mysql_fetch_array($result_2);
            				
            					//echo $pict['thumb'];
                				echo	"<p class='thumbnail'><a href='".$pict['img_address']."' rel='lightbox[gallery]' title='".$pict['img_description']."'><img class='thumbnail' src='".$pict['thumb']."' /></a></p>";
            				}
							echo "</div><!--thumbs-->";
						?>
						
					</div><!--content_main-->
					
				<?include "php/site_info.php";?>
				
			</div><!--container-->
		</div><!--back_graphic-->
		<div id='b_grad'>
			<p><img src='images/b_grad.png' /></p>
		</div>
	</body>
</html>
