<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends MY_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Usuario');
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->load->helper('security');

   $this->form_validation->set_rules('username', 'usuario', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
    $this->session->errorlogin = true;  
    $this->session->set_flashdata('msg', 'Login incorrecto! Vuelva a intentarlo.'); 
   }
   else
   {
    $this->session->errorlogin = false;
    $this->session->username = $this->input->post('username');
    $this->session->set_flashdata('msg', 'Logueado correctamente! Bienvenido '.$this->session->username);

    $tip = $this->Usuario->getTipo($this->session->username);
    foreach($tip->result() as $row){
      $this->session->tipo = $row->tipo;
    }
   }
    redirect(base_url());
    
 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->Usuario->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->nick
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>