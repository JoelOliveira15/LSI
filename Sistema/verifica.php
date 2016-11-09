<?php 
session_start();
 
if (isset($_COOKIE["user"])){
	$logado =$_COOKIE["user"];
}elseif(isset($_SESSION["login"])){
	$logado =$_SESSION["login"];
}else{ #-Usuário não logado! Redireciona para a página de login
	header('location:login.php'); 
}
$str ="$logado";
$str = ucwords($str);


?>
