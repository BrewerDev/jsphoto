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
		<link rel="stylesheet" type="text/css" href="css/vid_gallery.css" />
		<link rel="stylesheet" href="css/vid_play.css" type="text/css"/>
		<script type="text/javascript" src="js/vid_play.js"></script>
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
						<div class="vid">
							
							<iframe width="425" height="349" src="http://www.youtube.com/embed/EKU8iBKha6o" frameborder="0" allowfullscreen></iframe>
							
							<iframe width="425" height="349" src="http://www.youtube.com/embed/Dzodff8yHeQ" frameborder="0" allowfullscreen></iframe>
							
							<iframe width="425" height="349" src="http://www.youtube.com/embed/y9gFbPDjU1Y" frameborder="0" allowfullscreen></iframe>
							
							<iframe width="425" height="349" src="http://www.youtube.com/embed/XUt6h_poI-k" frameborder="0" allowfullscreen></iframe>
							
							<iframe width="425" height="349" src="http://www.youtube.com/embed/HFMV-pX2VUM" frameborder="0" allowfullscreen></iframe>
							
							<iframe width="425" height="349" src="http://www.youtube.com/embed/ACkhZp4Z3kk" frameborder="0" allowfullscreen></iframe>
							
							<iframe width="425" height="349" src="http://www.youtube.com/embed/R7sE1hKto9U" frameborder="0" allowfullscreen></iframe>
						</div>
						
					</div><!--content_main-->
					
				<?include "php/site_info.php";?>
				
			</div><!--container-->
		</div><!--back_graphic-->
		<div id='b_grad'>
			<p><img src='images/b_grad.png'/></p>
		</div>
	</body>
</html>