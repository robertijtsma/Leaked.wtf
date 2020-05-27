<?php
session_start();
$username = $_GET['username'];
$activationcode = $_GET['activate'];

$filename = "data/accountsverify.php";
$findline = '$'.$username.' = "'.$activationcode.'";$'.$username.'-verified = false;';
$fp = fopen($filename, "r");
$content = fread($fp, filesize($filename));
$lines = explode("\n", $content);
fclose($fp);

$accountsstuff = print_r($lines, true);

if (stripos($accountsstuff, $findline) !== false) {
	echo "Account activationcode = Right";
   if (stripos($findline) !== false) {
	   echo "Account = False";
   }
   else {
	   echo "Account is already verified.";
   }
}

else {
echo $findline;
echo "Wrong verification code.";
}

?>