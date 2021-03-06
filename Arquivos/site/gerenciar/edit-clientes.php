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
		<meta name="description" content="A tubomed, fabricante de m&oacute;veis hospitalares desde 2001, na cidade de Barbalha – CE, a cada dia busca aprimorar seus Clientes visando atender seus clientes em todo Brasil." />
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
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>Cliente</th>
								<th>Cidade</th>
								<th>A&ccedil;&atilde;o</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a title="Cliente 1" href="#Cliente1"> Cliente 1 </a></td>
								<td>Cidade</td>
								<td>
									<a title="Editar" href="#editar" class="btn btn-success">Editar</a>
									<a title="Excluir" href="#excluir" class="btn btn-danger">Excluir</a>
								</td>
							</tr>
							<tr>
								<td><a title="Cliente 2" href="#Cliente2">Cliente 2 </a></td>
								<td>Cidade</td>
								<td>
									<a title="Editar" href="#editar" class="btn btn-success">Editar</a>
									<a title="Excluir" href="#excluir" class="btn btn-danger">Excluir</a>
								</td>
							</tr>
							<tr>
								<td><a title="Cliente 3" href="#Cliente3">Cliente 3</a></td>
								<td>Cidade</td>
								<td>
									<a title="Editar" href="#editar" class="btn btn-success">Editar</a>
									<a title="Excluir" href="#excluir" class="btn btn-danger">Excluir</a>
								</td>
							</tr>
							<tr>
								<td><a title="Cliente 4" href="#Cliente4">Cliente 4</a></td>
								<td>Cidade</td>
								<td>
									<a title="Editar" href="#editar" class="btn btn-success">Editar</a>
									<a title="Excluir" href="#excluir" class="btn btn-danger">Excluir</a>
								</td>
							</tr>
							<tr>
								<td><a title="Cliente 5" href="#Cliente5">Cliente 5</a></td>
								<td>Cidade</td>
								<td>
									<a title="Editar" href="#editar" class="btn btn-success">Editar</a>
									<a title="Excluir" href="#excluir" class="btn btn-danger">Excluir</a>
								</td>
							</tr>
							<tr>
								<td><a title="Cliente 6" href="#Cliente6">Cliente 6</a></td>
								<td>Cidade</td>
								<td>
									<a title="Editar" href="#editar" class="btn btn-success">Editar</a>
									<a title="Excluir" href="#excluir" class="btn btn-danger">Excluir</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="three columns"></div>
		</div>
		<?php
		include ("footer.php");
		?>
	</body>
</html>
