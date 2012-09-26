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
			$('#myModal').modal('toggle');

		</script>
	</head>
	<body>
		<?php
		include ("header.php");
		?>
		<form class="form-horizontal">
			<div class="row">
				<div class="five columns">
					<div class="control-group">
						<label class="control-label" for="inputNome">Nome:</label>
						<div class="controls">
							<input name="nome" type="text" id="inputNome" required placeholder="Nome">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">E-mail:</label>
						<div class="controls">
							<input name="email" type="email" id="inputEmail" required placeholder="e-mail@exemplo.com">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputTel">Tel.:</label>
						<div class="controls">
							<input name="tel" type="tel" id="inputTel" required placeholder="(99) 9999-9999">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputEnd">End.:</label>
						<div class="controls">
							<input name="end" type="text" id="inputEnd" required placeholder="Av., Rua, etc.">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputCPF">CNPJ ou CPF</label>
						<div class="controls">
							<input name="cpf" type="text" id="inputCPF" required placeholder="000.000.000-00 ou 00.000.000/0000-00">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputCEP">CEP</label>
						<div class="controls">
							<input name="cep" type="text" id="inputCEP" required placeholder="00.000-000">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputBairro">Bairro</label>
						<div class="controls">
							<input name="bairro" type="text" id="inputBairro" required placeholder="Bairro">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputCidade">Cidade</label>
						<div class="controls">
							<input name="cidade" type="text" id="inputCidade" required placeholder="Cidade">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputMsg">Mensagem</label>
						<div class="controls">
							<textarea name="msg" id="inputMsg" required placeholder="Liste os produtos que deseja o orçamento"></textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="reset" class="btn">
								Limpar
							</button>
							<button type="submit" class="btn">
								Enviar
							</button>
						</div>
					</div>
				</div>
				<div class="seven columns">
					<img alt="orçamento tubomed" src="images/orcamentos.jpg" />
				</div>
			</div>
		</form>
		<?php
		include ("footer.php");
		?>
	</body>
</html>