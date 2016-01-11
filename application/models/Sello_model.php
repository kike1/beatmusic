<?php
class Sello_model extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    public function getSellos(){
    	$query = $this->db->query("SELECT * from sello"); 
        return $query;
    }

    function getSelloByName($nombre)
     {
       $this->db->select('*');
       $this->db->from('sello');
       $this->db->where('nombre', $nombre);
       $this->db->limit(1);

       $query = $this->db->get();

       if($query->num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
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