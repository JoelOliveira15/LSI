<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClinicMed</title>
    <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" type="text/css" href="style.css">
   
</head>
<body>
        <?php
        include ("menu_sistema.php");
        ?>
        <!-- Descrição formulario -->
        <FORM name=formulario method="POST" action="edita_espec.php" class="myinputstyle">

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Cadastrar Especialista</h2>    

<?php

$con = mysql_connect('localhost', 'root', '', 'clinicmed');
$bd = mysql_select_db('clinicmed',$con);
$codigo = $_GET["codigo"];
$sql    = "SELECT * FROM especialista WHERE codigo = '$codigo'";

$result = mysql_query($sql, $con);

if (!$result) {
    echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
    echo 'Erro MySQL: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    $nome = $row["nome"];
    $especialidade = $row["especialidade"];
    $crm = $row["crm"];
    $codigo = $row ["codigo"];
}

mysql_free_result($result);

?>

<input type="number" hidden="true" name="codigo" value="<?php echo $codigo;?>">

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">



                    <div>
    <TABLE BORDER=0 align="center"  cellspacing= width="800">


     <TR>
       <TD>Nome:</TD>
       <TD bgcolor="#EBEBEB"><INPUT type=text name="nome" size="50" maxlength="40"  class="myinputstyle" value="<?php echo $nome; ?>"></TD>
    </TR>
     
     <TR>
       <TD>Especialidade:</TD>
       <TD bgcolor="#EBEBEB"><INPUT type=text name="especialidade" size="50" maxlength="40"  class="myinputstyle" value="<?php echo $especialidade; ?>"></TD>
      </TR>   

      <TR>
       <TD>CRM:</TD>
       <TD bgcolor="#EBEBEB"><INPUT type=text name="crm" size="50" maxlength="40"  class="myinputstyle" value="<?php echo $crm; ?>"></TD>
    </TR>

         <TD COLSPAN=2 align="center" class="myinputstyle">
         <br />
         <br />
         <INPUT type="submit" value="Cadastrar" align="center">&nbsp &nbsp
         <input name="limpar" type="reset" id="limpar" value="Limpar" />
      </TD>
      </TR>   

             </TR>
     

     </TABLE>
</FORM>

</form>

</div>

                                 
    </div>
                                


<?php
include ("scripts_sistema.php");
?>



   
</body>
</html>

