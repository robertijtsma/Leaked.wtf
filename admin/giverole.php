
<form method="post" action="giverole.php">
  Username:<br>
  <input type="text" name="username" value="">
  <br>
  Add rank:<br>
  <input type="text" name="role" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 
<?php 

session_start();
			if ($_SESSION["admin"] == 1) {
			echo '
			';}
			else {
				echo 'fuck off';
			}
			
if(isset($_POST['username']) and isset($_POST['role'])){
  $username = $_POST['username'];
  $role = $_POST['role'];


	
$filename = "roles.php";
$fp = fopen($filename, "r");
$content = fread($fp, filesize($filename));
$lines = explode("\n", $content);
fclose($fp);

$accountsstuff = print_r($lines, true);
	
	 $data = '
			if ($_SESSION["username"] == "'.$username.'") {
			$_SESSION["'.$role.'"] = true;
			}
	 '.PHP_EOL;
	$fp = fopen('roles.php', 'a');
	fwrite($fp, $data);
	echo 'Account '.$username.' is created.';
	}
        
?>