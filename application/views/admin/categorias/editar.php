		<div class="row">
			<div class="three columns"></div>
			<div class="six columns">
				<div class="well">
					<form class="form-horizontal" method="post" action="<?=base_url();?>index.php/admin/categorias/edit">
						<legend>
							Editar Categoria -> <?= $categoria[0]->nome;?>
						</legend>

						<?php
							if(isset($erro)){
								?>
								<div class="alert">
								  <button type="button" class="close" data-dismiss="alert">×</button>
								  <strong>Erro!</strong> Esta categoria já existe.
								</div>
								<?php
							}
							if(isset($sucesso)){
								?>
								<div class="alert alert-success">
								  <button type="button" class="close" data-dismiss="alert">×</button>
								  <strong>Sucesso!</strong> Categoria adicionada com sucesso.
								</div>
								<?php
							}
							
						?>

						<div class="control-group">
							<label class="control-label" for="cat">Categoria</label>
							<div class="controls">
								<input name="nome" required type="text" id="cat" value="<?= $categoria[0]->nome;?>">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<input type="hidden" value="<?= $categoria[0]->id;?>" name="id" />
								<button type="submit" class="btn">
									Editar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="three columns"></div>
		</div>