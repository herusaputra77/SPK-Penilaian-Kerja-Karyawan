<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data = [
            'isi' => 'index'
        ];
        $data['user'] = $this->db->get('tb_user')->result_array();
        $this->load->view('layout_frontend/app', $data);
    }
}

/* End of file Dashboard.php */
