<?php 
session_start();
 
if (isset($_COOKIE["user"])){
	$logado =$_COOKIE["user"];
	//echo "<center><h2>Seja Bem Vindo ".strtoupper($_COOKIE["user"])."<br><br><br><br></h2>";
}elseif(isset($_SESSION["login"])){
	$logado =$_SESSION["login"];
	//echo"<center><h2>Seja Bem Vindo ".strtoupper($_SESSION["login"])."<br><br><br><br></h2>";
}else{ #-Usuário não logado! Redireciona para a página de login
	header('location:login.php'); 
}
$str ="$logado";
$str = ucwords($str);


?>
