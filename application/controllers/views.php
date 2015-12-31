<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Views extends CI_Controller {

    public function index()
    {

        $data = "Text from controller's index method";
        $this->load->view('index', $data);

    }

}