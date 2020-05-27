


<?php
if(isset($_POST['submit'])){
$mail = 'robertijtsma@gmail.com';
$to = $mail;
$subject = "Activation for Leaked.WTF";
$username = 'Testuser';
$activate = 'r352352';


$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Welcome to LeakedWTF<br>Before you can use your account you first have to verify your mail by clicking this link:<br>https://leaked.wtf/verify?username=".$username."&activate=".$activate."</p><table>
<tr>
<th>Username</th>
<th>Code</th>
</tr>
<tr>
<td><?php echo $username; ?></td>
<td><?php echo $activationcode; ?></td>
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
}
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 