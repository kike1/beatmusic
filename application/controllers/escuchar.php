<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Escuchar extends MY_Controller {

  public function index() {
    $this->middle = 'escuchar'; // passing middle to function. change this for different views.
    $this->layout();
  }
  
}