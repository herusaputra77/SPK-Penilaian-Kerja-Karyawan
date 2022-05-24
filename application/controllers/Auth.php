<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Login";
        $this->load->view('auth/v_login');
    }
    public function register()
    {
        $data['judul'] = "Regsiter";

        $this->load->view('auth/v_register', $data);
    }
    public function insert_register()
    {
        $this->_rules();

        if ($this->form_validation->run() ==   FALSE) {
            $this->register();
        } else {
            $this->M_auth->register();
            redirect('auth');
        }
    }
    public function cek_login()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('akses', 'Akses', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $nip = $this->input->post('email');
            $password = $this->input->post('password');
            $akses = $this->input->post('akses');

            // $auth = $this->M_auth->cek_login($email, $password);
            $auth = $this->M_auth->cek_login();
            var_dump($auth);
            if ($auth == FALSE) {
                $this->session->set_flashdata('login', '<div class="alert alert-danger">NIP atau Password Salah!</div>');
                redirect('auth');
            } else {
                $this->session->set_userdata('nip', $auth->nip);
                $this->session->set_userdata('id_role', $auth->id_role);
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('id_user', $auth->id_user);
                $this->session->set_userdata('username', $auth->username);

                switch ($auth->id_role) {
                    case 1:
                        redirect('admin/beranda');
                        # code...
                        break;
                    case 2:
                        redirect('pimpinan/beranda');
                        # code...
                        break;
                    case 3:
                        redirect('karyawan/beranda');
                        # code...
                        break;
                }
                $this->session->set_flashdata('pesan', '<div class="alert alert-success">Selamat Datang</div>');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('id_role');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_user');
        redirect('dashboard');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nm_user', 'Nama User', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
    }
}

/* End of file Auth.php */
