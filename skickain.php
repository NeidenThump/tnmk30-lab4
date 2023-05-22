<?php 

$author	=	$_POST['name'];			//	Namnet	på	formulärfälten	bestäms												
$heading	=	$_POST['title'];	//	med	attribut	i	HTML-koden för	formuläret				
$entry	=	$_POST['content'];

//	Append	to	file	(a).	Use	"binary	mode"			
//	(b)	even	for	text	files,	as	recommended
//	by	the	PHP	documentation.	

																																																			
if	($_POST["password"]	!=	"1"){	
	print("<p>Felaktigt	lösenord!	Försök	igen.</p>");
}
else{					
    print("<p>Success!</p>");																																												
    $blogfile=fopen("blog.txt",	"ab");							
    fwrite($blogfile,	"<div class=\"inlagg\"><h3>$heading</h3><h4>skriven av: $author</h4><p>$entry</p></div>\n");
    fclose($blogfile);
    header("Location: bloggsida.php");
    die();																										
}		

?>