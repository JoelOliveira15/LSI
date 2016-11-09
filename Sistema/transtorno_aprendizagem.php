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
                     <h2>Transtorno de Aprendizagem</h2>   
                        <h5>Alguns transtornos.</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                   
                                        
                                        <div class="form-group">
                                            <label>Quais Transtornos Presentes?</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Agnosia
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Debilidade Motora
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Dispraxisia
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Disgrafia
                                                </label>
                                            </div>
                                                 <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>TDAH
                                                </label>
                                                </div>

                                                <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Disfonia
                                                </label>
                                                </div>

                                                    <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Disfasia
                                                </label>
                                                </div>

                                                    <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Dislexia
                                                </label>
                                                </div>

                                                    <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Disgrafia
                                                </label>
                                                </div>


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
