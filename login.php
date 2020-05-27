<?php 
session_start();

    if(isset($_SESSION['login']) && $_SESSION['login'] == 1) {
        //session is set
	header('Location: user');
    } else if(!isset($_SESSION['logged_in']) || (isset($_SESION['logged_in']) && $_SESSION['logged_in'] == 0)){
        //session is not set
        
    }

?>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login!</h1>

<form action="loginpost.php" method="post">
    <p>Username: <input type="text" name="username"></p>
    <p>Password: <input type="password" name="password"></p>
    <p><input type="submit" name="submit" value="Login"></p>
</form>
<form method="get" action="register">
    <button type="submit">Register</button>
</form>
</body>
</html>