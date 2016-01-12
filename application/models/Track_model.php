<?php
class Track_model extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getNewTracks(){
        $query = $this->db->query("SELECT cancion.id as id, cancion.likes as likes, cancion.img as img, cancion.nombre as track, 
                                            sello.nombre as sello, artista.nombre as artista
                                    FROM cancion
                                    INNER JOIN sello
                                    ON sello.id = cancion.id_sello
                                    INNER JOIN artista
                                    ON artista.id = cancion.id_artista
                                    ORDER BY cancion.fecha_creacion DESC LIMIT 8"); 
        return $query;
    } 

    function topTen(){
        $query = $this->db->query("SELECT cancion.img as img, cancion.nombre as track, 
                                            sello.nombre as sello, artista.nombre as artista
                                    FROM cancion
                                    INNER JOIN sello
                                    ON sello.id = cancion.id_sello
                                    INNER JOIN artista
                                    ON artista.id = cancion.id_artista
                                    ORDER BY cancion.likes DESC LIMIT 10"); 
        return $query;
    } 

    function featuredLabels(){
        $query = $this->db->query("SELECT distinct(sello.nombre) as nombre, sello.img as imgsello
                                    FROM cancion
                                    INNER JOIN sello
                                    ON sello.id = cancion.id_sello
                                    ORDER BY cancion.likes DESC LIMIT 10"); 
        return $query;
    } 

    public function sumLike($idcancion,$idusuario,$likes){
        $numl =  $likes+1;

        $this->db->select('*');
        $this->db->from('usuario_likes');
        $this->db->where('id_usuario', $idusuario);
        $this->db->where('id_cancion', $idcancion);
        $query = $this->db->get();

        if($query->num_rows() == 1){
            return false;
        }else{
            $data = array(
               'id_usuario' => $idusuario,
               'id_cancion' => $idcancion
            );
            $this->db->insert('usuario_likes', $data); 

            $dataup = array(
               'likes' => $numl
            );
            $this->db->where('id', $idcancion);
            $this->db->update('cancion', $dataup); 
            return true;
        }
        
    }

    public function insert_track($artista, $sello, $album, $nombre, $img, $likes){
        $data = array (
        'id_album' => $album,
        'id_sello' => $sello,
        'id_artista' => $artista,
        'nombre' => $nombre,
        'img' => $img,
        'likes' => $likes
      );

      $this->db->insert('cancion', $data);
        return true;
    }
}
?>