<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->helper(array('form', 'url'));

        $this->allowedToView();
	}
	
    public function allowedToView(){
        if($this->session->tipo != 'administrador')
        {
            $this->session->errorlogin = true;
            $this->session->set_flashdata('msg', 'Tu cuenta no es de administrador. ¡Cómprate una!');
            redirect(base_url());
        }
    }

	public function index()
	{
		/**/

		$data['titulo'] = 'Bienvenido Administrador';
		$this->load->view('admin_view',$data);
		
	}

	public function crear_artista(){

		$this->load->view('crear_artista');

	}

	public function insertar_artista(){
		$config['upload_path'] = './assets/imgs/artistas/';
		$config['allowed_types'] = '*';

		$this->load->library('form_validation');
		$this->load->library('upload', $config);

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('crear_artista');
        }
        else
        {
        	if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				
				$this->load->view('crear_artista', $error);
			}	
			else
			{
	        	$nombre = $this->input->post('nombre');
	        	$img = $this->upload->data();
	      		$desc = $this->input->post('descripcion');

	        	$this->load->model('Artista_model');

	        	if($this->Artista_model->insertar_artista($nombre, $img['file_name'], $desc)){
	        		$this->session->errorlogin = false;
	      			$this->session->set_flashdata('msg', 'Artista creado correctamente');
	        	}else{
	        		$this->session->errorlogin = true;
	      			$this->session->set_flashdata('msg', 'Error...');
	        	}

	        	$this->load->view('admin_view');
	        }
        }
	}

	public function annadir_cancion(){
		$this->load->Model('Artista_model');
		$this->load->Model('Album');
		$this->load->Model('Sello_model');

		$artistasResult = $this->Artista_model->getTodosArtista();
		$this->data["artistas"] = $artistasResult;
		$albumResult = $this->Album->getAlbum();
		$this->data["album"] = $albumResult;
		$sellosResult = $this->Sello_model->getSellos();
		$this->data["sellos"] = $sellosResult;

		$this->load->view('annadir_cancion',$this->data);
	}

	public function insertar_cancion(){
		$config['upload_path'] = './assets/imgs/tracks/';
		$config['allowed_types'] = '*';

		$this->load->library('form_validation');
		$this->load->library('upload', $config);

		$this->form_validation->set_rules('nombreCancion', 'nombreCancion', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('admin_view');
        }
        else
        {
        	if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				
				$this->load->view('annadir_cancion', $error);
			}	
			else
			{

	        	$artista = $this->input->post('artista');
	        	$album = $this->input->post('album');
	        	$sello = $this->input->post('sello');
	        	$img = $this->upload->data();
	      		$nombre = $this->input->post('nombreCancion');

	        	$this->load->model('Track_model');

	        	if($this->Track_model->insert_track($artista, $sello, $album, $nombre, $img['file_name'], 0)){
	        		$this->session->errorlogin = false;
	      			$this->session->set_flashdata('msg', 'Cancion insertada correctamente');
	        	}else{
	        		$this->session->errorlogin = true;
	      			$this->session->set_flashdata('msg', 'Error...');
	        	}

	        	$this->load->view('annadir_cancion2');
	        }
        }
	}

	public function insertar_cancion2(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';

		$this->load->library('form_validation');
		$this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE)
        {
        	$this->session->errorlogin = false;
	      	$this->session->set_flashdata('msg', 'Canción creada correctamente');
            $this->load->view('admin_view');
        }
        else
        {
        	if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				
				$this->load->view('annadir_cancion2', $error);
			}	
			else
			{
	        	$this->load->view('admin_view');
	        }
        }
	}

	public function crear_sello(){
		$this->load->view('crear_sello');
	}

	public function insertar_sello(){
		$config['upload_path'] = './assets/imgs/sellos';
		$config['allowed_types'] = '*';

		$this->load->library('form_validation');
		$this->load->library('upload', $config);

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('crear_sello');
        }
        else
        {
        	if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				
				$this->load->view('crear_sello', $error);
			}	
			else
			{
	        	$nombre = $this->input->post('nombre');
	        	$img = $this->upload->data();
	      		$desc = $this->input->post('descripcion');

	        	$this->load->model('Sello_model');

	        	if($this->Sello_model->insertar_sello($nombre, $img['file_name'], $desc)){
	        		$this->session->errorlogin = false;
	      			$this->session->set_flashdata('msg', 'Sello creado correctamente');
	        	}else{
	        		$this->session->errorlogin = true;
	      			$this->session->set_flashdata('msg', 'Error...');
	        	}

	        	$this->load->view('admin_view');
	        }
        }
	}
}

?>