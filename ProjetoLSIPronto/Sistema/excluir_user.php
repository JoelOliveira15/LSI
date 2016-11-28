<?php
include ("conecta.php");
//var_dump($_POST);
//mysql_query(

$codigo = $_GET['codigo'];
$sql   = "DELETE FROM bdusuarios WHERE codigo =  '$codigo'";
mysql_query($sql);



header('Location: index_sistema.php'); 
//echo "<script>location.href='listar_usuario.php';</script>"; 
?>