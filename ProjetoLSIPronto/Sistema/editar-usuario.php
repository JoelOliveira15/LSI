<?php
session_start();
?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClinicMed</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
        <?php
        include ("conexao.php");
        include ("menu_sistema.php");
        ?>
        Descrição formulario 
        <FORM name=clinicmed method="POST"  alig="center" action="edita_usuario.php" class="myinputstyle">



        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    

    <TABLE BORDER=0 align="center"  cellspacing= width="800">

<center>
            <h2>Edição de Formulario Cadastro </h2>


<?php

$con = mysql_connect('localhost', 'root', '', 'clinicmed');
$bd = mysql_select_db('clinicmed',$con);
$cpf=$_SESSION ["cpf"];
$sql    = "SELECT * FROM bdusuarios WHERE cpf = '$cpf'";

$result = mysql_query($sql, $con);

if (!$result) {
    echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
    echo 'Erro MySQL: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    $nome = $row["nome"];
    $email = $row["email"];
    $login = $row["login"];
    $senha = $row["senha"];
    $cpf = $row["cpf"];
    $codigo = $row ["codigo"];
}

mysql_free_result($result);

?>
<input type="number" hidden="true" name="codigo" value="<?php echo $codigo;?>">
     <TR>
       <TD bgcolor="#CCCCCC" class="myinputstyle" size=50 >Nome:</TD>
       <TD bgcolor="#EBEBEB">
       <INPUT type=text name="nome" size="50" maxlength="40" class="campo" value="<?php echo $nome; ?>"></TD>
       </TR>
     
     <TR>
       <TD bgcolor="#CCCCCC" class="myinputstyle" size=20 >E-mail:</TD>
       <TD bgcolor="#EBEBEB" >
         <INPUT type=text name="email" size="50" maxlength="40" class="campo" value="<?php echo $email; ?>"></TD>
       </TR>
     
     <TR>
       
       <TR>
         <TD bgcolor="#CCCCCC" class="myinputstyle" size=20>Login:</TD>
         <TD bgcolor="#EBEBEB" >
           <INPUT type=text name="login" size="20" maxlength="20"required  class="campo" value="<?php echo $login; ?>"></TD>
         </TR>
     
     <TR>
       
       
       <TR>
         <TD bgcolor="#CCCCCC" class="myinputstyle" size=20  >Senha:</TD>
         <TD bgcolor="#EBEBEB" >
           <INPUT type = "password"  name="senha1" size="20" maxlength="8" class="campo" value="<?php echo $senha; ?>"></TD>
         </TR>
     <TR>
       <TD bgcolor="#CCCCCC" class="myinputstyle" size=20  >Confirme sua Senha:</TD>
       <TD bgcolor="#EBEBEB" >
         <INPUT type = "password"  name="senha2" size="20" maxlength="8" class="campo"></TD>
       </TR>
     
     <TR>
       
       <TR>
         <TD bgcolor="#CCCCCC" class="myinputstyle" size=20  >CPF:</TD>
         <TD bgcolor="#EBEBEB" >
           <INPUT type=text name="cpf" size="20"maxlength="20" class="campo" value="<?php echo $cpf; ?>"> </TD>
         </TR>
     
     <TR>
       <TD COLSPAN=2 align="center" class="myinputstyle">
         <br />
         <br />
         <INPUT type="submit" value="Cadastrar" align="center">
         
         <input name="limpar" type="reset" id="limpar" value="Limpar" />

         </FROM>
</form>

</div>

                                 
    </div>

<?php
include ("scripts_sistema.php");
?>





   
</body>
</html>




