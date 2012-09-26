<nav>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
				<a title="Tubomed - Móveis Hospitalares" class="brand" href="home.php">Tubomed - M&oacute;veis Hospitalares</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="dropdown <?php if($menu_active == 'textos') { echo 'active'; } ?>">
							<a title="Textos" href="#textos" class="dropdown-toggle" data-toggle="dropdown" >Textos <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($menu_sub_active == 'pginicial') { echo 'active'; } ?>">
									<a title="Página Inicial" href="<?=base_url();?>index.php/admin/home/pginicial"> P&aacute;gina Inicial </a>
								</li>
								<li class="dropdown-submenu <?php if($menu_sub_active == 'empresa') { echo 'active'; } ?>">
									<a tabindex="-1" href="#">Empresa</a>
									<ul class="dropdown-menu">
										<li class="<?php if($menu_sub_sub_active == 'historico') { echo 'active'; } ?>">
											<a title="Histórico" href="<?=base_url();?>index.php/admin/home/historico"> Hist&oacute;rico </a>
										</li>
										<li class="<?php if($menu_sub_sub_active == 'processo') { echo 'active'; } ?>">
											<a title="Processo de Produção" href="<?=base_url();?>index.php/admin/home/processo"> Processo de produ&ccedil;&atilde;o </a>
										</li>
									</ul>
								</li>
								<li class="<?php if($menu_sub_active == 'localizacao') { echo 'active'; } ?>">
									<a title="Localização" href="<?=base_url();?>index.php/admin/home/localizacao">Localiza&ccedil;&atilde;o</a>
								</li>
								<li class="<?php if($menu_sub_active == 'contato') { echo 'active'; } ?>">
									<a title="Contato" href="<?=base_url();?>index.php/admin/home/contato">Contato</a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php if($menu_active == 'categorias') { echo 'active'; } ?>" >
							<a title="Categorias" href="#categoria" class="dropdown-toggle" data-toggle="dropdown"> Categorias <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($menu_sub_active == 'cat_add') { echo 'active'; } ?>">
									<a title="Adicionar" href="<?=base_url();?>index.php/admin/home/cat_add">Adicionar</a>
								</li>
								<li class="<?php if($menu_sub_active == 'cat_edit') { echo 'active'; } ?>">
									<a title="Editar/Excluir" href="<?=base_url();?>index.php/admin/home/cat_edit">Editar/Excluir</a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php if($menu_active == 'opcionais') { echo 'active'; } ?>">
							<a title="Categorias" href="#categoria" class="dropdown-toggle" data-toggle="dropdown" >Opcionais <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($menu_sub_active == 'op_add') { echo 'active'; } ?>">
									<a title="Adicionar" href="<?=base_url();?>index.php/admin/opcionais/adicionar">Adicionar</a>
								</li>
								<li class="<?php if($menu_sub_active == 'op_edit') { echo 'active'; } ?>">
									<a title="Editar/Excluir" href="<?=base_url();?>index.php/admin/opcionais/listar">Editar/Excluir</a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php if($menu_active == 'produtos') { echo 'active'; } ?>">
							<a title="Produtos" href="#produtos" class="dropdown-toggle" data-toggle="dropdown" >Produtos <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($menu_sub_active == 'pro_add') { echo 'active'; } ?>">
									<a title="Adicionar" href="<?=base_url();?>index.php/admin/home/pro_add">Adicionar</a>
								</li>
								<li class="<?php if($menu_sub_active == 'pro_edit') { echo 'active'; } ?>">
									<a title="Editar/Excluir" href="<?=base_url();?>index.php/admin/home/pro_edit">Editar/Excluir</a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php if($menu_active == 'representantes') { echo 'active'; } ?>">
							<a title="Representantes" href="#representantes" class="dropdown-toggle" data-toggle="dropdown" >Representantes <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($menu_sub_active == 'rep_add') { echo 'active'; } ?>">
									<a title="Adicionar" href="<?=base_url();?>index.php/admin/home/rep_add">Adicionar</a>
								</li>
								<li class="<?php if($menu_sub_active == 'rep_edit') { echo 'active'; } ?>">
									<a title="Editar/Excluir" href="<?=base_url();?>index.php/admin/home/rep_edit">Editar/Ecluir</a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php if($menu_active == 'clientes') { echo 'active'; } ?>">
							<a title="clientes" href="#clientes" class="dropdown-toggle" data-toggle="dropdown" >Clientes <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($menu_sub_active == 'cli_add') { echo 'active'; } ?>">
									<a title="Adicionar" href="<?=base_url();?>index.php/admin/home/cli_add">Adicionar</a>
								</li>
								<li class="<?php if($menu_sub_active == 'cli_edit') { echo 'active'; } ?>">
									<a title="Editar/Excluir" href="<?=base_url();?>index.php/admin/home/cli_edit">Editar/Excluir</a>
								</li>
							</ul>
						</li>
						<ul class="nav pull-right">
							<li class="divider-vertical"></li>
							<li>
								<a href="<?=base_url();?>index.php/admin/login/logout"><?= $this->session->userdata('login'); ?>, clique para Sair</a>
							</li>
						</ul>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>