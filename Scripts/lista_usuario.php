<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Usuario</title>
<link href="file:///F|/Projeto_Final/site/adcionar.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<?php
include "conexao.php";
?>


<div id = "coluna">

 
 <center><h1>&nbsp;</h1></center>
 
 <style type="text/css">

.myinputstyle {
	border: 1px solid #FFFFFF;
	/** remember to change image path **/
	background: url(none) no-repeat #FFFFFF;
	font-family: tahoma, helvetica, sans-serif;
	font-style: normal;
	font-size: 14px;
	color: #454743;
}

/** You can use this style for your LABEL elements **/
.mylabelstyle {
	font-family: tahoma, helvetica, sans-serif;
	font-style: bold;
	font-size: 13px;
	color: #82983e;
	}
</style>
 <center><br><br>
<?php

$cont=0;
$con = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db("clinicmed",$con); // editar para o seu banco de dados
	
$rs = mysql_query("SELECT * FROM bdusuarios");	// Executa a query (o recordset $rs contém o resultado da query)
while($array = mysql_fetch_array($rs)){ // Cada linha vai para um array  usando mysql_fetch_array
			#ordem 1nome 2email 3login 4senha 5cpf
	echo"<table ORDER=0 bgcolor=#DCDCDC width=350 border=0 align=center>
			<tr>
				<form action='' method='post'><td>Usuario de numero: 
				<input type='submit' value='  $array[0]  ' name='botao1'></form> </td><tr>
				<td> <font face=Verdana size=3> NOME: $array[1]</td><tr>
				<td> <font face=Verdana size=3> Email: $array[2]</td><tr>
				<td> <font face=Verdana size=3> Login: $array[3]</td><tr>
				<td> <font face=Verdana size=3> CPF: $array[5]</td><tr>
			</tr></table><br>";

		
	}
	
	$strSQL = "SELECT * FROM bdusuarios";	// Informa Nenhum Registro Encontrador 
	$bs = mysql_query($strSQL);	
	if (mysql_num_rows($bs)==0) {
		echo"<table bgcolor=#00FF7F width=250 border=0 align=center>
				<tr>
					<td><center><img src =imagens\atencao.ico><font face=Verdana size=2> Nenhum Registro Encontrador</td>
				</tr>
				</table>";

		mysql_query($strSQL);
	}

$botao1=isset($_POST["botao1"]) ? $_POST["botao1"] : " ";
if($botao1!==" "){// deletar
	mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());
	mysql_select_db("agenda_de_compromiso") or die(mysql_error());
	$strSQL = "DELETE FROM bdusuarios WHERE codigo=$botao1 ";	// SQL para apagar registro
	mysql_query($strSQL);
	
	$strSQL = "SELECT * FROM bdusuarios";	// SQL para apaga o registro do codigo
	$bs = mysql_query($strSQL);	
	if (mysql_num_rows($bs)==0) {
		$strSQL = "ALTER TABLE bdusuarios AUTO_INCREMENT = 1";
		mysql_query($strSQL);
	}
	mysql_close();

	?><script type="text/javascript">
		window.setTimeout("location.href='lista_usuario.php';", -10);
		</script>
	<?php
	
}
?>
</div>
</div>
</body>
</html>