<?php
class Track extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function getNewTracks(){
        $query = $this->db->query("SELECT cancion.img as img, cancion.nombre as track, 
                                            sello.nombre as sello, artista.nombre as artista
                                    FROM cancion
                                    INNER JOIN sello
                                    ON sello.id = cancion.id_sello
                                    INNER JOIN artista
                                    ON artista.id = cancion.id_artista
                                    ORDER BY cancion.fecha_creacion DESC LIMIT 10"); 
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
                                    ORDER BY cancion.likes ASC LIMIT 10"); 
        return $query;
    } 
}
?>