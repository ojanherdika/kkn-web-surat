<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('user');
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
