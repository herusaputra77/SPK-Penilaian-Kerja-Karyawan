<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_kriteria extends CI_Model
{

    public function getMax($table = null, $field = null)
    {
        $this->db->select_max($field);
        return $this->db->get($table)->row_array()[$field];
    }
    public function insert_kriteria($data)
    {
        $this->db->insert('tb_kriteria', $data);
    }
    public function get_kriteria()
    {
        return $this->db->get('tb_kriteria')->result_array();
    }
    public function id_kriteria($id)
    {
        $result = $this->db->get_where('tb_kriteria', ['id_kriteria' => $id])->row_array();
        return $result;
    }
    function get_tabel()
    {
        $query = $this->db->query("SELECT * FROM tb_kriteria");
        return $query->num_rows();
    }
    public function count_kriteria()
    {
        $query = "SELECT COUNT(nm_kriteria) as kriteria  FROM tb_kriteria";
        return $this->db->query($query)->row_array();
    }
}

/* End of file M_kriteria.php */
