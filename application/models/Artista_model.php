<?php
class Artista_model extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getTodosArtista(){
        $query = $this->db->query("SELECT * from artista"); 
        return $query;
    } 

    function getArtista($nombre)
     {
       $this->db->select('*');
       $this->db->from('artista');
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

     function getTracks($nombre)
     {

      $this->db->select('id')->from('artista')->where('nombre', $nombre);
      $subQuery = $this->db->get_compiled_select();

       $this->db->select('*');
       $this->db->from('cancion');
       $this->db->where('id_artista = ('.$subQuery.')', NULL, FALSE);

       $query = $this->db->get();

       if($query->num_rows() >= 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
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