<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Register!</h1>

<form action="register.php" method="post">
    <p>Username: <input type="text" name="username"></p>
	<p>E-Mail: <input type="text" name="email"></p>
    <p>Password: <input type="password" name="password"></p>
    <p><input type="submit" name="submit" value="Login"></p>
</form>

</body>
</html>
<?php

if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
}

if(isset($_POST["submit"])) {
	
	
$to = $_POST['email'];
$subject = "LeakedWTF Verification";
$activate = "2363262362";
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Welcome to LeakedWTF<br>Before you can use your account you first have to verify your mail by clicking this link:<br>https://leaked.wtf/verify?username=".$username."&activate=".$activate."</p>
<table>
<tr>
<th>Username</th>
<th>E-Mail</th>
<th>Activationcode</th>
</tr>
<tr>
<td>".$username."</td>
<td>".$email."</td>
<td>".$activate."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@leaked.wtf>' . "\r\n";

mail($to,$subject,$message,$headers);
	
	
$filename = "accounts.php";
$fp = fopen($filename, "r");
$content = fread($fp, filesize($filename));
$lines = explode("\n", $content);
fclose($fp);

$accountsstuff = print_r($lines, true);
if (stripos($accountsstuff, '$users["'.$username.'"] = ') !== false) {
    echo 'User already exist.';
}
else {
	
	
	 $data = '$users["'.$username.'"] = "'.$password.'";'.PHP_EOL;
	$fp = fopen('accounts.php', 'a');
	fwrite($fp, $data);
	echo 'Account '.$username.' is created.';
	
	
	 $dataverified = '$'.$username.' = "'.$activate.'";$'.$username.'-verified = false;'.PHP_EOL;
	$fop = fopen('data/accountsverified.php', 'a');
	fwrite($fop, $dataverified);
	
	
        }
	
	
	


       
}

?>