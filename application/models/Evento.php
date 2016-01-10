<?php
class Evento extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getEvento(){
        $query = $this->db->query("SELECT * from evento ORDER BY fecha ASC"); 
        return $query;
    } 
}
?>