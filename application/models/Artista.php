<?php
class Artista extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getArtista(){
        $query = $this->db->query("SELECT * from artista"); 
        return $query;
    } 
}
?>