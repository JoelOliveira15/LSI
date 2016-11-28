<?php
include ("conecta.php");
//var_dump($_POST);
//mysql_query(

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$mensagem = $_POST["mensagem"];


$sql   = "UPDATE transtorno SET nome = '$nome', mensagem = '$mensagem' WHERE codigo = '$codigo'";
mysql_query($sql);


//header('Location: editar-usuario.php'); 
echo "<script>location.href='listar_transtornos.php';</script>"; 
?>

