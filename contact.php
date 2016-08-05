<?php session_start();
	require_once( 'js-config.php' );
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Joshua Smith Film and Photography - Contact Me</title>
		<link rel="stylesheet" type="text/css" href="css/style_sheet.css" />
		<link rel="stylesheet" type="text/css" href="css/contact.css" />
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
					<div id="content_main">
					
						<p id="content_sup"><Img src="images/door.jpg" alt="picture of a door" height="425"/></p>
					
					
					
						<form method="post" enctype="multipart/form-data" action="mailto:ezhoura@gmail.com">
						
								<h2>Contact Form</h2>
								
								<p id="sub_heading">josh_smith@jsphoto.biz</p>
						
								<p id="name_1">
									<label for="fname">First Name: </label><br/>
									<input name="fname" id="fname" type="text" /> 
								</p>
								<p id="name_2">
									<label for="lname">Last Name: </label><br/>
									<input name="lname" id="lname" type="text" /> 
								</p>
							
								<label for="email">Email Address: </label><br/>
								<input name="email" id="email" type="text"/>
							
							
								<label for="subject">Subject: </label><br/>
								<input name="subject" id="subject" type="text" /> 
							
							
								<label for="text">Message: </label><br/>
								<textarea name="text" id="text">
								</textarea>
							
							
								<input name="submit" id="submit" type="submit"  value="Send" />
								<input name="reset" id="reset" type="reset" value="Clear" />
							
						</form> 
					</div>
					
				<?include "php/site_info.php";?>
				
			</div><!--container-->
		</div><!--back_graphic-->
		<div id='b_grad'>
			<p><img src='images/b_grad.png'/></p>
		</div>
	</body>
</html>