<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
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
            'isi' => 'admin/v_alternatif',
            'judul' => 'Data Alternatif',
        ];
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data['alternatif'] = $this->M_alternatif->alternatif();
        $this->load->view('layout/app', $data);
    }
    public function tambah_alter()
    {
        $this->db->select_max('id_alternatif');
        $id_alternatif = $this->db->get('tb_alternatif')->row_array()['id_alternatif'];
        // mengambil karakter dari belakang
        $noUrut = (int) substr($id_alternatif, -3, 4);
        $noUrut += 1;
        $str = 'A';
        $newid = $str .  sprintf('%03s', $noUrut);
        // var_dump($newid);
        $data = [
            'isi' => 'admin/v_tambahAlternatif',
            'judul' => 'Tambah Alternatif',
            'id' => $newid
        ];
        // cek apakah alternatif sudah ada
        $alternatif = $this->db->get('tb_alternatif')->result_array();

        $id = $this->session->userdata('id_user');
        $data['karyawan'] = $this->M_alternatif->karyawan();
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data['kriteria'] = $this->db->get('tb_kriteria')->result_array();
        $this->load->view('layout/app', $data);
    }
    public function insert()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_alter();
        } else {
            $id_user = $this->input->post('id_user');

            // $data['alternatif'] = $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
            // $alternatif = $data['alternatif']['nm_user'];
            // var_dump($alternatif);

            $id_alternatif = $this->input->post('id_alternatif', true);
            $keterangan = $this->input->post('keterangan', true);
            $data = [
                'id_alternatif' => $id_alternatif,
                // 'id_user' => $id_user,
                'alternatif' => $id_user,
                'keterangan' => $keterangan
            ];

            if ($this->db->insert('tb_alternatif', $data) == true) {
                $ii = 1;
                $kriteria = $this->db->get('tb_kriteria');
                $id_kriteria = $this->db->get('tb_kriteria')->result_array();
                $jml_krit1 = $kriteria->num_rows();
                for ($h = 1; $h <= $jml_krit1; $h++) {
                    $data = [
                        'id_alternatif' => $id_alternatif,
                        'id_kriteria' => 'K00' . $ii,
                        'normalisasi' => '0',
                        'nilai_preferensi' => '0'
                    ];
                    $this->db->insert('tb_perhitungan', $data);
                    $ii++;
                }
                $i = 1;
                $kriteria = $this->db->get('tb_kriteria');
                $id_kriteria = $this->db->get('tb_kriteria')->result_array();
                $jml_krit = $kriteria->num_rows();
                for ($h = 1; $h <= $jml_krit; $h++) {
                    $data = [
                        'id_alternatif' => $id_alternatif,
                        'id_kriteria' => 'K00' . $i,
                        'nilai' => 50
                    ];
                    $this->db->insert('tb_nilai_matrix', $data);
                    $i++;
                }
                $data = [
                    'id_alternatif' => $id_alternatif,
                    'nilai_preferensi' => ''
                ];
                $this->db->insert('tb_nilai_preferensi', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Alternatif Berhasil Disimpan!
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>');
                redirect('admin/alternatif');
            }
        }
    }

    public function hapus($id)
    {
        $this->M_alternatif->hapus_alt($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Alternatif Berhasil Dihapus!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
        redirect('admin/alternatif');
    }
    public function matrix($id)
    {
        $data = [
            'isi' => 'admin/v_nilaiMatrix',
            'judul' => 'Nilai Matrix',
            'alternatif' => $this->M_alternatif->get_alterByid($id),
            'nilai_matrix' => $this->db->get('tb_nilai_matrix')->result_array(),
            'kriteria' => $this->db->get('tb_kriteria')->result_array()
        ];
        $data['nilai'] = ['50', '55', '60', '65', '70', '75', '80', '85', '90', '95', '100'];
        // $data['nilai'] = $this->db->get_where('tb_nilai_matrix', ['id_alternatif' => $id])->row_array();
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $this->load->view('layout/app', $data);
    }
    public function nilai_matrix()
    {
        $this->M_alternatif->edit_nilai();
        redirect('admin/alternatif');
    }
    public function _rules()
    {
        $this->form_validation->set_rules(
            'id_user',
            'Alternatif',
            'trim|required|is_unique[tb_alternatif.alternatif]',
            ['is_unique' => 'Data Sudah Ada!']
        );
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
    }
    public function get_karyawan()
    {
        $id_karyawan = $this->input->post('id');
        // $id_karyawan = 1;


        $karyawan = $this->db->get_where('tb_user', ['id_user' => $id_karyawan])->row_array();
        error_reporting(0);

        if ($karyawan['nm_user'] != null) {
            echo "<table class='table table-striped'>
						<tr>
							<td width='30%'>Nama</td>
							<td>:</td>
							<td>" . $karyawan['nm_user'] . "</td>
						</tr>
                        <tr>
							<td width='30%'>NIP</td>
							<td>:</td>
							<td>" . $karyawan['nip'] . "</td>
						</tr>
						<tr>
							<td width='30%'>No Hp</td>
							<td>:</td>
							<td>" . $karyawan['no_hp'] . "</td>
						</tr>
						
					</table>";
        } else {
            echo "Anggota Tidak Ditemukan !";
        }
    }
}

/* End of file Alternatif.php */
