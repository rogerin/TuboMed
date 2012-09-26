<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria_model extends CI_Model {

    var $tabela = 'categoria';

    function __construct()
    {
        parent::__construct();
    }
    function get_all()
    {
        $this->db->order_by("nome", "asc"); 
        return $this->db->get($this->tabela)->result();
    }

    function add()
    {
		$this->db->where('nome', $this->input->post('nome')); 
		$query = $this->db->get($this->tabela); 
		if ($query->num_rows == 1) { 
			return false;
        } else {
        	$data = array(
				'nome' => $this->input->post('nome')
			);
			$this->db->insert($this->tabela, $data); 
        	return true;
        }
    }

    function seleciona_id($id)
    {
        $data = array(
            'id'    => $id
            );
        return $this->db->get_where($this->tabela, $data)->result();
    }

    function edit()
    {
        $data = array(
               'nome' => $this->input->post('nome')
            );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabela, $data); 
    }

    function deletar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabela); 
    }
}    