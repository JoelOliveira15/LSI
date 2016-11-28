<?php
// metodos caso tiversse servidor de email para enviar
//$destino = "contatoclinicmed@clinicmed.com";
//$assunto = "Contato ClinicMed"

$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$mensagem=$_REQUEST['mensagem'];

echo $nome;
echo $email; 
echo $mensagem;


//		$global = "<strong> Mensagem de Contato ClinicMed</strong><br><br>";
//		$global .= "<strong> Nome: </strong> $nome";
//		$global .= "<br><strong> Email: </strong> $email";
//		$global .= "<br><strong> Mensagem: </strong> $mensagem";

//		$header = "From: $email Reply-to: $email";
//		$header .= "Content-Type: text/html; charset = utf-8";

		//Função php

//mail($destino, $assunto, $global, $header);
//header("location:index.php?mensagem=enviado");




?>