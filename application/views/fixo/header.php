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
		<meta name="author" content="SA Tecnologia System Autonomy" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/css/estilo.css" />
		<script type="text/javascript" src="<?=base_url();?>public/js/jquery-1.7.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/css/bootstrap-responsive.css" />
		<script type="text/javascript" src="<?=base_url();?>public/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/css/foundation.css" />
		<link rel="shortcut icon" href="<?=base_url();?>public/favicon.ico" />
		<script type="text/javascript">
			$('.dropdown-toggle').dropdown();
			$('.collapse').collapse();
			$('#myModal').modal('toggle');

		</script>
	</head>
	<body>
<header>
	<div class="row">
		<div class="four columns">
			<a title="Tubomed - Móveis Hospitalares" href="<?=base_url();?>"><img alt="Tubomed - Móveis Hospitalares" src="<?=base_url();?>public/images/tubomed-logo.png" /></a>
		</div>
		<div class="five columns">
			<form class="form-search">
				<div class="input-append">
					<input placeholder="Pesquise um produto" required type="text" class="span4 search-query">
					<button type="submit" class="btn">
						<i class="icon-search"></i>
					</button>
				</div>
			</form>
		</div>
		<div class="three columns"></div>
	</div>
</header>
<nav>
	<div class="row">
		<div id="navbar-example" class="navbar abaixo">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<div class="nav-collapse">
						<ul class="nav" role="navigation">
							<li <?php if($menu_active == 'home') {echo 'class="active"'; } ?>>
								<a title="home - Tubomed - Móveis Hospitalares" href="index.php" role="button" >home</a>
							</li>
							<li <?php if($menu_active == 'empresa') {echo 'class="active"'; } ?>>
								<a title="emrpesa" href="<?=base_url();?>index.php/home/empresa" role="button" >empresa</a>
							</li>
							<li class="dropdown" >
								<a title="produtos" id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">produtos<b class="caret"></b></a>
								<div id="menu" class="dropdown-menu">
									<!-- Não sei bem, mas acho que essas divs abaixo deveriam ser carregadas do banco, pq puxa as categorias cadastradas, ai coloca os produtos com essa categoria. só a primeira que vai ter o link para todos os produtos  -->
									<div class="span3">
										<ul class="nav-list">
											<li>
												<a title="Todos os Produtos" href="<?=base_url();?>index.php/home/produtos">Todos os Produtos</a>
											</li>
											<li class="nav-header">
												Mesas
											</li>
											<li>
												<a title="Prod 01" href="#Prod1">Prod1</a>
											</li>
											<li>
												<a title="Prod 02" href="#Prod2">Prod2</a>
											</li>
											<li>
												<a title="Prod 03" href="#Prod3">Prod3</a>
											</li>
											<li>
												<a title="Prod 04" href="#Prod4">Prod4</a>
											</li>
											<li>
												<a title="Prod 05" href="#Prod5">Prod5</a>
											</li>
										</ul>
									</div>
									<div class="span3">
										<ul class="nav-list">
											<li>
												<!--Essa <li> tá  só pra todas ficarem na mesma altura -->
											</li>
											<li class="nav-header">
												Arm&aacute;rios
											</li>
											<li>
												<a title="Prod 01" href="#Prod1">Prod1</a>
											</li>
											<li>
												<a title="Prod 02" href="#Prod2">Prod2</a>
											</li>
											<li>
												<a title="Prod 03" href="#Prod3">Prod3</a>
											</li>
											<li>
												<a title="Prod 04" href="#Prod4">Prod4</a>
											</li>
											<li>
												<a title="Prod 05" href="#Prod5">Prod5</a>
											</li>
										</ul>
									</div>
									<div class="span3">
										<ul class="nav-list">
											<li>
												<!--Essa <li> tá  só pra todas ficarem na mesma altura -->
											</li>
											<li class="nav-header">
												Outra categoria
											</li>
											<li>
												<a title="Prod 01" href="#Prod1">Prod1</a>
											</li>
											<li>
												<a title="Prod 02" href="#Prod2">Prod2</a>
											</li>
											<li>
												<a title="Prod 03" href="#Prod3">Prod3</a>
											</li>
											<li>
												<a title="Prod 04" href="#Prod4">Prod4</a>
											</li>
											<li>
												<a title="Prod 05" href="#Prod5">Prod5</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li >
								<a title="orçamento" href="<?=base_url();?>index.php/home/orcamento" role="button" >or&ccedil;amento</a>
							</li>
							<li >
								<a title="clientes" href="<?=base_url();?>index.php/home/clientes" role="button" >clientes</a>
							</li>
							<li >
								<a title="localização" href="<?=base_url();?>index.php/home/localizacao" role="button" >localiza&ccedil;&atilde;o</a>
							</li>
							<li >
								<a title="representantes" href="<?=base_url();?>index.php/home/representantes" role="button" >representantes</a>
							</li>
							<li >
								<a title="contato" href="<?=base_url();?>index.php/home/contato" role="button" >contato</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>