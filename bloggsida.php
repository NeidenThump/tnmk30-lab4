<?php
  include_once 'header.php';
?>

<?php																																																															
		//	Koppla	upp	mot	databasen																																							
		$connection	=	mysqli_connect("mysql.itn.liu.se","blog", "",	"blog");																									
		//	Ställ	frågan																																																			
		$result	=	mysqli_query($connection,	"SELECT	*	FROM	eliel224");				
		//	Skriv	ut	alla	poster	i	svaret																																		
		while	($row	=	mysqli_fetch_array($result))	{																						
				$heading	=	$row['entry_heading'];																															
				print("<h2>$heading</h2>\n");																																			
				$author	= $row['entry_author'];																																	
				$date	=	$row['entry_date'];																																					
				print("<p>$author,	$date</p	>\n");																														
				$text	=	$row['entry_text'];																																					
				print("<p>$text</p>\n");																																								
				print("<hr/>");																																																	
		}	//	end	while																																																				
?>


<div id="blogg">
    <h2>Blogg inlägg</h2>
    <?php   include("blog.txt"); ?>
</div>
   


<?php include_once 'footer.php'; ?>