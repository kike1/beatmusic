<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Usuario','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->load->helper('security');

   $this->form_validation->set_rules('username', 'usuario', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

   if($this->form_validation->run() == FALSE)
   {
    //Field validation failed.  User redirected to login page
    $this->session->errorlogin = true;  
    //$this->session->set_flashdata('msg', 'Login incorrecto! Vuelva a intentarlo.'); 
   }
   else
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
    if($this->Usuario->registro($username, $password)){
      
      $this->session->errorlogin = false;
      $this->session->set_flashdata('msg', 'Registro satisfactorio, identifíquese.');
    }else{
      $this->session->errorlogin = true;
      $this->session->set_flashdata('msg', 'El usuario ya existe.');
    }    

   }
    $this->middle = 'home';
    $this->layout();
    
 }

}
?>