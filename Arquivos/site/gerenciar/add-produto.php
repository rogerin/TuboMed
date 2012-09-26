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
							Adicionar Produto
						</legend>
						<div class="control-group">
							<label class="control-label" for="nome">Nome</label>
							<div class="controls">
								<input name="nome" required type="text" id="nome" placeholder="Nome da Produto">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ref">Refer&ecirc;ncia</label>
							<div class="controls">
								<input name="ref" required type="text" id="ref" placeholder="Referência do produto">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="cat">Categoria</label>
							<div class="controls">
								<select id="cat" name="cat">
									<option>Categoria 1</option>
									<option>Categoria 2</option>
									<option>Categoria 3</option>
									<option>Categoria 4</option>
									<option>Categoria 5</option>
									<option>Categoria 6</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="desc">Descri&ccedil;&atilde;o</label>
							<div class="controls">
								<textarea name="desc" required id="desc" placeholder="Descrição do produto"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="dimen">Dimens&otilde;es</label>
							<div class="controls">
								<input name="dimen" required type="text" id="dimen" placeholder="alt x larg x comp">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="opc">Opcionais</label>
							<div class="controls">
								<label class="checkbox">
									<input name="check" type="checkbox" value="outras-dimensoes">
									Outras Dimens&otilde;es </label>
								<label class="checkbox">
									<input name="check" type="checkbox" value="outras-cores">
									Cores Vari&aacute;veis </label>
								<label class="checkbox ">
									<input name="check" type="checkbox" value="numero de prateleiras variavel">
									N&uacute;mero de prateleiras vari&aacute;vel </label>
								<label class="checkbox ">
									<input name="check" type="checkbox" value="Em Aço Inox">
									Em a&ccedil;o inox </label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="foto">Fotos</label>
							<div class="controls">
								<input name="foto1" required type="file" id="foto">
								<input name="foto2" required type="file">
								<input name="foto3" required type="file">
								<input name="foto4" required type="file">
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
