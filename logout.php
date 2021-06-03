<?php 

session_unset();
session_destroy();

setcookie("login","", time() -3600);


header('Location: login-page.php');

?>