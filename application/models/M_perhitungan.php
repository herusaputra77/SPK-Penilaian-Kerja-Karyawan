<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_perhitungan extends CI_Model
{

    public function id_alternatif($id)
    {
        $result = $this->db->get_where('tb_nilai_matrix', ['id_alternatif' => $id])->result_array();
        return $result;
    }
    public function alternatif()
    {
        return $this->db->get('tb_nilai_matrix')->result_array();
    }
    public function id_kriteria($id)
    {
        $result = $this->db->get_where('tb_nilai_matrix', ['id_kriteria' => $id])->result_array();
        return $result;
    }
    public function get_alternatif($id)
    {
        return $this->db->get_where('tb_alternatif', ['id_alternatif' => $id])->result_array();
    }

    public function hapus_alt($id)
    {
        $query = "DELETE tb_alternatif.*, tb_nilai_matrix.* FROM tb_nilai_matrix, tb_alternatif 
        WHERE tb_nilai_matrix.id_alternatif = '$id' AND tb_alternatif.id_alternatif= '$id'";
        $this->db->query($query);
    }
    public function add_ternormalisasi($ternormalisasi, $idal1, $idkrt)
    {
        // matrix ternormalisasi
        $query = "UPDATE tb_perhitungan SET normalisasi = ? WHERE id_alternatif = ? AND id_kriteria = ?";
        $this->db->query($query, array($ternormalisasi, $idal1, $idkrt));
    }
    public function nilai_terbobot($terbobot, $idal1, $idkrt)
    {
        // matrix terbobot
        $query = "UPDATE tb_perhitungan SET terbobot = ? WHERE id_alternatif = ? AND id_kriteria = ?";
        $this->db->query($query, array($terbobot, $idal1, $idkrt));
    }
    public function select_Max($id_k)
    {
        $query = "SELECT MAX(terbobot) as nilai_a FROM tb_perhitungan WHERE id_kriteria = ?";
        return $this->db->query($query, array($id_k))->row_array();
    }

    public function select_Min($id_k)
    {
        $query = "SELECT MIN(terbobot) as nilai_a FROM tb_perhitungan WHERE id_kriteria = ?";
        return $this->db->query($query, array($id_k))->row_array();
    }
    public function get_Nilai2($id_k, $id_g)
    {
        $query = "SELECT id_perhitungan, normalisasi, terbobot FROM tb_perhitungan WHERE id_alternatif = '$id_g' AND id_kriteria = '$id_k'";
        return $this->db->query($query)->row_array();
    }
    public function perhitungan()
    {
        return $this->db->get('tb_perhitungan')->result_array();
    }
    public function perhitungan_id($id)
    {
        return $this->db->get_where('tb_perhitungan', ['id_alternatif' => $id])->row_array();
    }

    public function id_perhitungan($id)
    {
        return $this->db->get_where('tb_perhitungan', ['id_alternatif' => $id])->result_array();
    }
    public function v_normalisasi()
    {
        $query = "SELECT tb_perhitungan.*, tb_alternatif.* FROM tb_perhitungan, tb_alternatif
         WHERE tb_perhitungan.id_alternatif=tb_alternatif.id_alternatif";
        return $this->db->query($query)->result_array();
    }
    public function update_preferensi($preferensi, $id_g, $idkri)
    {
        $query = "UPDATE tb_perhitungan SET nilai_preferensi = ? WHERE id_alternatif = ? AND id_kriteria = ?";
        $this->db->query($query, array($preferensi, $id_g, $idkri));
    }
    public function hasil_preferensi($preferensi, $id_g)
    {
        $query = "UPDATE tb_nilai_preferensi SET nilai_preferensi = ? WHERE id_alternatif = ?";
        $this->db->query($query, array($preferensi, $id_g));
    }
    // public function update_Rank($rank, $id)
    // {
    //     $query = "UPDATE tb_perhitungan set rangking = '$rank' WHERE id_alternatif = '$id'";
    //     $this->db->query($query);
    // }
    public function get_hasil()
    {
        $query = "SELECT DISTINCT(tb_perhitungan.id_alternatif), tb_user.nm_user,tb_user.jenkel, tb_user.alamat, tb_user.nip, tb_user.no_hp, tb_alternatif.alternatif, tb_perhitungan.nilai_preferensi
        FROM tb_perhitungan, tb_alternatif, tb_user WHERE tb_perhitungan.id_alternatif=tb_alternatif.id_alternatif AND tb_user.id_user=tb_alternatif.alternatif
         ORDER BY tb_perhitungan.nilai_preferensi DESC";
        return $this->db->query($query)->result_array();
    }
    public function hasil_karyawan()
    {
        $id_user = $this->session->userdata('id_user');

        $query = "SELECT tb_nilai_preferensi.*, tb_alternatif.alternatif, FIND_IN_SET(nilai_preferensi, (SELECT GROUP_CONCAT(nilai_preferensi ORDER BY nilai_preferensi DESC) FROM tb_nilai_preferensi)) as rank FROM `tb_nilai_preferensi`, tb_alternatif 
        WHERE tb_nilai_preferensi.id_alternatif=tb_alternatif.id_alternatif AND tb_alternatif.alternatif=$id_user";
        return $this->db->query($query)->result_array();
    }
    public function hasil_kriteria()
    {
        $id_user = $this->session->userdata('id_user');
        $query = "SELECT tb_alternatif.*, tb_kriteria.*, tb_nilai_matrix.* 
        FROM tb_alternatif, tb_kriteria, tb_nilai_matrix
        WHERE tb_nilai_matrix.id_kriteria=tb_kriteria.id_kriteria 
        AND tb_alternatif.id_alternatif=tb_nilai_matrix.id_alternatif AND tb_alternatif.alternatif= $id_user
        ";
        return $this->db->query($query)->result_array();
    }
}

/* End of file M_perhitungan.php */
