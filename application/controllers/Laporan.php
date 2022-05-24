<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {
        $data = [
            'isi' => 'v_laporan',
            'judul' => 'Laporan'
        ];
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data['laporan'] = $this->M_user->laporan();
        $laporan = $this->M_user->laporan();
        // var_dump($laporan);
        $this->db->query("DELETE FROM tb_hasil");
        foreach ($laporan as $lp) {
            $nip = $lp['nip'];
            $nilai = $lp['nilai_preferensi'];
            $nm_user = $lp['nm_user'];
            $id_role = $lp['id_role'];
            $keterangan = $lp['keterangan'];
            $alternatif = $lp['alternatif'];
            $rank = $lp['rank'];
            if ($rank <= 2) {
                $kep = 'Kesempatan Naik Jabatan';
            } elseif ($rank >= 3 && $rank <= 4) {
                $kep = 'Liburan 3 hari';
            } else {
                $kep = 'Surat Peringatan';
            }
            $datal = [
                'nip' => $nip,
                'nm_karyawan' => $nm_user,
                'nilai' => $nilai,
                'rangking' => $rank,
                'jabatan' => 'Karyawan',
                'keterangan' => $keterangan,
                'keputusan' => $kep
            ];
            $this->db->insert('tb_hasil', $datal);
        };
        $this->load->view('layout/app', $data);
    }
}

/* End of file Laporan.php */
