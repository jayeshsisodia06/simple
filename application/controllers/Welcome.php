<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('show');
    }

    public function submitName()
    {
        $name = $this->input->post('name');
        $data = array(
            'name' => $name
        );
        $this->db->insert('user', $data);
    }
}
