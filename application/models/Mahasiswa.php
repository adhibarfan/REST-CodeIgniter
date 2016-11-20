<?php

/**
 * Created by PhpStorm.
 * User: adhibarfan
 * Date: 11/20/16
 * Time: 9:03 PM
 */
class Mahasiswa extends CI_Model
{
    public function getMahasiswa()
    {
        return $this->db->get('tb_mahasiswa')->result();
    }

    public function saveMahasiswa($mahasiswa)
    {
        $this->db->insert('tb_mahasiswa', $mahasiswa);
    }

    public function updateMahasiswa($npm, $mahasiswa)
    {
        $this->db->where('npm', $npm);
        $this->db->update('tb_mahasiswa', $mahasiswa);
    }

    public function deleteMahasiswa($npm)
    {
        $this->db->where('npm', $npm);
        $this->db->delete('tb_mahasiswa');
    }
}