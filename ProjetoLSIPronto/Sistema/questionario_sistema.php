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
</head>
<body>
        <?php
        include ("menu_sistema.php");

        include ("conexao.php");
        ?>
        <!-- Descrição formulario -->
        <FORM name=formulario method="post" action="questionario_sistema.php" class="myinputstyle">
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Questionario</h2>   
                        <h5>Alguns questionario para amadurecimento do sistema.</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Elementos -->
                   
                                        <div class="form-group">
                                            <label>Quais Sintomas Presentes?</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="f_tfaltaatencao" value="op1" />Falta de Atenção
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="f_tfaltaconsentracao" value="op2"/>Falta de Concentração
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="f_tdificuldadenumeros" value="op3"/>Dificuldades com os Números
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Alguma doença hereditária?</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="perg2" value="op1" />Sim
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="perg2" value="op2"/>Não
                                                </label>
                                            </div>
                                            </div>
                                        </div>
               
                                       
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        <button type="reset" class="btn btn-defalt">Limpar Campos</button>
                                        </div>


</div>

                                 
    </div>


    <?php




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



                                
                               
<?php
include ("scripts_sistema.php");
?>
    
   
</body>
</html>
