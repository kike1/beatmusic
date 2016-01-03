<?php
class Track extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getAllTracks(){
        $query = $this->db->query("SELECT cancion.img as img, cancion.nombre as track, 
                                            album.nombre as album, artista.nombre as artista
                                    FROM cancion
                                    INNER JOIN album
                                    ON cancion.id_album = album.id
                                    INNER JOIN artista
                                    ON artista.id = album.id_artista
                                    ORDER BY cancion.fecha_creacion DESC LIMIT 10"); 
        return $query;
    } 
}
?>