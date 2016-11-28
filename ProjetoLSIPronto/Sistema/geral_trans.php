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
        <FORM name=formulario method="POST" action="cadastrar-trans.php" class="myinputstyle">

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Cadastrar Transtornos</h2> 

<?php

$con = mysql_connect('localhost', 'root', '', 'clinicmed');
$bd = mysql_select_db('clinicmed',$con);
$codigo=$_GET ["codigo"];
$sql    = "SELECT * FROM transtorno WHERE codigo = '$codigo'";

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





                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">



                    <div>
    <input type="number" hidden="true" name="codigo" value="<?php echo $codigo;?>">
    <TABLE BORDER=0 align="center"  cellspacing= width="800">


     <TR>
       <TD>Nome:</TD>
       <TD bgcolor="#EBEBEB"><INPUT type=text name="nome" size="50" maxlength="40" value="<?php echo $nome; ?>" class="myinputstyle"></TD>
    </TR>
     
     <TR>
       <TD>Descrição:</TD>
       <TD bgcolor="#EBEBEB"><INPUT type=text name="mensagem" size="50" maxlength="40" value="<?php echo $mensagem; ?>" class="myinputstyle"></TD>
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

</form>

</div>

                                 
    </div>
                                


<?php
include ("scripts_sistema.php");
?>



   
</body>
</html>

