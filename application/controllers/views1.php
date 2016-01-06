<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Views extends CI_Controller {

   var $template  = array();
   var $data      = array();

  public function index() {
    //newtracks
    $this->load->model('Track');
    $allTracks = $this->Track->getNewTracks();
    $this->data["allTracks"] = $allTracks;
    $newitems = $this->load->view('layout/newitems', $this->data, true);
    $this->data["newitems"] = $newitems;

    //topten
    $topTenResult = $this->Track->topTen();
    $this->data["topten"] = $topTenResult;
    $topTen = $this->load->view('layout/topten', $this->data, true);
    $this->data["topTenItems"] = $topTen;
    
    //login
    $this->load->helper(array('form'));
    if($this->session->userdata('logged_in'))
     {
       $session_data = $this->session->userdata('logged_in');
       $this->data['username'] = $session_data['username'];
       $this->session->set_flashdata('msg', 'Logueado correctamente! Bienvenido '.$session_data['username'].'.');
       $this->load->view('layout/index', $data);
     }
     else
     {
       //If no session, redirect to login page
       $this->session->set_flashdata('msg', 'Login incorrecto! Vuelva a intentarlo.');
       $this->load->view('layout/index');
     }

    //layout
    $this->middle = 'home';
    $this->template['header'] = $this->load->view('layout/header', $this->data, true);
    $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
    $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
    $this->load->view('layout/index', $this->template);
  }

}