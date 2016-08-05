<?php
	require_once( 'js-config.php' );
?>

<div id="nav_main">
        <div id="lnk_home" class="button">
            <p><a href="index.php">Home</a></p>
       	</div><!--lnk_home-->
            
        <div id="lnk_bio" class="button">
            <p><a href="bio.php">Bio</a></p>
       	</div><!--lnk_bio-->
            
	<div id="lnk_news" class="button">
        	<p><a href="news.php">News</a></p>
       	</div><!--lnk_news-->
                        
        <div id="lnk_events" class="button">
            <p id="evnt_lnk" class="link"><a href="events.php">Events</a></p>
       	</div><!--lnk_events-->
            
        <div id="lnk_gal" class="button">
        	<p id="gal_arrow" class="arrow"><img src="images/arrow_3.gif" width="11" height="11" alt="extend gallery list" /></p>
        	
        	<p id="gal_lnk" class="link"><a href="pict_gallerys.php">Galleries</a></p>
	</div><!--lnk_gal-->
            
        <div id="list_2" class="closed">
		<?php
			$sql = "SELECT * FROM gallerys WHERE gallery_type = 'p'";
			$result = mysql_query($sql, $db);
			
			echo	"<ul id='gal_links' class='link_list'>";
			while($row = mysql_fetch_array($result))// Loops untill the end of the array
			{
				echo "<li><a href='pict_gallery.php?gallery=".$row['gallery_id']."'>".$row['gallery_title']."</a></li>";
			}
			echo "</ul>";
		?>
        </div><!--list_2-->
            
        <div id="lnk_vid" class="button">
        	<p id="vid_arrow" class="arrow"><img src="images/arrow_3.gif" width="11" height="11" alt="extend video list" /></p>
        	
        	<p id="vid_lnk" class="link"><a href="vid_gallerys.php">Videos</a></p>
       	</div><!--lnk_vid-->
            
        <div id="list_3" class="closed">
		<?php
            		$sql = "SELECT * FROM gallerys WHERE gallery_type = 'v'";
            		$result = mysql_query($sql, $db);
            
			echo "<ul id='vid_links' class='link_list'>";
            		while($row = mysql_fetch_array($result))// Loops untill the end of the array
        	 	{
                		echo	"<li><a href='vid_gallery.php?gallery=".$row['gallery_id']."'>".$row['gallery_title']."</a></li>";
            		}
			echo "</ul>";
		?>
        </div>
            
        <div id="lnk_resume" class="button">
		<p><a href="resume.pdf">Resume</a></p>
       	</div><!--lnk_resume-->
       	
	<div id="lnk_contact" class="button">
		<p><a href="contact.php">Contact Me</a></p>
       	</div><!--lnk_contact-->
    </div><!--nav_main-->
