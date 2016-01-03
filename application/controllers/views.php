<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Views extends CI_Controller {

   var $template  = array();
   var $data      = array();

  public function index() {

    $this->load->model('Track');

    $allTracks = $this->Track->getNewTracks();
    $this->data["allTracks"] = $allTracks;
    $newitems = $this->load->view('layout/newitems', $this->data, true);
    $this->data["newitems"] = $newitems;

    $topTenResult = $this->Track->topTen();
    $this->data["topten"] = $topTenResult;
    $topTen = $this->load->view('layout/topten', $this->data, true);
    $this->data["topTenItems"] = $topTen;
    

    $this->middle = 'home';
    $this->template['header'] = $this->load->view('layout/header', $this->data, true);
    $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
    $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
    $this->load->view('layout/index', $this->template);
  }

}