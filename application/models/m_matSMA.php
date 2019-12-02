<?php
class m_matSMA extends CI_Model
{
    public function sepuluh()
    {
        return $this->db->get_where('materi', ['kelas' => 10])->result_array();
    }

    public function sebelas()
    {
        return $this->db->get_where('materi', ['kelas' => 11])->result_array();
    }
    public function duabelas()
    {
        return $this->db->get_where('materi', ['kelas' => 12])->result_array();
    }
}
