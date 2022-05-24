<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_alternatif extends CI_Model
{

    public function get_alterByid($id)
    {
        $query = $this->db->query("SELECT tb_alternatif.*, tb_user.nm_user FROM tb_alternatif, tb_user 
        WHERE tb_alternatif.alternatif=tb_user.id_user
        AND tb_alternatif.id_alternatif='$id'")->row_array();
        return $query;
    }
    public function edit_nilai()
    {
        $id_alternatif = $this->input->post('id_alternatif');
        $id_kriteria1 = $this->input->post('id_kriteria1');
        $id_kriteria2 = $this->input->post('id_kriteria2');
        $id_kriteria3 = $this->input->post('id_kriteria3');
        $id_kriteria4 = $this->input->post('id_kriteria4');
        $id_kriteria5 = $this->input->post('id_kriteria5');
        $id_kriteria6 = $this->input->post('id_kriteria6');
        $id_kriteria7 = $this->input->post('id_kriteria7');


        // $nilaiC1 = $this->input->post('nilai_matrix1');
        // $this->db->set('nilai', $C1);
        // $this->db->where('id_alternatif', $id_alternatif);
        // $this->db->update('tb_nilai_matrix');

        $nilaiC1 = $this->input->post('nilai_matrix1');
        $C1 = "UPDATE tb_nilai_matrix SET nilai = $nilaiC1 WHERE id_kriteria = '$id_kriteria1' AND id_alternatif = '$id_alternatif'";
        $this->db->query($C1);

        $nilaiC2 = $this->input->post('nilai_matrix2');
        $C2 = "UPDATE tb_nilai_matrix SET nilai = $nilaiC2 WHERE id_kriteria = '$id_kriteria2' AND id_alternatif = '$id_alternatif'";
        $this->db->query($C2);

        $nilaiC3 = $this->input->post('nilai_matrix3');
        $C3 = "UPDATE tb_nilai_matrix SET nilai = $nilaiC3 WHERE id_kriteria = '$id_kriteria3' AND id_alternatif = '$id_alternatif'";
        $this->db->query($C3);

        $nilaiC4 = $this->input->post('nilai_matrix4');
        $C4 = "UPDATE tb_nilai_matrix SET nilai = $nilaiC4 WHERE id_kriteria = '$id_kriteria4' AND id_alternatif = '$id_alternatif'";
        $this->db->query($C4);

        $nilaiC5 = $this->input->post('nilai_matrix5');
        $C5 = "UPDATE tb_nilai_matrix SET nilai = $nilaiC5 WHERE id_kriteria = '$id_kriteria5' AND id_alternatif = '$id_alternatif'";
        $this->db->query($C5);

        $nilaiC6 = $this->input->post('nilai_matrix6');
        $C6 = "UPDATE tb_nilai_matrix SET nilai = $nilaiC6 WHERE id_kriteria = '$id_kriteria6' AND id_alternatif = '$id_alternatif'";
        $this->db->query($C6);

        $nilaiC7 = $this->input->post('nilai_matrix7');
        $C7 = "UPDATE tb_nilai_matrix SET nilai = $nilaiC7 WHERE id_kriteria = '$id_kriteria7' AND id_alternatif = '$id_alternatif'";
        $this->db->query($C7);
        // var_dump($C1);

        // $id_kriteria2 = $this->input->post('id_kriteria2');
        // $C2 = $this->input->post('nilai_matrix2');
        // $this->db->set('nilai', $C2);
        // $this->db->where('id_alternatif', $id_alternatif);
        // $this->db->where('id_kriteria', $id_kriteria2);
        // $this->db->update('tb_nilai_matrix');


    }
    public function hapus_alt($id)
    {
        if ($this->db->get_where('tb_alternatif', ['id_alternatif' => $id]) != null) {
            $this->db->delete('tb_alternatif', ['id_alternatif' => $id]);
            if ($this->db->get_where('tb_nilai_matrix', ['id_alternatif' => $id]) != null) {
                $this->db->delete('tb_nilai_matrix', ['id_alternatif' => $id]);
                if ($this->db->get_where('tb_nilai_matrix', ['id_alternatif' => $id]) != null) {
                    $this->db->delete('tb_perhitungan', ['id_alternatif' => $id]);
                    if ($this->db->get_where('tb_perhitungan', ['id_alternatif' => $id]) != null) {
                        $this->db->delete('tb_nilai_preferensi', ['id_alternatif' => $id]);
                    }
                }
            }
        }
        $query = "Delete tb_alternatif.*, tb_nilai_matrix.*, tb_perhitungan.* FROM tb_alternatif, tb_nilai_matrix, tb_perhitungan
        WHERE tb_alternatif.id_alternatif = '$id'";
        $this->db->query($query);
    }
    public function alternatif()
    {
        $query = "SELECT tb_alternatif.*, tb_user.nm_user FROM tb_user, tb_alternatif WHERE tb_user.id_user=tb_alternatif.alternatif";
        return $this->db->query($query)->result_array();
    }

    public function karyawan()
    {
        $query = "SELECT * FROM tb_user WHERE id_role=3";
        return $this->db->query($query)->result_array();
    }
    public function count_alternatif()
    {
        $query = "SELECT COUNT(alternatif) as alternatif  FROM tb_alternatif";
        return $this->db->query($query)->row_array();
    }
}

/* End of file M_alternatif.php */
