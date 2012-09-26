		<div class="row">
			<div class="two columns"></div>
			<div class="eight columns">
				<div class="well">
					<form class="form-horizontal" method="post" action="">
						<legend>
							Adicionar Produto
						</legend>
						<div class="control-group">
							<label class="control-label" for="nome">Nome</label>
							<div class="controls">
								<input name="nome" required type="text" id="nome" placeholder="Nome da Produto">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ref">Refer&ecirc;ncia</label>
							<div class="controls">
								<input name="ref" required type="text" id="ref" placeholder="Referência do produto">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="cat">Categoria</label>
							<div class="controls">
								<select id="cat" name="cat">
									<option>Categoria 1</option>
									<option>Categoria 2</option>
									<option>Categoria 3</option>
									<option>Categoria 4</option>
									<option>Categoria 5</option>
									<option>Categoria 6</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="desc">Descri&ccedil;&atilde;o</label>
							<div class="controls">
								<textarea name="desc" required id="desc" placeholder="Descrição do produto"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="dimen">Dimens&otilde;es</label>
							<div class="controls">
								<input name="dimen" required type="text" id="dimen" placeholder="alt x larg x comp"> 
							</div>

						</div>

						<div class="control-group">
							<label class="control-label" for="opc">Opcionais</label>
							<div class="controls">
								<label class="checkbox">
									<input name="check" type="checkbox" value="outras-dimensoes">
									Outras Dimens&otilde;es </label>
								<label class="checkbox">
									<input name="check" type="checkbox" value="outras-cores">
									Cores Vari&aacute;veis </label>
								<label class="checkbox ">
									<input name="check" type="checkbox" value="numero de prateleiras variavel">
									N&uacute;mero de prateleiras vari&aacute;vel </label>
								<label class="checkbox ">
									<input name="check" type="checkbox" value="Em Aço Inox">
									Em a&ccedil;o inox </label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="foto">Fotos</label>
							<div class="controls">
								<input name="foto1" required type="file" id="foto">
								<input name="foto2" required type="file">
								<input name="foto3" required type="file">
								<input name="foto4" required type="file">
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
			<div class="two columns"></div>
		</div>