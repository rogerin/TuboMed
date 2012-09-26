<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('admin/user_model', 'user');
        $this->user->logado();
    }

     public function index()
	{
		echo '...';
	}


    public function add()
    {
    	$this->load->model('admin/categoria_model', 'categoria');
    	$result = $this->categoria->add();
    	if($result) {

             $result = $this->categoria->get_all();
            $data = array(
                'menu_active'        => 'categorias',
                'menu_sub_active'    => 'cat_add',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/categorias/edit',
                'categorias'          => $result
            );

            $this->load->view('admin/home', $data);
        }
    	
    	else {
            $data = array(
                'menu_active'        => 'categorias',
                'menu_sub_active'    => 'cat_add',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/categorias/add',
                'erro'               => true
            );

            $this->load->view('admin/home', $data);
        	}
    }


    function editar($id)
    {
        $this->load->model('admin/categoria_model', 'categoria');
        $result = $this->categoria->seleciona_id($id);
        $data = array(
                'menu_active'        => 'categorias',
                'menu_sub_active'    => 'cat_edit',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/categorias/editar',
                'categoria'          => $result
            );

        $this->load->view('admin/home', $data);
    }

    function edit()
    {
        $this->load->model('admin/categoria_model', 'categoria');
        $this->categoria->edit();

        $result = $this->categoria->get_all();

         $data = array(
                'menu_active'        => 'categorias',
                'menu_sub_active'    => 'cat_edit',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/categorias/edit',
                'categorias'          => $result
            );

        $this->load->view('admin/home', $data);
        
    }


    function deletar($id)
    {
        $this->load->model('admin/categoria_model', 'categoria');
        $this->categoria->deletar($id);

        $result = $this->categoria->get_all();

         $data = array(
                'menu_active'        => 'categorias',
                'menu_sub_active'    => 'cat_edit',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/categorias/edit',
                'categorias'          => $result
            );

        $this->load->view('admin/home', $data);



    }
}