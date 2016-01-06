<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Escuchar extends MY_Controller {
  function __construct()
     {
       parent::__construct();
       //$this->session;
       $this->load->helper(array('form'));
     }  


  public function index() {
    $this->middle = 'escuchar';
    $this->layout();
  }
  
}