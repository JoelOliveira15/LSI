<?php
include ("verifica.php");
include ("conexao.php");
?>

<!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <!-- exibir nome do usuario logado no menu inicial -->
                    <?php
                    echo"<h2>$str</h2>";
					@mysql_select_db($db);
					?>  
                        <h5>Seja Bem Vindo , ao ClinicMed </h5>

                    </div>
                </div>     

