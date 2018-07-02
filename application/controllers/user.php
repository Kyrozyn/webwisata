<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        if(!$this->ion_auth->in_group('admin')){
            redirect('/admin/', 'refresh');
        }
    }

    public function index()
    {
        // set the flash data error message if there is one
        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        //list the users
        $this->data['users'] = $this->ion_auth->users()->result();
        foreach ($this->data['users'] as $k => $user) {
            $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
        }

        //$this->_render_page('auth' . DIRECTORY_SEPARATOR . 'index', $this->data);
        $this->load->view('user', $this->data);
    }
    public function delete($id){
        // set the flash data error message if there is one
        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $this->data['id'] = $id;
        //list the users
        $this->data['a'] = $this->ion_auth->user($id)->result();
        $id_POST = $this->input->post('id');
        if(!empty($id_POST)){
            if($id_POST==1){
                echo "Kamu tidak bisa mendelete admin!.. Redirect kamu ke menu user";
                header('Refresh:3; url= '. base_url().'/admin/user');
            }
            else {
                $this->ion_auth->delete_user($id_POST);
                redirect('/admin/user', 'refresh');
            }
        }
        else{
            $this->load->view('delete_user',$this->data);
        }
    }
}