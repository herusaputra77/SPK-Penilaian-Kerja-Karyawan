<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    function user()
    {
    }
    public function user_karyawan()
    {
        $query = "SELECT * FROM tb_user WHERE id_role = 3";
        return $this->db->query($query)->result_array();
    }

    public function laporan()
    {
        $query = "SELECT tb_user.nip, tb_nilai_preferensi.nilai_preferensi, tb_user.nm_user, tb_user.id_role, tb_alternatif.keterangan, tb_alternatif.alternatif, FIND_IN_SET(nilai_preferensi, (SELECT GROUP_CONCAT(nilai_preferensi ORDER BY nilai_preferensi DESC) FROM tb_nilai_preferensi)) as rank FROM tb_nilai_preferensi, tb_alternatif, tb_user 
        WHERE tb_nilai_preferensi.id_alternatif=tb_alternatif.id_alternatif AND tb_alternatif.alternatif=tb_user.id_user";
        return $this->db->query($query)->result_array();
    }
}

/* End of file M_user.php */
