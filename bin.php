<?php session_start();?>
<?PHP
error_reporting(0);
		  $filename = "archive/". $_GET['doxname'] .".php";
		  	$validdox = 'non-valid';
			include $filename;
			if ($validdox == 'non-valid') {
				include 'index.php';
			}
else {
	include 'includes/navbar.php';
	include 'reader.php';
	exit();
}


?>