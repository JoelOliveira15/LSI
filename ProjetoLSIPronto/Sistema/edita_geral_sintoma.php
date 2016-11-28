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
        <FORM name=clinicmed method="POST"  alig="center" action="edita_transt_geral.php" class="myinputstyle">



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
$codigo=$_GET ["codigo"];
$sql    = "SELECT * FROM sintomas WHERE codigo = '$codigo'";

$result = mysql_query($sql, $con);

if (!$result) {
    echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
    echo 'Erro MySQL: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    $nome = $row["nome"];
    $mensagem = $row["mensagem"];
    $codigo = $row ["codigo"];
}

mysql_free_result($result);

?>

<input type="number" hidden="true" name="codigo" value="<?php echo $codigo;?>">
     <TR>
       <TD bgcolor="#CCCCCC" size=50 >Nome:</TD>
       <TD bgcolor="#EBEBEB">
       <INPUT type=text name="nome" size="50" maxlength="40" class="campo" value="<?php echo $nome; ?>"></TD>
       </TR>
     
     <TR>
       <TD bgcolor="#CCCCCC" size=20 >Mensagem:</TD>
       <TD bgcolor="#EBEBEB" >
         <INPUT type=text name="mensagem" size="50" maxlength="40" class="campo" value="<?php echo $mensagem; ?>"></TD>
       </TR>
     
   
   <TR>
       <TD COLSPAN=2 align="center" class="myinputstyle">
         <br />
         <br />
         <INPUT type="submit" value="Editar" align="center">

         </FROM>
</form>

</div>

                                 
    </div>

<?php
include ("scripts_sistema.php");
?>





   
</body>
</html>




