<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Tubomed - M&oacute;veis Hospitalares</title>
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="description" content="A tubomed, fabricante de m&oacute;veis hospitalares desde 2001, na cidade de Barbalha – CE, a cada dia busca aprimorar seus produtos visando atender seus clientes em todo Brasil." />
		<meta name="keywords" content="moveis, hospitalar, tubo med ,tubomed ,hospital ,medico, moveis hospitalares, móveis, móveis hospitalares">
		<meta name="author" content="Estevão Nunes" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="css/foundation.css" />
		<link rel="shortcut icon" href="/favicon.ico" />
	</head>
	<body>
		<div class="row">
			<header>
				<div class="four columns">
					<img alt="tubomed Móveis Hospitalares" src="images/tubomed-logo.png" />
				</div>
				<div class="eight columns"></div>
			</header>
		</div>
		<div class="row">
			<div class="abaixo">
				<div class="three columns"></div>
				<div class="six columns">
					<div class="well">
						<form class="form-horizontal" method="post" action="home.php">
							<legend>
								Login
							</legend>
							<div class="control-group">
								<label class="control-label" for="login">Usu&aacute;rio</label>
								<div class="controls">
									<input name="user" required type="text" id="login" placeholder="Usuário">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="pass">Senha</label>
								<div class="controls">
									<input name="pass" required type="password" id="pass" placeholder="Senha">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<label class="checkbox">
										<input name="lembrar" type="checkbox">
										Lembrar senha? </label>
									<button type="submit" class="btn">
										Entrar
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="three columns"></div>
			</div>
		</div>
		<?php
		include ("footer.php");
		?>
	</body>
</html>