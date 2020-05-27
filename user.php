<?php 
session_start();
    if(isset($_SESSION['login']) && $_SESSION['login'] == 1) {
       
        
    } else if(!isset($_SESSION['logged_in']) || (isset($_SESION['logged_in']) && $_SESSION['logged_in'] == 0)){
        //session is not set
        header('Location: login');
    }
	echo 'Welcome back ' . $_SESSION["username"] . ' !';
	echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>