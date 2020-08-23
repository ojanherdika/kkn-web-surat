<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_warga extends CI_Controller
{

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
    public function update()
    {
        $status = $this->input->post('status_surat');
        $data['status_surat'] = $status;
        $this->db->replace('surat_n1', $data);
        redirect('admin');
    }
}
