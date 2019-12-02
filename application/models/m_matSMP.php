<?php
class m_matSMP extends CI_Model
{
    public function tujuh()
    {
        return $this->db->get_where('materi', ['kelas' => 7])->result_array();
    }

    public function delapan()
    {
        return $this->db->get_where('materi', ['kelas' => 8])->result_array();
    }

    public function sembilan()
    {
        return $this->db->get_where('materi', ['kelas' => 9])->result_array();
    }
}
