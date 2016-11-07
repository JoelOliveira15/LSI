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
        ?>
        <!-- Descrição formulario -->

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
                                                    <input type="checkbox" value="" />Falta de Atenção
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Falta de Concentração
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Dificuldades com os Números
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Alguma doença hereditária?</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="rbsim" id="optionsRadios1" value="sim" />Sim
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="rbnao" id="optionsRadios2" value="nao"/>Não
                                                </label>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Possiveís Transtornos</label>
                                            <select class="form-control">
                                                <option>Hiperatividade</option>
                                                 <option>Transtorno 2</option>
                                                 <option>Transtorno 3</option>
                                            </select>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                        <button type="reset" class="btn btn-primary">Limpar Campos</button>
                                        </div>


</div>

                                 
    </div>
                                
                               
<?php
include ("scripts_sistema.php");
?>
    
   
</body>
</html>
