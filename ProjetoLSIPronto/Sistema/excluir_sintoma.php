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
                     <h2>Excluir Sintoma</h2>                         
                    </div>
        <FORM name=excluir_sintoma.php method="post"  alig="center" action="excluir_sintoma.php" class="myinputstyle">
     <TABLE BORDER=0 align="center"  cellspacing= width="800">
    <TR>
        <TD class="myinputstyle" size=100 >Informe o codigo: </TD>
        <TD bgcolor="#EBEBEB"><INPUT type=text name="codigo" size="20" maxlength="20" required placeholder=" codigo" autofocus pattern ="^[0-9]*$" class="myinputstyle"></TD>
    </TR>

    <TR>
        <TD COLSPAN=2 align="center" class="myinputstyle">
        <INPUT type="submit" value="Verificar"  align="center"></TD>
    </TR>
    
</TABLE>
</FORM>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Elementos -->
                   
                                        
             <div class="form-group">
<?php
$id=isset($_POST["id"]) ? $_POST["id"] : " ";

if($id!=" "){
    $cont=0;
    $con = mysql_connect('127.0.0.1', 'root', '');
    mysql_select_db("clinicmed",$con); // editar para o seu banco de dados
    $busca = "SELECT * FROM sintomas";//query SQL
    $bs = mysql_query($busca);  // Executa a query (o recordset $rs contém o resultado da query)
    while($array = mysql_fetch_array($bs)){ // Cada linha vai para um array  usando mysql_fetch_array
        if($array[0]==$codigo){
            echo"<table ORDER=0 bgcolor=#DCDCDC width=600 border=0 align=center>
            <tr>
                <td width=21% ><font face=Verdana size=3 >NOME: $array[1]</td><tr>
                <td><font face=Verdana size=3 >Descrição: $array[2]</td><tr>
            </tr></br></table>";
            echo "<table ORDER=0 bgcolor=#DCDCDC width=600 border=0 align=center>";
            echo "<tr>";
            echo "<td>";
            echo "<form action='' method='post'>";
            echo "Excluir Codigo: <input type='submit' value='$array[0]  ' name='botao1'></form>";
            echo "</td></tr>";
            echo "</table>";
            $cont=$array[0];
        }
    }
    if($cont==0){
        echo"<table bgcolor=#00FF7F width=250 border=0 align=center>
            <tr>
                <td><center><img src =imagens\atencao.ico><font face=Verdana size=3> Codigo nao cadastrado.</td>
            </tr></table>";
        ?><script type="text/javascript">
        window.setTimeout("location.href='excluir_user.php';", 850);
        </script>
        <?php
    }
}
$botao1=isset($_POST["botao1"]) ? $_POST["botao1"] : " ";
if($botao1!==" "){// deletar
    mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());
    mysql_select_db("clinicmed") or die(mysql_error());
    $strSQL = "DELETE FROM sintomas WHERE codigo=$botao1 ";   // SQL para apagar registro
    mysql_query($strSQL);

    $strSQL = "SELECT * FROM sintomas";   // SQL para apagar registro do codigo
    $bs = mysql_query($strSQL); 
    if (mysql_num_rows($bs)==0) {
        $strSQL = "ALTER TABLE sintomas AUTO_INCREMENT = 1";
        mysql_query($strSQL);
    }
    
    mysql_close();
    ?><script type="text/javascript">
        window.setTimeout("location.href='excluir_sintoma.php';", 1);
        </script>
    <?php
}

?>                
                               
<?php
include ("scripts_sistema.php");
?>
    
   
</body>
</html>
