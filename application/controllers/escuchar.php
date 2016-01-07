<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Escuchar extends MY_Controller {
  function __construct()
     {
       parent::__construct();
       //$this->session;
       $this->load->helper(array('form'));
     }  


  public function index() {
    $this->load->model('Artista');

    $ArtistaResult = $this->Artista->getArtista();
    $this->data["getartista"] = $ArtistaResult;
    $getArtista = $this->load->view('layout/getartista', $this->data, true);
    $this->session->Artistas = $getArtista;

    $this->load->model('Album');
    $AlbumResult = $this->Album->getAlbum();
    $this->data["getalbum"] = $AlbumResult;
    $getAlbum = $this->load->view('layout/getalbum', $this->data, true);
    $this->session->Album = $getAlbum;

    $this->middle = 'escuchar';
    $this->layout();
  }
  
}