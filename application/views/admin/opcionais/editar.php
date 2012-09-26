<div class="row">
	<div class="three columns"></div>
	<div class="six columns">
		<div class="well">
			<form class="form-horizontal" method="post" action="<?=base_url();?>index.php/admin/opcionais/edit">
				<legend>
					Editar Opcionais -> <?=$opcional[0]->nome;?>
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
				?>

				<div class="control-group">
					<label class="control-label" for="opc">Op&ccedil;&atilde;o</label>
					<div class="controls">
						<input name="nome" required type="text" id="opc" value="<?=$opcional[0]->nome;?>">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<input type="hidden" name="id" value="<?=$opcional[0]->id;?>">
						<button type="submit" class="btn">
							<i class="icon-edit icon-black"></i> Editar
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="three columns"></div>
</div>