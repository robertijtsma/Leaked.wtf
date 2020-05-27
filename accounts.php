<?php
$path = $_SERVER['PHP_SELF'];
$file = basename($path);         // $file is set to "index.php"
$file = basename($path, ".php"); // $file is set to "index"

if ($file == 'accounts') {
	echo 'nice try fuck off';
}

$users["testuser"] = "test123";
