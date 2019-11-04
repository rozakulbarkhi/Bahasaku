<?php

class m_data extends CI_Model
{
    function ambil_data_user()
    {

        return $this->db->get('user');
    }

    function ambil_data_materi()
    {

        return $this->db->get('materi');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function hapus_data($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }
}
