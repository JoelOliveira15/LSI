<FORM name=aagenda method="post"  alig="center" action="excluir_usuario.php" class="myinputstyle">
  <TABLE BORDER=0 align="center"  cellspacing= width="800">
    <TR>
		<TD bgcolor="#66cc00" class="myinputstyle" size=100 >Informe o codigo:</TD>
		<TD bgcolor="#EBEBEB"><INPUT type=text name="codigo" size="20" maxlength="20" required placeholder=" codigo" autofocus pattern ="^[0-9]*$" class="myinputstyle"></TD>
	</TR>

	<TR>
		<TD COLSPAN=2 align="center" class="myinputstyle">
		<INPUT type="submit" value="Verificar" align="center"></TD>
	</TR>
	
</TABLE>
</FORM>

<?php
$codigo=isset($_POST["codigo"]) ? $_POST["codigo"] : " ";

if($codigo!=" "){
	$cont=0;
	$con = mysql_connect('127.0.0.1', 'root', '');
	mysql_select_db("clinicmed",$con); // editar para o seu banco de dados
	$busca = "SELECT * FROM bdusuarios";//query SQL
	$bs = mysql_query($busca);	// Executa a query (o recordset $rs contém o resultado da query)
	while($array = mysql_fetch_array($bs)){ // Cada linha vai para um array  usando mysql_fetch_array
		if($array[0]==$codigo){
			echo"<table ORDER=0 bgcolor=#DCDCDC width=600 border=0 align=center>
			<tr>
				<td width=21% ><font face=Verdana size=3 >NOME: $array[1]</td><tr>
				<td><font face=Verdana size=3 >Email: $array[2]</td><tr>
				<td width=33% ><font face=Verdana size=3 >Login: $array[3]</td><tr>
				
				<td><font face=Verdana size=3 >CPF: $array[5]</td><tr>
			</tr></br></table>";
			echo "<table ORDER=0 bgcolor=#DCDCDC width=600 border=0 align=center>";
			echo "<tr>";
			echo "<td>";
			echo "<form action='' method='post'>";
			echo "Excluir Codigo: <input type='submit' value='$array[0]  ' name='botao1'></form>";
			echo "</td></tr>";
			echo "</table>";
			$cont=$array[0];
		}
	}
	if($cont==0){
		echo"<table bgcolor=#00FF7F width=250 border=0 align=center>
			<tr>
				<td><center><img src =imagens\atencao.ico><font face=Verdana size=3> Codigo nao cadastrado.</td>
			</tr></table>";
		?><script type="text/javascript">
		window.setTimeout("location.href='excluir_usuario.php';", 850);
		</script>
		<?php
	}
}
$botao1=isset($_POST["botao1"]) ? $_POST["botao1"] : " ";
if($botao1!==" "){// deletar
	mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());
	mysql_select_db("clinicmed") or die(mysql_error());
	$strSQL = "DELETE FROM bdusuarios WHERE codigo=$botao1 ";	// SQL para apagar registro
	mysql_query($strSQL);

	$strSQL = "SELECT * FROM bdusuarios";	// SQL para apagar registro do codigo
	$bs = mysql_query($strSQL);	
	if (mysql_num_rows($bs)==0) {
		$strSQL = "ALTER TABLE bdusuarios AUTO_INCREMENT = 1";
		mysql_query($strSQL);
	}
	
	mysql_close();
	?><script type="text/javascript">
		window.setTimeout("location.href='excluir_usuario.php';", 1);
		</script>
	<?php
}

?>