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
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="css/foundation.css" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<script type="text/javascript">
			$('.dropdown-toggle').dropdown();
			$('.collapse').collapse();

		</script>
	</head>
	<body>
		<?php
		include ("menu.php");
		?>
		<div class="row">
			<div class="two columns"></div>
			<div class="eight columns">
				<div class="well">
					<form class="form-horizontal" method="post" action="">
						<legend>
							Adicionar Clientes
						</legend>
						<div class="control-group">
							<label class="control-label" for="rz">Raz&atilde;o Social</label>
							<div class="controls">
								<input name="razao" required type="text" id="rz" placeholder="Nome da empresa">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="cnpj">CNPJ</label>
							<div class="controls">
								<input name="cnpj" required type="number" id="cnpj" placeholder="00.000.000/0000-00">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">E-mail</label>
							<div class="controls">
								<input name="email" required type="email" id="email" placeholder="email@exemplo.com.br">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="end">End</label>
							<div class="controls">
								<input name="end" required type="text" id="end" placeholder="Av., Rua, etc..">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="bairro">Bairro</label>
							<div class="controls">
								<input name="bairro" required type="text" id="bairro" placeholder="Centro, etc..">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="cidade">Cidade</label>
							<div class="controls">
								<input name="cidade" required type="text" id="cidade" placeholder="Barbalha, Crato, etc..">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="cep">CEP</label>
							<div class="controls">
								<input name="cep" required type="text" id="cep" placeholder="00.000-000">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="logo">Logomarca</label>
							<div class="controls">
								<input name="logo" required type="file" id="logo">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="foto">Fotos</label>
							<div class="controls">
								<input name="foto1" required type="file" id="logo">
								<input name="foto2" required type="file" >
								<input name="foto3" required type="file" >
								<input name="foto4" required type="file" >
								<input name="foto5" type="file" >
								<input name="foto6" type="file" >
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">
									Salvar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="two columns"></div>
		</div>
		<?php
		include ("footer.php");
		?>
	</body>
</html>
