<?php
include "verifica.php";
include "conexao.php";
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
                     <h2>Listar Especialista</h2>                      
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Elementos -->
                   
                                        
             <div class="form-group">
    <?php
  
    $con = mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());
    mysql_select_db("clinicmed",$con) or die(mysql_error());
    $cont1=0;
    $cont2=0;
    $rs = mysql_query("SELECT * FROM especialista");  // Executa a query (o recordset $rs contém o resultado da query)
    while($array = mysql_fetch_array($rs)){ // Cada linha vai para um array  usando mysql_fetch_array
        $cont1++;
        if($logado==$array[1]){
            $cont2++;
        }
    }

    ?>
</div>
<?php
echo'<table width="100%" border="0" align="" cellpadding="0" cellspacing="0">
    <tr>
    <td width="10%" align="center" bgcolor="#202020" class="fonte"><font color="#FF0000">N&ordm;</font></td>
    <td bgcolor="#202020" class="fonte"><font color="#FF0000">Nome</font></td>
    <td bgcolor="#202020" class="fonte"><font color="#FF0000">Especialidade</font></td>
    <td bgcolor = "#202020" class = "fonte"><font color = "#FF0000">CRM</font></td>
    <td bgcolor = "#202020" class = "fonte"><font color = "#FF0000"></font></td>
    <td bgcolor = "#202020" class = "fonte"><font color = "#FF0000"></font></td>
    <td bgcolor = "#202020" class = "fonte"><font color = "#FF0000"></font></td>
    </tr>';
$contt=0;

$rs = mysql_query("SELECT * FROM especialista");  // Executa a query (o recordset $rs contém o resultado da query)
while($array = mysql_fetch_array($rs)){ // Cada linha vai para um array  usando mysql_fetch_array
    
    $id = $array[0];
    $nome = $array[1];
    $especialidade=$array[2];
    $crm=$array[3];
    $d = $contt % 2;
    
    if($logado==$nome){
        $cor = "#EEDD82"; 
    }else{
        $cor = "#D3D3D3"; 
    }
        echo '<tr bgcolor='.$cor.'>';
        echo '<td align="center">'.$id.'</td>';
        echo '<td>'.$nome.'</td>';
        echo '<td>'.$especialidade.'</td>';
        echo '<td>'.$crm.'</td>';
        echo'<td class="linha"width="10%">';

        echo '<td><a href="edita_geral_especi.php?codigo='.$id.'">Editar</a></td>'; 
        echo '<td><a href="excluir_especi.php?codigo='.$id.'">Excluir</a></td>'; 






  if($logado==$nome){

        }else{
        }
}

?>       
                                      


</div>
 
                                 
    </div>
                            
                               
<?php
include ("scripts_sistema.php");
?>
    
   
</body>
</html>
