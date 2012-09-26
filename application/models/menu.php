<?php
class Menu_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_produtos()
    {
       // $query = $this->db->get('entries', 10);
        //return $query->result();
        return true;
    }

}