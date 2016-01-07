<?php
class Artista extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getArtista(){
        $query = $this->db->query("SELECT * from artista"); 
        return $query;
    }

    function insertar_artista($nombre, $img, $descripcion){
    	$data = array (
    		'nombre' => $nombre,
    		'img' => $img,
    		'descripcion' => $descripcion
    	);

    	$this->db->insert('artista', $data);
        return true;
    }
}
?>