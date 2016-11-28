<?php
header('Content-Type: text/html; charset=utf-8');
$nome=isset($_POST["nome"]) ? $_POST["nome"] : " ";
$especialidade=isset($_POST["especialidade"]) ? $_POST["especialidade"] : " ";
$crm=isset($_POST["crm"]) ? $_POST["crm"] : " ";

$con = mysql_connect('localhost', 'root', ''); 
mysql_select_db("clinicmed", $con);
$sql = "INSERT INTO especialista (nome, especialidade,crm) VALUES ('$nome', '$especialidade', '$crm')";
mysql_query($sql);
mysql_close($con);
header('location:listar_especialista.php'); 
?> 