<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	 function __construct() {
		parent::__construct();
		$this->load->model('admin/user_model', 'user');
		$this->user->logado();
    }

    // INDEX
	public function index()
	{
		$data = array(
			'menu_active' 		 => '',
			'menu_sub_active' 	 => '',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/inicio'
		);
		
		$this->load->view('admin/home', $data);
	}
	// FIM INDEX

	// PAGINA INICIAL
	public function pginicial()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'textos',
			'menu_sub_active' 	 => 'pginicial',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/textos/pginicial',
			'texto'				 => $texto
		);

		$this->load->view('admin/home', $data);
	}
	// FIM PAGINA INICIAL

	// EMPRESA > HISTORICO
	public function historico()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_historico();
		$data = array(
			'menu_active' 		 => 'textos',
			'menu_sub_active' 	 => 'empresa',
			'menu_sub_sub_active'=> 'historico',
			'include'			 => 'admin/textos/historico',
			'texto'				 => $texto
		);

		$this->load->view('admin/home', $data);
	}
	// FIM EMPRESA > HISTORICO

	// EMPRESA > PROCESSO DE PRODUCAO
	public function processo()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_processo();
		$data = array(
			'menu_active' 		 => 'textos',
			'menu_sub_active' 	 => 'empresa',
			'menu_sub_sub_active'=> 'processo',
			'include'			 => 'admin/textos/processo',
			'texto'				 => $texto
		);

		$this->load->view('admin/home', $data);
	}
	// FIM EMPRESA > PROCESSO DE PRODUCAO
	
	// LOCALIZAÇAO
	public function localizacao()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_localizacao();
		$data = array(
			'menu_active' 		 => 'textos',
			'menu_sub_active' 	 => 'localizacao',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/textos/localizacao',
			'texto'				 => $texto
		);

		$this->load->view('admin/home', $data);
	}
	// FIM LOCALIZAÇAO

	// CONTATO
	public function contato()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_contato();
		$data = array(
			'menu_active' 		 => 'textos',
			'menu_sub_active' 	 => 'contato',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/textos/contato',
			'texto'				 => $texto
		);

		$this->load->view('admin/home', $data);
	}
	// FIM CONTATO



	// CATEGORIAS ADICIONAR
	public function cat_add()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'categorias',
			'menu_sub_active' 	 => 'cat_add',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/categorias/add'
		);

		$this->load->view('admin/home', $data);
	}
	public function cat_edit()
	{
		$this->load->model('admin/categoria_model', 'categoria');
		$categorias = $this->categoria->get_all();


		$data = array(
			'menu_active' 		 => 'categorias',
			'menu_sub_active' 	 => 'cat_edit',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/categorias/edit',
			'categorias'		 => $categorias
		);

		$this->load->view('admin/home', $data);
	}

	public function op_add()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'opcionais',
			'menu_sub_active' 	 => 'op_add',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/opcionais/add'
		);

		$this->load->view('admin/home', $data);
	}

	public function op_edit()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'opcionais',
			'menu_sub_active' 	 => 'op_edit',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/opcionais/edit'
		);

		$this->load->view('admin/home', $data);
	}

	public function pro_add()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'produtos',
			'menu_sub_active' 	 => 'pro_add',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/produtos/add'
		);

		$this->load->view('admin/home', $data);
	}

	public function pro_edit()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'produtos',
			'menu_sub_active' 	 => 'pro_edit',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/produtos/edit'
		);

		$this->load->view('admin/home', $data);
	}

	public function rep_add()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'representantes',
			'menu_sub_active' 	 => 'rep_add',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/representantes/add'
		);

		$this->load->view('admin/home', $data);
	}

	public function rep_edit()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'representantes',
			'menu_sub_active' 	 => 'rep_edit',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/representantes/edit'
		);

		$this->load->view('admin/home', $data);
	}

	public function cli_add()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'clientes',
			'menu_sub_active' 	 => 'cli_add',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/clientes/add'
		);

		$this->load->view('admin/home', $data);
	}

	public function cli_edit()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'menu_active' 		 => 'clientes',
			'menu_sub_active' 	 => 'cli_edit',
			'menu_sub_sub_active'=> '',
			'include'			 => 'admin/clientes/edit'
		);

		$this->load->view('admin/home', $data);
	}


	public function texto_edit()
	{
		$this->load->model('admin/textos_model', 'textos');
		$edit = $this->textos->texto_edit();
		switch ($this->input->post('pagina')) {
			case 'admin/textos/contato':
				# code...
			$this->contato();
				break;
			case 'admin/textos/pginicial';
				$this->pginicial();
				break;

			case 'admin/textos/historico';
				$this->historico();
				break;

			case 'admin/textos/processo';
				$this->processo();
				break;

			case 'admin/textos/localizacao';
				$this->localizacao();
				break;
			
			default:
				echo 'Erro, procure um administrador. (88) 9929-7262';
				break;
		}
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */