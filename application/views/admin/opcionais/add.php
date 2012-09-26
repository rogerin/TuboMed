<div class="row">
	<div class="three columns"></div>
	<div class="six columns">
		<div class="well">
			<form class="form-horizontal" method="post" action="<?=base_url();?>index.php/admin/opcionais/add">
				<legend>
					Adicionar Opcionais
				</legend>

				<?php
					if(isset($erro)){
						?>
						<div class="alert">
						  <button type="button" class="close" data-dismiss="alert">×</button>
						  <strong>Erro!</strong> Este item deve existir, caso contrario, procure um administrador.
						</div>
						<?php
					}
					if(isset($sucesso)){
						?>
						<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">×</button>
						  <strong>Sucesso!</strong> Ação realizada com sucesso.
						</div>
						<?php
					}
					
				?>

				<div class="control-group">
					<label class="control-label" for="opc">Op&ccedil;&atilde;o</label>
					<div class="controls">
						<input name="nome" required type="text" id="opc" placeholder="Nome do item opcional">
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