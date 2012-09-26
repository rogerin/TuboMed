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
			<div class="three columns"></div>
			<div class="six columns">
				<div class="well">
					<form class="form-horizontal" method="post" action="">
						<legend>
							Adicionar Representantes
						</legend>
						<div class="control-group">
							<label class="control-label" for="nome">Nome</label>
							<div class="controls">
								<input name="nome" required type="text" id="nome" placeholder="Nome do Representante">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="estado">Estado</label>
							<div class="controls">
								<select name="estado" required id="estado">
									<option>Acre</option>
									<option>Ceará</option>
									<option>Bahia</option>
									<option>Amazonas</option>
									<option>Piauí</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">E-mail</label>
							<div class="controls">
								<input name="email" required type="email" id="email" placeholder="email@exemplo.com">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="tel">Tel</label>
							<div class="controls">
								<input name="tel" required type="tel" id="tel" placeholder="(99) 9999-9999">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="fax">Fax</label>
							<div class="controls">
								<input name="fax" required type="tel" id="fax" placeholder="(99) 9999-9999">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="end">End</label>
							<div class="controls">
								<input name="end" required type="text" id="end" placeholder="Av., Rua, etc...">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="bairro">Bairro</label>
							<div class="controls">
								<input name="bairro" required type="text" id="bairro" placeholder="Centro, etc...">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="cidade">Cidade</label>
							<div class="controls">
								<input name="cidade" required type="text" id="cidade" placeholder="Barbalha, etc...">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="cep">CEP</label>
							<div class="controls">
								<input name="cep" required type="text" id="cep" placeholder="00.000-000">
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
			<div class="three columns"></div>
		</div>
		<?php
		include ("footer.php");
		?>
	</body>
</html>
