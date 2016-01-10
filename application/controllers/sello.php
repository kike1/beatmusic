<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sello extends MY_Controller {

 function __construct()
 {
   parent::__construct();
 }

   function sello($nombre)
   {
    $this->load->model('Sello_model');

     $this->load->library('form_validation');
     $this->load->helper('security');
    
     $this->session->sellov = $this->sello->getSello(urldecode($nombre));

     $this->middle = 'sello'; 
     $this->layout();
      
   }

}
?>