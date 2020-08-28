<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    function query($query)
    {
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
    public function getAll()
    {
        return $this->db->get('user');
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function get_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function get_data_($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function hapus_warga($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function update_warga($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
