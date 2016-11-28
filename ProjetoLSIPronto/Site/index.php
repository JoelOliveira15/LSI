<!-- metodo para enviar para o email, mas como não subiu o site pro servidor, não tem web email, mas esta a função 

<?php
$mensagem = 0;
@$mensagem = $_REQUEST['mensagem'];
?>
-->

<!DOCTYPE HTML>

<html>
	<head>
		<title>ClinicMed</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
							<h1>ClinicMed</h1>
							<p>WebSite para acompanhamento de pré-diagnosticos de algum transtorno,</p>
							<p>despertando o seu interesse em procurar um profissional.</p>
							
			<!-- puchando menu -->
			<?php
			include ("menu_site.php");
			?>

					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">
						<header>
							<h2>Porque ClinicMed?</h2>
						</header>
						<div class="row">
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h3>Acompanhamento Médico</h3>
										</header>
										<p>A ClinicMed, disponibiliza ótimos proficionais para poder atentender da melhor forma possivel.
										</p>
									</section>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>Praticidade Em Atendimento</h3>
										</header>
										<p>Tem uma váriada opção de atendimento e de acompanhamento com o paciente.</p>
									</section>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>Interação Paciente vs Médico</h3>
										</header>
										<p>Mantem total sigilo entre paciente e especialistas.</p>
									</section>

							</div>
						</div>
						
						<ul class="actions">
							<li><a href="#" class="button icon fa-file">Subir</a></li>
						</ul>
					</section>
				</div>


				<!-- Features o que é clinic med? -->
				<div id="features-wrapper">
					<section id="features" class="container">
						<header>
							<h2>O que é ClinicMed?</h2>
						</header>
						<div class="row">
					<h1>O ClinicMed é um sistema via internet, que permite aos usuários cadastrados e médicos num pré-diagnóstico inical para criaçãs que possuam alguma transtorno. É um método para aproximar usuários aos serviçõs de saúde. A ferramenta de busca do site, o usuário escolhe o especialista ou clinica de sua preferencia. Fortalece os profissionais da saúde no diagnóstico dos transtornos. Seguindo os mesmos principios, facilitanto assim o tratamento e diminuindo custos.
					</h1>
					</div>
					</section>
					</div>
					</div>


				
			<!-- Contatos -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
					
					<!--   CONDIÇÃO PARA SABER SE FOI ENVIADO DE FATO
					<?php
					if ($mensagem == enviado):
					?>
					<h1>Mensagem enviada, agradecemos seu contato.</h1>
					<?php
					else:
					?>
					-->
						<header>
							<h2>Formulário de <strong>Contatos:</strong></h2>
				
						</header>
						<form action = "processoForm.php" method="get">
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<form method="post" action="#">
										<div class="row 50%">
											<div class="6u 12u(mobile)">

												<input id = "nome" name="nome" placeholder="Nome" type="text" />
											</div>
											<div class="6u 12u(mobile)">
												<input id = "email" name="email" placeholder="Email" type="text" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea id = "mensagem" name="mensagem" placeholder="Digita aqui sua mensagem para ser enviada"></textarea>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<input type="submit">
												<input name="limpar" type="reset" id="limpar" value="Limpar" />

 											</div>
										</div>
									</form>
									</section>
									<!-- fim do if 
								<?php endif; ?> -->
								
								</section>
							</div>


							<div class="6u 12u(mobile)">
								<section>
									<p>Suas mensagem enviadas, serão respondidas em no máximo 48 horas.</p>
									<div class="row">
										<div class="6u 12u(mobile)">
										
												<li>
													Campina Grande PB
												</li>
												<li>
													(083) 9 1234 - 5678
												</li>
												<li 
													<a>projetolsi@cesed.com</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright">
						<li>Sistema para Pré-diagnóstico dos Transtornos de Aprendizagem. Desenvolvido por Emmanuell Ramalho e Joel Facisa.</li>
						</ul>
					</div>
				</div>

		</div>
	</body>
</html>


<