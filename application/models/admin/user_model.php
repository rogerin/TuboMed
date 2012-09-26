<?php
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function logar()
    {
		$this->db->where('login', $this->input->post('login')); 
		$this->db->where('senha', md5($this->input->post('senha')));
		//$this->db->where('status', 1); // Verifica o status do usuário
		$query = $this->db->get('user'); 
		if ($query->num_rows == 1) { 
			return true; // RETORNA VERDADEIRO
        } else {
        	return false;
        }
    }

    function logado(){
    	 $logged = $this->session->userdata('logado');

        if (!isset($logged) || $logged != true) {
            echo 'Voce nao tem permissao para entrar nessa pagina.';
            $this->load->view('admin/login');
            die();
        }

    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->unset_userdata('logado');
        redirect('admin/login');
    }



}