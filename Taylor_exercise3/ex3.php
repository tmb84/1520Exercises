<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Registration</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.25" />
</head>

<body>
	<?php
	
	//Get form data values
	$name = rtrim($_POST["name"]);
	
	
	$names_file = "names.txt";
	$fh = fopen($names_file, 'a'); //open for appending 
	
	
	//if file does not contain name 
	if(strpos(file_get_contents("names.txt"),$name)===false){
		echo('<font size = "15">');
		echo("<center><b>Congratulations $name, you have been registered!</b></center>");
		fwrite($fh, $name."\n");
		fclose($fh);
	}
	else{
		
		print("<center>$name, you've already been registered</center>");
	}
	?>
	
</body>

</html>
