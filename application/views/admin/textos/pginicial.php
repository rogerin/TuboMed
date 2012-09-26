<script type="text/javascript" src="<?= base_url(); ?>public/admin/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>public/admin/js/config_tiny_mce.js"></script>
<div class="row">
	<div class="one columns"></div>
	<div class="nine columns">
		<div class="well">
			<form class="form-horizontal" method="post" action="<?=base_url();?>index.php/admin/home/texto_edit">
				<legend>
					<h4>Texto - Página Inicial<h4>
				</legend>
				<div class="control-group">
					<textarea name="texto" id="textarea" cols="50"rows="20">
						<?= $texto[0]->texto;?>
					</textarea>
				</div>
				<div class="control-group">
					<input type="hidden" name="id" value="<?= $texto[0]->id;?>" />
					<input type="hidden" name="pagina" value="<?=$include;?>" />

					<button type="submit" class="btn">
						<i class="icon-edit icon-black"></i> Editar
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="two columns"></div>
</div>