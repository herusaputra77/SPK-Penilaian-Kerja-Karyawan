<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $data = [
            'isi' => 'v_profile',
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
            'isi' => 'v_editProfile',
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
            redirect('profile');
        }
    }
}


/* End of file Profile.php */
