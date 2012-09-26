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
		include ("header.php");
		?>
		<!-- no final de tudo é para puxar do banco o representante referente ao estado clicado  -->
		<div class="row">
			<div class="six columns">
				<img alt="clique no estado que deseja saber qual o representante" src="images/mapa_brasil.gif" width="400" height="407" border="0" usemap="#Map" />
			</div>
			<div class="six columns">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td><a title="Representantes no Acre" href="#acre"> Acre </a></td>
							<td><a title="Representantes no Paraná" href="#parana"> Paran&aacute; </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Acre" href="#alagoas"> Alagoas </a></td>
							<td><a title="Representantes no Paraná" href="#pernambuco"> Pernambuco </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Amapá" href="#amapa"> Amap&aacute; </a></td>
							<td><a title="Representantes no Piauí" href="#piaui"> Piau&iacute; </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Amazonas" href="#amazonas"> Amazonas </a></td>
							<td><a title="Representantes no Rio de Janeiro" href="#riodejaneiro"> Rio de Janeiro </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Bahia" href="#bahia"> Bahia </a></td>
							<td><a title="Representantes no Rio Grande do Norte" href="#riograndedonorte"> Rio Grande do Norte </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Ceará" href="#ceara"> Cear&aacute; </a></td>
							<td><a title="Representantes no Rio Grande do Sul" href="#riograndedosul"> Rio Grande do Sul </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Distrito Federal" href="#distritofederal"> Distrito Federal </a></td>
							<td><a title="Representantes no Rondônia" href="#rodonia"> Rond&ocirc;nia </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Espirito Santo" href="#acre"> Espirito Santo </a></td>
							<td><a title="Representantes no Roraima" href="#roraima"> Roraima </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Goiás" href="#goias"> Goi&aacute;s </a></td>
							<td><a title="Representantes no Santa Catarina" href="#santacatarina"> Santa Catarina </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Maranhão" href="#maranhao"> Maranh&atilde;o </a></td>
							<td><a title="Representantes no São Paulo" href="#saopaulo"> S&atilde;o Paulo </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Mato Grosso" href="#matogrosso"> Mato Grosso </a></td>
							<td><a title="Representantes no Sergipe" href="#sergipe"> Sergipe </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no MAto Grosso do Sul" href="#matogrossodosul"> Mato Grosso do Sul </a></td>
							<td><a title="Representantes no Tocantins" href="#tocantins"> Tocantins </a></td>
						</tr>
						<tr>
							<td><a title="Representantes no Minas Gerais" href="#minasgerais"> Minas Gerais </a></td>
							<td> &nbsp; </td>
						</tr>
						<tr>
							<td><a title="Representantes no Pará" href="#para"> Par&aacute; </a></td>
							<td> &nbsp; </td>
						</tr>
						<tr>
							<td><a title="Representantes no Paraíba" href="#paraiba"> Para&iacute;ba </a></td>
							<td> &nbsp; </td>
						</tr>
					</tbody>
				</table>
			</div>
			<map name="Map" id="Map">
				<area shape="poly" coords="35,169,70,158,37,141,3,131,21,160,33,151" href="?id=1" />
				<area shape="poly" coords="384,164,365,153,391,148" href="?id=2" />
				<area shape="poly" coords="221,68,222,66,198,34,229,14,245,42" href="?id=3" />
				<area shape="poly" coords="154,147,180,81,154,55,116,71,103,37,72,50,63,39,42,42,42,71,39,102,4,127,73,155,108,137,122,146" href="?id=4" />
				<area shape="poly" coords="346,120,346,219,282,196,293,168,333,149,339,154,352,145,366,154,361,168,371,176,353,183,355,218,353,235" href="?id=5" />
				<area shape="poly" coords="120,64,100,15,139,2,154,49" href="?id=23" />
				<area shape="poly" coords="242,156,281,69,266,65,248,78,231,70,222,72,193,34,155,42,181,78,184,84,164,137,175,152" href="?id=14" />
				<area shape="poly" coords="135,197,141,171,124,164,125,151,108,142,84,156,89,177,103,185,116,183" href="?id=22" />
				<area shape="poly" coords="211,120,239,186,241,161,175,157,162,138,155,151,129,151,128,160,144,169,145,180,137,197,140,219,160,223,165,120,179,226,205,230" href="?id=11" />
				<area shape="poly" coords="328,87,314,81,299,88,300,78,285,69,266,112,270,130,280,138,277,149,285,162,290,133,317,126,315,101" href="?id=10" />
				<area shape="poly" coords="244,185,263,116,285,165,282,188" href="?id=27" />
				<area shape="poly" coords="294,166,290,161,292,135,319,128,317,102,331,86,338,123,339,138" href="?id=18" />
				<area shape="poly" coords="335,87,342,131,356,136,371,104,347,86" href="?id=6" />
				<area shape="poly" coords="390,108,375,107,368,123,394,122" href="?id=20" />
				<area shape="poly" coords="398,133,359,137,363,125,395,124" href="?id=15" />
				<area shape="poly" coords="393,146,366,151,352,143,339,152,335,144,344,132,358,137,376,140,397,135" href="?id=17" />
				<area shape="poly" coords="373,175,365,166,368,156,380,165" href="?id=26" />
				<area shape="poly" coords="234,255,215,243,242,188,281,189,285,207,259,210,259,220,271,220,268,242,250,246" href="?id=9" />
				<area shape="poly" coords="276,218,260,219,261,212,277,210" href="?id=7" />
				<area shape="poly" coords="185,284,162,278,167,120,179,230,204,232,234,257,233,263,220,281,207,289,200,302,195,298,190,301" href="?id=12" />
				<area shape="poly" coords="344,225,296,206,285,213,279,211,279,219,273,223,272,230,272,120,269,245,239,258,270,261,281,274,283,289,301,283,326,269,332,243,343,237" href="?id=13" />
				<area shape="poly" coords="336,273,328,269,336,256,335,245,343,120,348,244,347,256" href="?id=8" />
				<area shape="poly" coords="301,291,301,285,317,280,327,272,334,276,329,285,324,290" href="?id=19" />
				<area shape="poly" coords="263,314,252,307,246,291,220,286,236,262,269,263,282,291,297,287,299,293,279,300" href="?id=25" />
				<area shape="poly" coords="259,320,230,325,208,324,200,303,216,288,244,293,250,309,262,315" href="?id=16" />
				<area shape="poly" coords="249,356,206,335,207,325,230,327,257,322,259,337" href="?id=24" />
				<area shape="poly" coords="209,399,212,389,171,361,203,334,244,357,226,384" href="?id=21" />
			</map>
		</div>
		<?php
		include ("footer.php");
		?>
	</body>
</html>