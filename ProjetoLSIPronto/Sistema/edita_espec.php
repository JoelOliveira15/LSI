<?php
include ("conecta.php");
//var_dump($_POST);
//mysql_query(

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$especialidade = $_POST["especialidade"];
$crm = $_POST ["crm"];

$sql   = "UPDATE especialista SET nome = '$nome', especialidade = '$especialidade', crm = '$crm'WHERE codigo = '$codigo'";
mysql_query($sql);


//header('Location: editar-usuario.php'); 
echo "<script>location.href='listar_especialista.php';</script>"; 
?>