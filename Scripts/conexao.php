<?php

//CRIANDO CONEXAO DO BANDO DE DADOS
//NOME DO BANCO: clinicmed
//TABELAS: bdusuario,
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db = 'clinicmed';
   $conn = mysql_connect($host, $user, $pass) or die (mysql_error());
   @mysql_select_db($db);
	$con = mysql_connect('localhost', 'root', '');
	$bd = mysql_select_db('clinicmed',$con);
	$contb = mysql_connect('localhost', 'root', '', 'clinicmed');

	if(!$con) {
	echo"<table bgcolor=#00FF7F width=300 border=3 align=center>
		<tr>
			<td><center><font face=Verdana size=1> erro ao conectar ao banco de dados!<br>criando banco de dados.</td>
		</tr>
	</table>";
	mysql_connect('localhost', 'root', '') or die(mysql_error());
	?><script type="text/javascript">
			window.setTimeout("location.href='index.php';", 1);
		</script>

	<?php
}
	#cria o banco de dados CLINICMED
	if(!$bd){
	$sql="CREATE DATABASE clinicmed";
	mysql_query($sql,$con);
	echo"<table bgcolor=#00FF7F width=300 border=3 align=center>
		<tr>
			<td><center><font face=Verdana size=1> Criado banco de dados clinicmed</td>
		</tr>
	</table>";
	$con=mysqli_connect('localhost', 'root', '', 'clinicmed');
	// checando conexão

	//cria tabela bd_usuarios																	nome,email,login,senha,cpf
	$bdusuarios="CREATE TABLE bdusuarios(codigo INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(codigo), nome varchar(50), email varchar(50), login varchar(50), senha varchar(50), cpf varchar(14))";     
	#Executa query tabela bdusuarios
	if (mysqli_query($con,$bdusuarios))  {
		#Tabela bdusuarios criada com sucesso
	}
	else{
	  echo "<center>Error ao criar tabela bdusuarios: " . mysqli_error($con);
	}
	
}   
   
?>