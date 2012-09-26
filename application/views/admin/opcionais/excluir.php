<div class="row">
	<div class="three columns"></div>
	<div class="six columns">
		<div class="well">
			<p>Realmente deseja deletar: <?= $opcional[0]->nome;?> </p>
			<center>
				<p>
					<a class="btn btn-danger" href="<?=base_url();?>index.php/admin/opcionais/listar">Não</a> 
					<a class="btn btn-success" href="<?=base_url();?>index.php/admin/opcionais/del/<?= $opcional[0]->id;?>">Sim</a></p>
				</center>
		</div>
	</div>
	<div class="three columns"></div>
</div>