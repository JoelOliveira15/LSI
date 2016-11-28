<?php
include ("conecta.php");
//var_dump($_POST);
//mysql_query(
$sql = "UPDATE especislista SET crm = '".$_POST["crm"]."'

where codigo='".$_POST["codigo"]."'";



mysql_query($sql);


//header('Location: editar-usuario.php'); 
echo "<script>location.href='listar_especialista.php';</script>"; 
?>