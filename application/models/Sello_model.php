<?php
class Sello_model extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    public function getSellos(){
    	$query = $this->db->query("SELECT * from sello"); 
        return $query;
    }

    function insertar_sello($nombre, $img, $descripcion){
      $data = array (
        'nombre' => $nombre,
        'img' => $img,
        'descripcion' => $descripcion
      );

      $this->db->insert('sello', $data);
        return true;
    }

}
?>