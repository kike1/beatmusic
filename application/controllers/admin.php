<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		/*if($this->session->userdata('tipo') == FALSE || $this->session->tipo != 'administrador')
		{
			redirect(base_url().'login');
		}*/
		$data['titulo'] = 'Bienvenido Administrador';
		$this->load->view('admin_view',$data);
	}

	public function crear_artista(){

		$this->load->view('crear_artista');

	}

	public function insertar_artista(){
		$this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('crear_artista');
        }
        else
        {
        	$nombre = $this->input->post('nombre');
        	$img = $this->input->post('imagen');
      		$desc = $this->input->post('descripcion');

        	$this->load->model('Artista_model');

        	if($this->Artista_model->crear_artista($nombre, $img, $desc)){
        		$this->session->errorlogin = false;
      			$this->session->set_flashdata('msg', 'Artista creado correctamente');
        	}else{
        		$this->session->errorlogin = true;
      			$this->session->set_flashdata('msg', 'Error...');
        	}

        	$this->load->view('admin_view');
        }
	}

	public function annadir_cancion(){
		$this->load->Model('Artista_model');
		$this->load->Model('Album');

		$artistasResult = $this->Artista_model->getTodosArtista();
		$this->data["artistas"] = $artistasResult;
		$albumResult = $this->Album->getAlbum();
		$this->data["album"] = $albumResult;

		$this->load->view('annadir_cancion',$this->data);
	}

	public function insertar_cancion(){

	}
}

?>