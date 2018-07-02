<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class group extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }

    public function index()
    {
        $this->load->helper('url');
        $this->data['groups'] = $this->ion_auth->groups()->result();
        $this->load->view('group', $this->data);
        //untuk delete
        $id_POST = $this->input->post('id');
        if (!empty($id_POST)) {
            $del = $this->ion_auth->delete_group($id_POST);
            if($del) {
                ?>
                <script>
                    alert("Grup berhasil dihapus!");
                    window.location.assign(document.URL);

                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("Grup gagal dihapus!");
                    window.location.assign(document.URL);
                </script>
                <?php
            }
        }
    }

}