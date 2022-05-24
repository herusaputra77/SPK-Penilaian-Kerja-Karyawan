<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
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
            'isi' => 'admin/v_perhitungan',
            'judul' => 'Perhitungan',
            'alternatif' => $this->db->get('tb_alternatif')->result_array()
        ];
        // $data['matrix'] = $this->hitung();
        $data['s'] = $this->M_kriteria->get_tabel();
        $data['nilai_alternatif'] = $this->M_perhitungan->alternatif();
        $data['alternatif'] = $this->M_alternatif->alternatif();
        var_dump($data['s']);
        $this->load->view('layout/app', $data);
    }
    public function perhitungan2()
    {
        if ($this->M_alternatif->alternatif() != null) {
            $data = [
                'isi' => 'admin/v_perhitungan2',
                'judul' => 'Perhitungan',
            ];
            $id = $this->session->userdata('id_user');
            $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
            $data['alternatif'] = $this->M_alternatif->alternatif();
            $data['kriteria'] = $this->M_kriteria->get_kriteria();
            // $data['alternatiff'] = $this->M_perhitungan->alternatif();

            $posisi = 0;
            foreach ($data['kriteria'] as $k) {
                $id_k = $k['id_kriteria'];
                //Nilai A+
                if ($k['sifat'] == 'B') {
                    $data['aplus'] = $this->M_perhitungan->select_Max($id_k);
                } else {
                    $data['aplus'] = $this->M_perhitungan->select_Min($id_k);
                }
                $data['A_plus'][$posisi] = $data['aplus'];


                //Nilai A-
                if ($k['sifat'] == 'B') {
                    $data['amin'] = $this->M_perhitungan->select_Min($id_k);
                } else {
                    $data['amin'] = $this->M_perhitungan->select_Max($id_k);
                }
                $data['A_min'][$posisi] = $data['amin'];

                $posisi = $posisi + 1;
            }

            $x = 0;
            foreach ($data['alternatif'] as $g) {
                $id_g = $g['id_alternatif'];
                // var_dump($id_g);
                $y = 0;
                $dplus = 0;
                $dmin = 0;
                foreach ($data['kriteria'] as $k) {
                    $id_k = $k['id_kriteria'];
                    // var_dump($id_k);
                    $data['terbobot'] = $this->M_perhitungan->get_Nilai2($id_k, $id_g);
                    $n_terbobot = $data['terbobot']['terbobot'];
                    $aplus = $data['A_plus'][$y]['nilai_a'];
                    $amin = $data['A_min'][$y]['nilai_a'];
                    // var_dump($aplus);
                    // var_dump($amin);

                    //Nilai D+
                    $n_dplus = number_format(pow($aplus - $n_terbobot, 2), 3);
                    $dplus = $dplus + $n_dplus;
                    // var_dump($dplus);

                    //Nilai D-
                    $n_dmin = number_format(pow($n_terbobot - $amin, 2), 3);
                    $dmin = $dmin + $n_dmin;

                    $y = $y + 1;
                }
                $data['hasil'][$x]['0'] =  number_format(sqrt($dplus), 3);
                $data['hasil'][$x]['1'] =  number_format(sqrt($dmin), 3);

                //Nilai Preferensi
                if ($data['hasil'][$x]['0'] and $data['hasil'][$x]['1'] != 0) {
                    $preferensi = number_format($data['hasil'][$x]['1'] / ($data['hasil'][$x]['1'] + $data['hasil'][$x]['0']), 3);
                } else {
                    $preferensi = 0;
                    $this->session->set_flashdata('belum', 'Penilaian belum dihitung');
                }
                $hasil_pre = $data['hasil'][$x]['2'] =  $preferensi;
                // var_dump($preferensi);
                //Cek sudah dihitung

                foreach ($data['kriteria'] as $n) {
                    $id_kri = $n['id_kriteria'];
                    // var_dump($id_kri);
                    $this->M_perhitungan->update_preferensi($preferensi, $id_g, $id_kri);
                    $this->M_perhitungan->hasil_preferensi($preferensi, $id_g);

                    // var_dump($id_g);
                }

                $x = $x + 1;
            }
            $data['nilai_akhir'] = $this->M_perhitungan->perhitungan_id($id_g);
            $rank = $data['nilai_akhir']['id_alternatif'];
            // var_dump($rank);
            // $this->M_perhitungan->update_Rank($rank, $id_g);
            // $data['kinerja'] = $this->nilai_model->get_hasil($id);
            $data['hasil'] = $this->M_perhitungan->get_hasil();
            $data['s'] = $this->M_kriteria->get_tabel();
            // var_dump($data['s']);
            $this->load->view('layout/app', $data);
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Alternatif Kosong, Silahkan Tambah data!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
            redirect('admin/alternatif');
        }
    }
    public function hitung()
    {
        $data['kriteria'] = $this->M_kriteria->get_kriteria();
        $data['nilai_matrix'] = $this->M_perhitungan->alternatif();
        $data['alternatif'] = $this->M_alternatif->alternatif();
        foreach ($data['alternatif'] as $al1) {
            $idal1 = $al1['id_alternatif'];
            $data['alt'] = $this->M_perhitungan->id_alternatif($idal1);
            foreach ($data['alt'] as $alt2) {
                $idkrt = $alt2['id_kriteria'];
                // nilai kuadrat
                $nilai_kuadrat = 0;
                $ki = $this->M_perhitungan->id_kriteria($idkrt);
                foreach ($ki as $kii) {
                    // pembagi
                    $nilai_kuadrat = $nilai_kuadrat + ($kii['nilai'] * $kii['nilai']);
                    $snilai_kuadrat = round($nilai_kuadrat, 4);
                    $ternormalisasi = round(($alt2['nilai'] / sqrt($nilai_kuadrat)), 4);
                    // var_dump($idkrt);
                }
                $this->M_perhitungan->add_ternormalisasi($ternormalisasi, $idal1, $idkrt);
                // nilai terbobot
                $id_kriteria = $alt2['id_kriteria'];
                $bt2 = $this->M_kriteria->id_kriteria($id_kriteria);
                $bot = $bt2['bobot'];
                $terbobot = round(($alt2['nilai'] / sqrt($snilai_kuadrat)), 4) * $bot;
                $this->M_perhitungan->nilai_terbobot($terbobot, $idal1, $idkrt);
            }
        }
        redirect('admin/perhitungan/perhitungan2');
    }
}

/* End of file Perhitungan.php */
