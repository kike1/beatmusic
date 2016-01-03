<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Views extends MY_Controller {

  public function index() {

    $this->load->model('Track');
    $allTracks = $this->Track->getAllTracks();
    array_push($this->data, 'haloo');
    $newitems = $this->load->view('layout/newitems', $this->data, true);
    array_push($this->data, $newitems);

    $this->middle = 'home';
    $this->layout();
  }

}