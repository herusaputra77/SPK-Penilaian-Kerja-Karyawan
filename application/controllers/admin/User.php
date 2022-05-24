<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
            'isi' => 'admin/v_user',
            'judul' => 'User'
        ];
        $data['user2'] = $this->db->get('tb_user')->result_array();
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $this->load->view('layout/app', $data);
    }
    public function hapus($id)
    {
        $this->db->delete('tb_user', ['id_user' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data User Berhasil Dihapus!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
        redirect('admin/user');
    }
    public function profile()
    {
        $data = [
            'isi' => 'admin/v_profile',
            'judul' => 'Profile'
        ];
        $data['user2'] = $this->db->get('tb_user')->result_array();
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $this->load->view('layout/app', $data);
    }
    public function edit_profile()
    {
        $data = [
            'isi' => 'admin/v_editProfile',
            'judul' => 'Edit Profile'
        ];
        $data['user2'] = $this->db->get('tb_user')->result_array();
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $this->load->view('layout/app', $data);
    }
    public function update_profile()
    {
        $id = $this->session->userdata('id_user');
        $data['judul'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->edit_profile();
        } else {
            $nama = $this->input->post('nama');
            $nip = $this->input->post('nip');
            $username = $this->input->post('username');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['gambar'];
                    if ($old_image != 'user.png') {
                        unlink(FCPATH . 'assets/user/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nm_user', $nama);
            $this->db->set('username', $username);
            $this->db->where('nip', $nip);
            $this->db->update('tb_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('admin/user/profile');
        }
    }
    public function ganti_akses()
    {
        $id_user = $this->input->post('id_user');
        $akses = $this->input->post('akses');
        $this->db->set('id_role', $akses);
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_user');
        redirect('admin/user');
    }
}


/* End of file User.php */
