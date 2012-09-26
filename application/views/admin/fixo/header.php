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
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/admin/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/admin/css/estilo.css" />
		<script type="text/javascript" src="<?=base_url();?>public/admin/js/jquery-1.7.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/admin/css/bootstrap-responsive.css" />
		<script type="text/javascript" src="<?=base_url();?>public/admin/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/admin/css/foundation.css" />
		<link rel="shortcut icon" href="<?=base_url();?>public/admin/favicon.ico" />
		<script type="text/javascript">
			$('.dropdown-toggle').dropdown();
			$('.collapse').collapse();

		</script>
	</head>
	<body>
<?php
	$logged = $this->session->userdata('logado');

	if (!isset($logged) || $logged != true) {

	} else {
		$this->load->view('admin/fixo/menu');
	}
?>