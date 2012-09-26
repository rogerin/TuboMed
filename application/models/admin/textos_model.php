<?php
class Textos_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_pginicial()
    {
        $this->db->where('pagina', 'pginicial'); 
        return $this->db->get('textos')->result(); 
    }

    function get_historico()
    {
        $this->db->where('pagina', 'historico'); 
        return $this->db->get('textos')->result(); 
    }

    function get_processo()
    {
        $this->db->where('pagina', 'processo'); 
        return $this->db->get('textos')->result(); 
    }

    function get_localizacao()
    {
        $this->db->where('pagina', 'localizacao'); 
        return $this->db->get('textos')->result(); 
    }

    function get_contato()
    {
        $this->db->where('pagina', 'contato'); 
        return $this->db->get('textos')->result(); 
    }

    function texto_edit()
    {
        $data = array(
               'texto' => $this->input->post('texto')
            );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('textos', $data);
    }


}