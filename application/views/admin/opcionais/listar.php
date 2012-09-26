<div class="row">
	<div class="three columns"></div>
	<div class="six columns">
		<div class="well">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>Opcionais</th>
						<th>A&ccedil;&atilde;o</th>
					</tr>
				</thead>
				<?php
				if(isset($sucesso)){
						?>
						<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">×</button>
						  <strong>Sucesso!</strong> Ação realizada com sucesso.
						</div>
						<?php
					}
					?>
				<tbody>
					<?php
					foreach ($opcionais as $op) {
					?>
					<tr>
						<td><a title="<?=$op->nome;?>" href="#Op&ccedil;&atilde;o1"><?=$op->nome;?> </a></td>
						<td>
							<a title="Editar" href="<?=base_url();?>index.php/admin/opcionais/editar/<?=$op->id;?>" class="btn btn-success">Editar</a>
							<a title="Excluir" href="<?=base_url();?>index.php/admin/opcionais/excluir/<?=$op->id;?>" class="btn btn-danger">Excluir</a>
						</td>
					</tr>

					<?php
					}
					?>
					
				</tbody>
			</table>
		</div>
	</div>
	<div class="three columns"></div>
</div>