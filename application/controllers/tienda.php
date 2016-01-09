<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tienda extends MY_Controller {
  function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form'));
   $this->load->model('Track_model', 'track');
   $this->load->model('Usuario');
 }  
  public function index() {
    //newtracks
    $allTracks = $this->track->getNewTracks();
    $this->data["allTracks"] = $allTracks;
    $newitems = $this->load->view('layout/newitems', $this->data, true);
    //$this->session->newitems = $newitems;
    $this->data['newitems'] = $newitems;

    //topten
    $topTenResult = $this->track->topTen();
    $this->data["topten"] = $topTenResult;
    $topTen = $this->load->view('layout/topten', $this->data, true);
    //$this->session->topTenItems = $topTen;
    $this->data['topTenItems'] = $topTen;

    //featured labels
    $featuredLabels = $this->track->featuredLabels();
    $this->data["labels"] = $featuredLabels;
    $featuredView = $this->load->view('layout/featuredLabels', $this->data, true);
    $this->data['featuredLabels'] = $featuredView;

    $this->middle = 'home';
    $this->layout();
  }

  function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   $this->session->set_flashdata('msg', 'Has cerrado sesión correctamente');
   redirect(base_url());
   // $this->middle = 'home';
   // $this->layout();
 }

}