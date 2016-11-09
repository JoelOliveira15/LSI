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
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    
    <!-- puxando menu -->
    <?php
    include ("menu_sistema.php");
    ?>
        <!-- descrição  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabela Profissionais</h2>   
                        <h5>Descrição dos profissionais</h5>
                    </div>
                </div>

                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Tabela -->
                    

          
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nome Profissional</th>
                                            <th>Especialidade</th>
                                            <th>Descrição</th>
                                            <th>Local de Atendimento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Dr 1</td>
                                            <td>Especialidade 1</td>
                                            <td>Descrição 1</td>
                                            <td>Atendimento 1</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Dr 2</td>
                                            <td>Especialidade 2</td>
                                            <td>Descrição 2</td>
                                            <td>Atendimento 2</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Dr 3</td>
                                            <td>Especialidade 3</td>
                                            <td>Descrição 3</td>
                                            <td>Atendimento 3</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Dr 4</td>
                                            <td>Especialidade 4</td>
                                            <td>Descrição 4</td>
                                            <td>Atendimento 4</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Dr 5</td>
                                            <td>Especialidade 5</td>
                                            <td>Descrição 5</td>
                                            <td>Atendimento 5</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Dr 6</td>
                                            <td>Especialidade 6</td>
                                            <td>Descrição 6</td>
                                            <td>Atendimento 6</td>
                                        <tr class="gradeA">
                                            <td>Dr 7</td>
                                            <td>Especialidade 7</td>
                                            <td>Descrição 7</td>
                                            <td>Atendimento 7</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Dr 8</td>
                                            <td>Especialidade 8</td>
                                            <td>Descrição 8</td>
                                            <td>Atendimento 8</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Dr 9</td>
                                            <td>Especialidade 9</td>
                                            <td>Descrição 9</td>
                                            <td>Atendimento 9</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Dr 10</td>
                                            <td>Especialidade 10</td>
                                            <td>Descrição 10</td>
                                            <td>Atendimento 10</td>
                                        </tr>
                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
              
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
