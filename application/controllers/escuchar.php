<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Escuchar extends MY_Controller {
  function __construct()
     {
       parent::__construct();
       $this->load->helper(array('form'));
       $this->load->model('Artista_model','artista');
     }  


  public function index() {
    $this->load->model('Artista_model');

    $ArtistaResult = $this->Artista_model->getTodosArtista();
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

  function artista($nombre)
   {
     $this->load->library('form_validation');
     $this->load->helper('security');
    
     $this->session->artistav = $this->artista->getArtista(urldecode($nombre));
     $this->session->tracks = $this->artista->getTracks(urldecode($nombre));

     $this->middle = 'artista'; 
     $this->layout();
      
   }
  
}