<?php
class Album extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getAlbum(){
        $query = $this->db->query("SELECT * from album"); 
        return $query;
    } 
}
?>