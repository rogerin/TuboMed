<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('admin/user_model', 'user');
        $this->user->logado();
    }

    public function index()
    {
        echo '...'; die();
    }

    public function adicionar()
    {
        $data = array(
            'menu_active'        => 'opcionais',
            'menu_sub_active'    => 'op_add',
            'menu_sub_sub_active'=> '',
            'include'            => 'admin/opcionais/add'
        );

        $this->load->view('admin/home', $data);
    }

    public function listar()
    {

        $this->load->model('admin/opcional_model', 'opcional');
        $result = $this->opcional->get_all();

        $data = array(
            'menu_active'        => 'opcionais',
            'menu_sub_active'    => 'op_edit',
            'menu_sub_sub_active'=> '',
            'include'            => 'admin/opcionais/listar',
            'opcionais'          => $result
        );

        $this->load->view('admin/home', $data);
    }

    public function editar($id)
    {
         $this->load->model('admin/opcional_model', 'opcional');
         $result = $this->opcional->seleciona_id($id);
          $data = array(
                'menu_active'        => 'opcionais',
                'menu_sub_active'    => 'op_edit',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/opcionais/editar',
                'sucesso'            => true,
                'opcional'          => $result

            );
           $this->load->view('admin/home', $data);
    }

    public function add()
    {
        $this->load->model('admin/opcional_model', 'opcional');
        $result = $this->opcional->add();
        $result2 = $this->opcional->get_all();
        if($result) {
             $data = array(
                'menu_active'        => 'opcionais',
                'menu_sub_active'    => 'op_edit',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/opcionais/listar',
                'sucesso'            => true,
                'opcionais'          => $result2

            );

            $this->load->view('admin/home', $data);
        } else {   
            echo 'erro';

        }

    }

    public function edit()
    {
         $this->load->model('admin/opcional_model', 'opcional');
         $this->opcional->edit();
         $result = $this->opcional->get_all();
         $data = array(
                'menu_active'        => 'opcionais',
                'menu_sub_active'    => 'op_edit',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/opcionais/listar',
                'sucesso'            => true,
                'opcionais'          => $result
            );
         $this->load->view('admin/home', $data);
    }

    public function excluir($id)
    {
        $this->load->model('admin/opcional_model', 'opcional');
        $result = $this->opcional->seleciona_id($id);
        $data = array(
                'menu_active'        => 'opcionais',
                'menu_sub_active'    => 'op_edit',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/opcionais/excluir',
                'opcional'          => $result
            );
         $this->load->view('admin/home', $data);
    }

    public function del($id)
    {
         $this->load->model('admin/opcional_model', 'opcional');
         $this->opcional->deletar($id);
         $result = $this->opcional->get_all();
         $data = array(
                'menu_active'        => 'opcionais',
                'menu_sub_active'    => 'op_edit',
                'menu_sub_sub_active'=> '',
                'include'            => 'admin/opcionais/listar',
                'sucesso'            => true,
                'opcionais'          => $result
            );
         $this->load->view('admin/home', $data);
    }


}