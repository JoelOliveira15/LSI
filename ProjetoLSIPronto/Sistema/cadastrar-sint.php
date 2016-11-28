<?php
header('Content-Type: text/html; charset=utf-8');
$nome=isset($_POST["nome"]) ? $_POST["nome"] : " ";
$mensagem=isset($_POST["mensagem"]) ? $_POST["mensagem"] : " ";
$con = mysql_connect('localhost', 'root', ''); 
mysql_select_db("clinicmed", $con);
$sql = "INSERT INTO sintomas (nome, mensagem) VALUES ('$nome', '$mensagem')";
mysql_query($sql);
mysql_close($con);
header('location:listar_sintoma.php'); 
?> 