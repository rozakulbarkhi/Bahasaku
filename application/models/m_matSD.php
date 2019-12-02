<?php

class m_matSD extends CI_Model
{
    public function satu()
    {
        return $this->db->get_where('materi', ['kelas' => 1])->result_array();
    }

    public function dua()
    {
        return $this->db->get_where('materi', ['kelas' => 2])->result_array();
    }

    public function tiga()
    {
        return $this->db->get_where('materi', ['kelas' => 3])->result_array();
    }

    public function empat()
    {
        return $this->db->get_where('materi', ['kelas' => 4])->result_array();
    }

    public function lima()
    {
        return $this->db->get_where('materi', ['kelas' => 5])->result_array();
    }

    public function enam()
    {
        return $this->db->get_where('materi', ['kelas' => 6])->result_array();
    }
}
