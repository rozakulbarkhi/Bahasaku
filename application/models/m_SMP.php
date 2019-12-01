<?php
class m_SMP extends CI_Model
{
    // SMP
    public function tujuh()
    {
        return $this->db->get_where('video', ['kelas' => 7])->result_array();
    }

    public function delapan()
    {
        return $this->db->get_where('video', ['kelas' => 8])->result_array();
    }

    public function sembilan()
    {
        return $this->db->get_where('video', ['kelas' => 9])->result_array();
    }
}
