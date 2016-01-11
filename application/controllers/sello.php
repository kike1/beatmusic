<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sello extends MY_Controller {

 function __construct()
 {
   parent::__construct();

   $this->load->model('Sello_model','sello');
   $this->load->library('form_validation');
   $this->load->helper('security');
 }

 function index($nombre){
   $this->session->sellov = $this->sello->getSelloByName(urldecode($nombre));

   $this->middle = 'sello'; 
   $this->layout();
 }
}
?>