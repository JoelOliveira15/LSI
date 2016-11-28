<?php
$con = mysql_connect('localhost', 'root', '', 'clinicmed');
$bd = mysql_select_db('clinicmed',$con);
return $con;
?>