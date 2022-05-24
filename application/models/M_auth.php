<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

    public function register()
    {
        $nm_user = $this->input->post('nm_user');
        $username = $this->input->post('username');
        $nip = $this->input->post('nip');
        $jenkel = $this->input->post('jenkel');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $password = $this->input->post('password');

        $data = [
            'id_role' => 3,
            'nm_user' => $nm_user,
            'username' =>  $username,
            'jenkel' => $jenkel,
            'alamat' => $alamat,
            'nip' => $nip,
            'no_hp' => $no_hp,
            'pass' => $password,
            'gambar' => 'user.png',
            'tgl_buat' => time()
        ];
        $this->db->insert('tb_user', $data);
    }
    public function cek_login()
    {
        $nip = set_value('nip');
        $password = set_value('password');
        $akses = set_value('akses');

        $result = $this->db->where('nip', $nip)
            ->where('pass', $password)
            ->where('id_role', $akses)
            ->limit(1)
            ->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
    public function user($id)
    {
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
    }
    public function count_user()
    {
        $query = "SELECT COUNT(nm_user) as user  FROM tb_user";
        return $this->db->query($query)->row_array();
    }
}

/* End of file M_auth.php */
