<?php
$host = "127.0.0.1";//caso esteja usando o xampp ou wamp
$user = "root";// padrão para xampp ou wamp é root
$pass = "";// padrão para xampp ou wamp é ""
$db = "clinicmed";// é o nome do banco, no phpmyadmin
$conn = mysql_connect($host, $user, $pass) or die (mysql_error());
@mysql_select_db($db);

$con = mysql_connect('127.0.0.1', 'root', '');
$bd = mysql_select_db('clinicmed',$con);
$contb = mysql_connect('127.0.0.1', 'root', '', 'clinicmed');


if(!$con) {
	echo"<table bgcolor=#00FF7F width=300 border=3 align=center>
		<tr>
			<td><center><font face=Verdana size=1> erro ao conectar ao banco de dados!<br>criando banco de dados.</td>
		</tr>
	</table>";
	mysql_connect('127.0.0.1', 'root', '') or die(mysql_error());
	?><script type="text/javascript">
			window.setTimeout("location.href='login.php';", 1);
		</script>
	<?php
}
	#cria o banco de dados clinicmed
if(!$bd){
	$sql="CREATE DATABASE clinicmed";
	mysql_query($sql,$con);
	echo"<table bgcolor=#00FF7F width=300 border=3 align=center>
		<tr>
			<td><center><font face=Verdana size=1> Criado banco de dados clinicmed</td>
		</tr>
	</table>";
	$con=mysqli_connect('127.0.0.1', 'root', '', 'clinicmed');
		
	
	# cria tabela bd_usuarios																	nome,email,login,senha,cpf
	$bdusuarios="CREATE TABLE bdusuarios(codigo INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(codigo), nome CHAR(40), email CHAR(40), login CHAR(20), senha INT(20), cpf CHAR(14))";     
	#Executa query tabela bdusuarios
	if (mysqli_query($con,$bdusuarios))  {
		#Tabela bdusuarios criada com sucesso
	}
	else{
	  echo "<center>Error ao criar tabela bdusuarios: " . mysqli_error($con);
	}
	
}

?>