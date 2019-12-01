<?php
class m_SMA extends CI_Model
{

    // SMA
    public function sepuluh()
    {
        return $this->db->get_where('video', ['kelas' => 10])->result_array();
    }

    public function sebelas()
    {
        return $this->db->get_where('video', ['kelas' => 11])->result_array();
    }
    public function duabelas()
    {
        return $this->db->get_where('video', ['kelas' => 12])->result_array();
    }
}
