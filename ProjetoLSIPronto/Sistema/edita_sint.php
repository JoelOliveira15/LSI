<?php
include ("conecta.php");
$sql = "UPDATE especialista SET 
codigo = '".$_POST["codigo"]."'



where codigo='".$_POST["codigo"]."'";



mysql_query($sql);


echo "<script>location.href='listar_sintomas.php';</script>"; 
?>