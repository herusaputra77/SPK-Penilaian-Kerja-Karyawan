<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (
            $this->session->userdata('id_role') != 1
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
            'isi' => 'admin/v_kriteria',
            'judul' => 'Data Kriteria',
        ];
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data['kriteria'] = $this->db->get('tb_kriteria')->result_array();
        $this->load->view('layout/app', $data);
    }
    public function tambah()
    {
        $table = "tb_kriteria";
        $field = "id_kriteria";
        $lastid = $this->M_kriteria->getMax($table, $field);
        // mengambil karakter dari belakang
        $noUrut = (int) substr($lastid, -3, 4);
        $noUrut += 1;
        $str = 'K';
        $newid = $str .  sprintf('%03s', $noUrut);
        $data = [
            'isi' => 'admin/v_tambahkriteria',
            'judul' => 'Tambah Kriteria',
            'id' => $newid
        ];
        $this->load->view('layout/app', $data);
    }

    public function edit($id_k)
    {
        $data = [
            'isi' => 'admin/v_editKriteria',
            'judul' => 'Edit Kriteria',
        ];
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data['kriteria'] = $this->db->get_where('tb_kriteria', ['id_kriteria' => $id_k])->result_array();
        $this->load->view('layout/app', $data);
        // var_dump($data['kriteria']);
    }
    public function update()
    {

        $id_kriteria = $this->input->post('id_kriteria');
        $nm_kriteria = $this->input->post('nm_kriteria');
        $sifat = $this->input->post('sifat');
        $bobot = $this->input->post('bobot');


        $data = [
            'nm_kriteria' => $nm_kriteria,
            'bobot' => $bobot,
            'sifat' => $sifat
        ];
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->update('tb_kriteria', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Kriteria Berhasil Diupdate!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
        redirect('admin/kriteria');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nm_kriteria', 'Nama Kriteria', 'trim|required');
        $this->form_validation->set_rules('bobot', 'Bobot', 'trim|required');
        $this->form_validation->set_rules('sub1', 'Subkriteria1', 'trim|required');
        $this->form_validation->set_rules('subBobot1', 'Bobot Subkriteria1', 'trim|required');
        $this->form_validation->set_rules('sub2', 'Subkriteria2', 'trim|required');
        $this->form_validation->set_rules('subBobot2', 'Bobot Subkriteria2', 'trim|required');
        $this->form_validation->set_rules('sub3', 'Subkriteria3', 'trim|required');
        $this->form_validation->set_rules('subBobot3', 'Bobot Subkriteria3', 'trim|required');
    }
}

/* End of file Kriteria.php */
