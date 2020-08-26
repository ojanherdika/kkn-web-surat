<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_warga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
        $this->load->helper('date');
    }

    public function add()
    {
        $no_kk = $this->input->post('no_kk');
        $no_nik = $this->input->post('no_nik');
        $password = "Changeme1";
        $nama = $this->input->post('nama');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $alamat = $this->input->post('alamat');

        $data = [
            'no_kk' => $no_kk,
            'no_nik' => $no_nik,
            'password' => $password,
            'nama' => $nama,
            'rt' => $rt,
            'rw' => $rw,
            'alamat' => $alamat
        ];
        $this->db->insert('user', $data);

        redirect('admin');
    }
    public function update_n1_terima($id_surat_n1)
    {
        $where = array(
            'id_surat_n1' => $id_surat_n1
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
        redirect('admin');
    }
    public function update_n6_terima($id_surat_n6){
        $where = array(
            'id_surat_n6' => $id_surat_n6
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n6');
        redirect('admin');
    }
    public function update_n6_tolak($id_surat_n6){
        $where = array(
            'id_surat_n6' => $id_surat_n6
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n6');
        redirect('admin');
    }
    public function update_n1_tolak($id_surat_n1)
    {
        $where = array(
            'id_surat_n1' => $id_surat_n1
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
        redirect('admin');
    }
    public function update_n1_batal($id_surat_n1)
    {
        $where = array(
            'id_surat_n1' => $id_surat_n1
        );
        $data = array(
            'status_surat' => "Dibatalkan",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
        redirect('user');
    }
}
