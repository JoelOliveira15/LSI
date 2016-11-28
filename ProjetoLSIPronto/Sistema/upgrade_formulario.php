<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Usuário</title>

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<!-- criando conexao com o bando -->

  <?php
include "conexao.php";
include "verifica.php";
?>


<!-- estilo da pagina cadastrar usuario -->
    <div id= "menu"></div>
    <div id="coluna">
   
 <div align="center">
   <style type="text/css">

.myinputstyle {
	border: 1px solid #FFFFFF;

	background: url(none) no-repeat #FFFFFF;
	font-family: tahoma, helvetica, sans-serif;
	font-style: normal;
	font-size: 14px;
	color: #454743;
}

.mylabelstyle {
	font-family: tahoma, helvetica, sans-serif;
	font-style: bold;
	font-size: 13px;
	color: #82983e;
	}
 </style>



 
  
 <FORM name=clinicmed method="post"  alig="center" action="cadastrar_usuario.php" class="myinputstyle">
       <fieldset id="fie"> 

      <center>
            <h2>Formulario de Cadastro </h2>
   


 <!-- DESCRIÇÃO DO INTENS DA TABELA -->  
   <TABLE BORDER=0 align="center"  cellspacing= width="800">
     <TR>
       <TD bgcolor="#66cc00" class="myinputstyle" size=50 >Nome:</TD>
       <TD bgcolor="#EBEBEB"><INPUT type=text name="nome" value="<?php echo $nome; ?>" size="50" maxlength="40" required placeholder="Digite Seu Nome" autofocus pattern ="^[a-zA-ZéúíóáÉÚÍÓÁùìòàÙÌÒÀãÃêôâÊÔÂ][a-zA-ZéúíóáÉÚÍÓÁùìòàÙÌÒÀãÃêôâÊÔÂ ]*$" class="myinputstyle"></TD>

       </TR>
     
     <TR>
       <TD bgcolor="#CCCCCC" class="myinputstyle" size=20 >E-mail:</TD>
       <TD bgcolor="#EBEBEB" >
         <INPUT type=text name="email" value="<?php echo $email; ?>" size="50" maxlength="40" required placeholder="Email" autofocus pattern ="^([0-9a-zA-Z]+)([.,_]([0-9a-zA-Z]+))*[@]([0-9a-zA-Z]+)([.]([0-9a-zA-Z]+))*[.]([a-zA-Z]){2}([a-zA-Z])*$"class="myinputstyle"class="myinputstyle"></TD>
       </TR>
     
     <TR>
       
       <TR>
         <TD bgcolor="#CCCCCC" class="myinputstyle" size=20>Login:</TD>
         <TD bgcolor="#EBEBEB" >
           <INPUT type=text name="login" value="<?php echo $login; ?>" size="20" maxlength="20"required placeholder="Login" autofocus pattern ="^[a-zA-ZéúíóáÉÚÍÓÁùìòàÙÌÒÀãÃêôâÊÔÂ]*$"  class="myinputstyle"></TD>
         </TR>
     
     <TR>
       
       
       <TR>
         <TD bgcolor="#CCCCCC" class="myinputstyle" size=20  >Senha:</TD>
         <TD bgcolor="#EBEBEB" >
           <INPUT type = "password"  name="senha1" value="<?php echo $senha; ?>" size="20" maxlength="8"required placeholder="Senha" ></TD>
         </TR>
     <TR>
       <TD bgcolor="#CCCCCC" class="myinputstyle" size=20  >Confirme sua Senha:</TD>
       <TD bgcolor="#EBEBEB" >
         <INPUT type = "password"  name="senha2" size="20" maxlength="8" required placeholder="Confirme sua Senha" ></TD>
       </TR>
     
     <TR>
       
       <TR>
         <TD bgcolor="#CCCCCC" class="myinputstyle" size=20  >CPF:</TD>
         <TD bgcolor="#EBEBEB" >
           <INPUT type=text name="cpf" value="<?php echo $cpf; ?>" size="20"maxlength="20" required placeholder="CPF" autofocus pattern ="^([0-9]{3}[/.]){2}[0-9]{3}-[0-9]{2}$" class="myinputstyle"></TD>
         </TR>
     
     <TR>
       <TD COLSPAN=2 align="center" class="myinputstyle">
         <br />
         <br />
         <INPUT type="submit" value="Cadastrar" align="center">
         
         <input name="limpar" type="reset" id="limpar" value="Limpar" />


<!-- script para ação do botão voltar -->
<script type="text/javascript">
function Nova()
{
location.href=" login.php"
}
</script>

<input type="button" value="Voltar" onClick="Nova()">



       </TR>
     

     </TABLE>
</FORM>

<!-- CODIGO -->
<?php

$nome=isset($_POST["nome"]) ? $_POST["nome"] : " ";
$email=isset($_POST["email"]) ? $_POST["email"] : " ";
$login=isset($_POST["login"]) ? $_POST["login"] : " ";
$senha1=isset($_POST["senha1"]) ? $_POST["senha1"] : " ";
$senha2=isset($_POST["senha2"]) ? $_POST["senha2"] : " ";
$cpf=isset($_POST["cpf"]) ? $_POST["cpf"] : " ";

if($senha1==$senha2){# verifica senha
	if($nome!=" "){
		$con = mysql_connect('localhost', 'root', ''); 
		mysql_select_db("clinicmed", $con);
		$er_login=" ";
		$er_email=" "; 
		$er_cpf=" ";
		$busca = "SELECT * FROM bdusuarios";//query SQL nome,email,login,senha,cpf
		$bs = mysql_query($busca);	// Executa a query (o recordset $rs contém o resultado da query)
		while($array = mysql_fetch_array($bs)){ // Cada linha vai para um array  usando mysql_fetch_array
			if($array[2]==$email){
				$er_email="E-mail: $email</br>";
			}
			if($array[5]==$cpf){
				$er_cpf="CPF: $cpf</br>";
			}
			if($array[3]==$login){
				$er_login="Login: $login</br>";
			}
		}
		if($er_login==" " && $er_cpf==" " && $er_email==" "){# a linha abaixo inseri os dados 
			mysql_query("INSERT INTO bdusuarios (nome,email,login,senha,cpf) VALUES ('$nome','$email','$login','$senha1','$cpf')");
			mysql_close($con);
				echo"<table bgcolor=#00FF7F width=300 border=0 align=center>
					<tr>
						<td><center><font face=Verdana size=5>USUARIO CADASTRADO</td></tr>
					</table>";
					?><script type="text/javascript">
						window.setTimeout("location.href='cadastrar_usuario.php';", 800);
					</script>
					<?php
			
		      }else{
			 echo"<table bgcolor=#CD2626 width=300 border=0 align=center>
					<tr>
						<td><font face=Verdana size=2>$er_login $er_email $er_cpf</td>
						<tr><td><center><font face=Verdana size=5>Ja Cadastrado.</td></tr>
					</tr>
					</table>";
			?><script type="text/javascript">
				window.setTimeout("location.href='javascript:window.history.go(-1)';", 900);
				</script>
			<?php
		}
	}
}else{ # FECHA verifica senha
	echo"<table bgcolor=#CD2626 width=300 border=0 align=center>
					<tr>
						<td><center><font face=Verdana size=5>senhas não correspondem</td>
					</tr>
					</table>";
	?><script type="text/javascript">
			window.setTimeout("location.href='javascript:window.history.go(-1)';", 900);
		</script>
	<?php


	
}
?>
    
    </div>
  </div>
</div>
</div>

</body>
</html>