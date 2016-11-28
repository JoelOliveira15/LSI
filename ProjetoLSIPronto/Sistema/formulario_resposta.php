<?php
include ("conexao.php");
include ("verifica.php");


if(isset($_GET ['f_tfaltaatencao'])){
	$vtfaltatencao = $_GET['f_tfaltaatencao'];
}else{
	$vtfaltatencao = 0;
}

if(isset($_GET ['f_tfaltaconsentracao'])){
	$vtconsentracao = $_GET['f_tfaltaconsentracao'];
}else{
	$vtconsentracao = 0;
}

if(isset($_GET ['f_tdificuldadenumeros'])){
	$vtdificuldade = $_GET['f_tdificuldadenumeros'];
}else{
	$vtdificuldade = 0;
}



$sql = "INSERT INTO questionario VALUES (NULL, '$vtfaltatencao', '$vtconsentracao', '$vtdificuldade')";
$res = mysql_query($sql);
mysql_close();
echo "ok";


?>