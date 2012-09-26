<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('admin/textos_model', 'textos');
		$texto = $this->textos->get_pginicial();
		$data = array(
			'include'		=> 'inicio',
			'menu_active'	=> 'home',
			'texto'			=> $texto
			);
		$this->load->view('index',$data);

	}

	public function empresa()
	{
		echo 'empresa';
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */