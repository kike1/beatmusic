<?php
class Track extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getNewTracks(){
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

    function topTen(){
        $query = $this->db->query("SELECT cancion.nombre as track, artista.nombre as artista
                                    FROM artista_cancion
                                    INNER JOIN artista
                                    ON artista.id = artista_cancion.id_artista
                                    INNER JOIN cancion
                                    ON cancion.id = artista_cancion.id_cancion
                                    ORDER BY cancion.likes ASC LIMIT 10"); 
        return $query;
    } 
}
?>