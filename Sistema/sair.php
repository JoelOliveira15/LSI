<?php 
//Finaliza o cookie
setcookie("user", "", time()-3600);

// Inicia sessões, para assim poder destruí-las 
session_start(); 
session_destroy(); 
header("Location: login.php"); 


?>

