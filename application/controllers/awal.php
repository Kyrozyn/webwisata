<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class awal extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }
    public function index(){
        $this->load->helper('url');
        $info['pesan'] = null;
        if ($this->ion_auth->logged_in()){
            $user = $this->ion_auth->user()->row();
            $name = $user->username;
            $pesan = "Hai! ".$name;
            $info = array("pesan"=>$pesan);
        }
        $this->load->view('materializ',$info);
    }

}

