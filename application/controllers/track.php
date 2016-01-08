<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Track extends MY_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Track_model');
 }

 function like($idcancion,$idusuario,$likes){
    $this->Track_model->sumLike($idcancion,$idusuario,$likes);
    redirect('','refresh');
 }

}
?>