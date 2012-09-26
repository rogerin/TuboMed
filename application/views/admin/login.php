<?php
	$this->load->view("admin/fixo/header");
?>

		<div class="row">
			<header>
				<div class="four columns">
					<img alt="tubomed Móveis Hospitalares" src="<?=base_url();?>public/admin/images/tubomed-logo.png" />
				</div>
				<div class="eight columns"></div>
			</header>
		</div>
		<div class="row">
			<div class="abaixo">
				<div class="three columns"></div>
				<div class="six columns">
					<div class="well">
						<form class="form-horizontal" method="post" action="<?=base_url();?>index.php/admin/login/logar">
							<legend>
								Login
							</legend>
							<div class="control-group">
								<label class="control-label" for="login">Usu&aacute;rio</label>
								<div class="controls">
									<input name="login" required type="text" id="login" placeholder="Usuário">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="pass">Senha</label>
								<div class="controls">
									<input name="senha" required type="password" id="pass" placeholder="Senha">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<!--<label class="checkbox">
										<input name="lembrar" type="checkbox">
										Lembrar senha? </label>
									-->
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
	$this->load->view("admin/fixo/footer");
?>