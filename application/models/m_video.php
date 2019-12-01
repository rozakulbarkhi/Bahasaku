<?php
class m_video extends CI_Model
{
    // input 
    public function insert($data)
    {
        return $this->db->insert('video', $data);
    }

    // tampil
    public function ambil_data()
    {
        return $this->db->get('video')->result_array();
    }

    // edit
    function edit_data($id)
    {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('id', $id);

        return $this->db->get()->result_array();
    }

    // update
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
