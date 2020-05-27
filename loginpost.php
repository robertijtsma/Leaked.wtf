<?php 
session_start();
include_once 'accounts.php';

if(isset($_POST['username']) and isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
}


if(isset($_POST["submit"])) {
    if(isset($users[$username])) {
        if($users[$username] == $password) {
            echo "Login Successful! Welcome $username!";
			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;
			$_SESSION["login"] = true;
			
			include_once 'admin/roles.php';
			
			header('Location: index');
			
        } else {
            echo "Incorrect Login";
        }
    } else {
        echo "Username does not exist.";
    }
}
?>
