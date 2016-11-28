<?php
include ("conecta.php");
//var_dump($_POST);
//mysql_query(

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST ["login"];
$senha = $_POST["senha1"];
$cpf = $_POST ["cpf"];
$tipo = $_POST ["tipo"];


$sql   = "UPDATE bdusuarios SET nome = '$nome', email = '$email', login = '$login', senha = '$senha', cpf = '$cpf', tipo = '$tipo' WHERE codigo = '$codigo'";
mysql_query($sql);


//header('Location: editar-usuario.php'); 
echo "<script>location.href='listar_usuario.php';</script>"; 
?>