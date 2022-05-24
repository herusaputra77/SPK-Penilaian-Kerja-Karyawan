<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (
            $this->session->userdata('id_role') != 2
        ) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           Anda Harus Login!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
            redirect('Auth');
        }
    }

    public function index()
    {
        $data = [
            'isi' => 'pimpinan/v_beranda',
            'judul' => 'Beranda'
        ];
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        // $data['hasil'] = $this->M_perhitungan->hasil_kriteria();
        // var_dump($data['hasil']);

        $this->load->view('layout/app', $data);
    }
    public function hitung()
    {
        $data = [
            'isi' => 'pimpinan/v_hitung',
            'judul' => 'Beranda'
        ];
        $id = $this->session->userdata('id_user');
        $data['alternatif'] = $this->M_alternatif->alternatif();
        $data['kriteria'] = $this->M_kriteria->get_kriteria();;
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data['hasil'] = $this->M_perhitungan->get_hasil();
        $data['s'] = $this->M_kriteria->get_tabel();
        // var_dump($data['user']);

        $this->load->view('layout/app', $data);
    }
    public function user()
    {
        $data = [
            'isi' => 'pimpinan/v_karyawan',
            'judul' => 'Beranda'
        ];
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data['karyawan'] = $this->M_user->user_karyawan();
        // var_dump($data['karyawan']);

        $this->load->view('layout/app', $data);
    }
}

/* End of file Beranda.php */
