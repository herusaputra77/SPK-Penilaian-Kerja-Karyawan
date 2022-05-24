<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{

    public function index()
    {
        $data = [
            'isi' => 'pimpinan/v_alternatif',
            'judul' => 'Data Alternatif',
        ];
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data['alternatif'] = $this->M_alternatif->alternatif();
        $this->load->view('layout/app', $data);
    }
    public function matrix($id)
    {
        $data = [
            'isi' => 'pimpinan/v_nilaiMatrix',
            'judul' => 'Nilai Matrix',
            'nilai_matrix' => $this->db->get('tb_nilai_matrix')->result_array(),
            'kriteria' => $this->db->get('tb_kriteria')->result_array()
        ];
        $data['alternatif'] = $this->M_alternatif->get_alterByid($id);
        $data['nilai'] = ['50', '55', '60', '65', '70', '75', '80', '85', '90', '95', '100'];
        // $data['nilai'] = $this->db->get_where('tb_nilai_matrix', ['id_alternatif' => $id])->row_array();
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $this->load->view('layout/app', $data);
    }
    public function nilai_matrix()
    {
        $this->M_alternatif->edit_nilai();
        redirect('pimpinan/alternatif');
    }
}

/* End of file Alternatif.php */
