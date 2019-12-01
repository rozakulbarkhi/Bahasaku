<?php
class m_SD extends CI_Model
{
    // SD
    public function satu()
    {
        return $this->db->get_where('video', ['kelas' => 1])->result_array();
    }

    public function dua()
    {
        return $this->db->get_where('video', ['kelas' => 2])->result_array();
    }

    public function tiga()
    {
        return $this->db->get_where('video', ['kelas' => 3])->result_array();
    }

    public function empat()
    {
        return $this->db->get_where('video', ['kelas' => 4])->result_array();
    }

    public function lima()
    {
        return $this->db->get_where('video', ['kelas' => 5])->result_array();
    }

    public function enam()
    {
        return $this->db->get_where('video', ['kelas' => 6])->result_array();
    }
}
