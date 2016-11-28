<?php
include ("conecta.php");

$codigo = $_GET['codigo'];
$sql   = "DELETE FROM transtorno WHERE codigo =  '$codigo'";
mysql_query($sql);



//header('Location: listar_sintoma.php'); 
echo "<script>location.href='listar_transtornos.php';</script>"; 
?>



