<?php
if(!isset($_SESSION)){
    session_start();
}?>

<?php 
if (isset($_COOKIE["user"])){
	$logado =$_COOKIE["user"];
	//$tipo = $_COOKIE ["tipo"];
}elseif(isset($_SESSION["login"])){
	$logado =$_SESSION["login"];
}else{
	header('location:login.php'); 
}
$str ="$logado";

//$perfil = "$tipo";
$str = ucwords($str);
?>
