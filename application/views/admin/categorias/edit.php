	<div class="row">
			<div class="three columns"></div>
			<div class="six columns">
				<div class="well">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>Categorias</th>
								<th>A&ccedil;&atilde;o</th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ($categorias as $cat) {
								?>
								<tr>
									<td><a title="<?=$cat->nome;?>" href="<?=base_url();?>index.php/admin/categorias/editar/<?=$cat->id;?>"><?=$cat->nome;?></a></td>
									<td>
										<a title="Editar" href="<?=base_url();?>index.php/admin/categorias/editar/<?=$cat->id;?>" class="btn btn-success">Editar</a>
										<a title="Excluir" href="<?=base_url();?>index.php/admin/categorias/deletar/<?=$cat->id;?>" class="btn btn-danger">Excluir</a>
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