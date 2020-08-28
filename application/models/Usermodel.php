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
    function cari($keyword)
    {
        $query = "SELECT * FROM user
                    WHERE 
                    rt LIKE '%$keyword%' OR
                    rw LIKE '%$keyword%' OR
                ";
        return $this->query($query);
    }
}
