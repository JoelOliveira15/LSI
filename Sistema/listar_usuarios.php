<?php
include ("verifica.php");
include ("conexao.php");
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
                     <h2>Editar Usuario</h2>                         
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Elementos -->
                   
                                        
             <div class="form-group">
    <?php
    if(isset($_POST['done'])){
    $id = $_POST['id']; 
    $nome = $_POST['evento'];
    $email1 = $_POST['dtevento'];
    $email=str_replace("/","-",$email1);
    $senha = $_POST['hora'];     
    $cpf = $_POST['local'];   
    mysql_connect("127.0.0.1", "root", "");
    $rs = mysql_query("SELECT * FROM bdusuarios");  // Executa a query (o recordset $rs contém o resultado da query)
    $db = "clinicmed";
    //variavel qualquer
    $caca = "UPDATE `clinicmed`.`bdusuarios` SET nome ='$nome', `email`='$email', `senha`='$senha', `cpf`='$cpf' WHERE `id`=$id;";
    mysql_query($caca);
    ?><script type="text/javascript">
        window.setTimeout("location.href='excluir_usuarios.php';", -1000);
        </script>
    <?php
    }
    
    $id = $_GET['id'];
    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db("clinicmed",$con); // editar para o seu banco de dados
    $busca = "SELECT * FROM bdusuarios";//query SQL
    $bs = mysql_query($busca);  // Executa a query (o recordset $rs contém o resultado da query)
    while($array = mysql_fetch_array($bs)){ // Cada linha vai para um array  usando mysql_fetch_array
        if($array[0]==$id){# evento,dtevento ,autor , hora , local, conteudo text
                $id = $array[0];
                $nome = $array[1];
                $email1=$array[2];
                $email=str_replace("-","/",$email1);
                $usuario=$array[3];
                $senha=$array[4];
                $cpf = $array[5];
        }
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Compromissos</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

</head>
<body>


<div id="templatemo_fw">
        <div id="piecemaker">
        
<form name="form1" action="editaevento.php" method="POST" style="padding-top:40px;">
<table border="0" width="50%"  bgcolor="" style="border:0px solid #ccc; margin:0 auto; position:relative;">




<?php
include ("cadastrar_usuario.php");
?>




       
        </div>
    </div>
    

    </body>





</div>
 
                                 
    </div>
                            
                               
<?php
include ("scripts_sistema.php");
?>
    
   
</body>
</html>
