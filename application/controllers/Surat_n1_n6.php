<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_n1_n6 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
        $this->load->helper('date');
    }
    public function index()
    {
        $data["surat_n1_n6"] = $this->M_surat_n1_n6->getAll()->result();
        $this->load->view("user", $data);
    }
    public function add()
    {
        $nama = $this->input->post('nama');
        $no_nik = $this->input->post('no_nik');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $binti = $this->input->post('binti');
        $agama = $this->input->post('agama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $pekerjaan = $this->input->post('pekerjaan');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $provinsi = $this->input->post('provinsi');
        $kab_kota = $this->input->post('kab_kota');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $kode_pos = $this->input->post('kode_pos');
        $alamat = $this->input->post('alamat');
        $status_nikah = $this->input->post('status_nikah');
        $nama_suami_istri = $this->input->post('nama_suami_istri');
        $nama_ayah = $this->input->post('nama_ayah');
        $binti_ayah = $this->input->post('binti_ayah');
        $status_hidup_ayah = $this->input->post('status_hidup_ayah');
        $nik_ayah = $this->input->post('nik_ayah');
        $agama_ayah = $this->input->post('agama_ayah');
        $tempat_lahir_ayah = $this->input->post('tempat_lahir_ayah');
        $tanggal_lahir_ayah = $this->input->post('tanggal_lahir_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $kewarganegaraan_ayah = $this->input->post('kewarganegaraan_ayah');
        $alamat_ayah = $this->input->post('alamat_ayah');
        $provinsi_ayah = $this->input->post('provinsi_ayah');
        $kab_kota_ayah = $this->input->post('kab_kota_ayah');
        $rt_ayah = $this->input->post('rt_ayah');
        $rw_ayah = $this->input->post('rw_ayah');
        $kode_pos_ayah = $this->input->post('kode_pos_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $binti_ibu = $this->input->post('binti_ibu');
        $status_hidup_ibu = $this->input->post('status_hidup_ibu');
        $nik_ibu = $this->input->post('nik_ibu');
        $agama_ibu = $this->input->post('agama_ibu');
        $tempat_lahir_ibu = $this->input->post('tempat_lahir_ibu');
        $tanggal_lahir_ibu = $this->input->post('tanggal_lahir_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $kewarganegaraan_ibu = $this->input->post('kewarganegaraan_ibu');
        $alamat_ibu = $this->input->post('alamat_ibu');
        $provinsi_ibu = $this->input->post('provinsi_ibu');
        $kab_kota_ibu = $this->input->post('kab_kota_ibu');
        $kecamatan_ibu = $this->input->post('kecamatan_ibu');
        $desa_ibu = $this->input->post('desa_ibu');
        $desa_ayah = $this->input->post('desa_ayah');
        $rt_ibu = $this->input->post('rt_ibu');
        $rw_ibu = $this->input->post('rw_ibu');
        $kode_pos_ibu = $this->input->post('kode_pos_ibu');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $nama_surat = "Surat N1";
        $status_surat = "Pending";
        $today = mdate('%Y-%m-%d', now());


        $data = array(
            'nama' => $nama,
            'no_nik' => $no_nik,
            'tempat_lahir' => $tempat_lahir,
            'binti' => $binti,
            'agama' => $agama,
            'tanggal_lahir' => $tanggal_lahir,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $kewarganegaraan,
            'provinsi' => $provinsi,
            'kab_kota' => $kab_kota,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'rt' => $rt,
            'rw' => $rw,
            'kode_pos' => $kode_pos,
            'alamat' => $alamat,
            'status_nikah' => $status_nikah,
            'nama_suami_istri' => $nama_suami_istri,
            'nama_ayah' => $nama_ayah,
            'binti_ayah' => $binti_ayah,
            'status_hidup_ayah' => $status_hidup_ayah,
            'nik_ayah' => $nik_ayah,
            'agama_ayah' => $agama_ayah,
            'tempat_lahir_ayah' => $tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $tanggal_lahir_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'kewarganegaraan_ayah' => $kewarganegaraan_ayah,
            'alamat_ayah' => $alamat_ayah,
            'provinsi_ayah' => $provinsi_ayah,
            'kab_kota_ayah' => $kab_kota_ayah,
            'rt_ayah' => $rt_ayah,
            'rw_ayah' => $rw_ayah,
            'kode_pos_ayah' => $kode_pos_ayah,
            'nama_ibu' => $nama_ibu,
            'binti_ibu' => $binti_ibu,
            'status_hidup_ibu' => $status_hidup_ibu,
            'nik_ibu' => $nik_ibu,
            'agama_ibu' => $agama_ibu,
            'tempat_lahir_ibu' => $tempat_lahir_ibu,
            'tanggal_lahir_ibu' => $tanggal_lahir_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'kewarganegaraan_ibu' => $kewarganegaraan_ibu,
            'alamat_ibu' => $alamat_ibu,
            'provinsi_ibu' => $provinsi_ibu,
            'kab_kota_ibu' => $kab_kota_ibu,
            'kecamatan_ibu' => $kecamatan_ibu,
            'desa_ibu' => $desa_ibu,
            'desa_ayah' => $desa_ayah,
            'rt_ibu' => $rt_ibu,
            'rw_ibu' => $rw_ibu,
            'kode_pos_ibu' => $kode_pos_ibu,
            'jenis_kelamin' => $jenis_kelamin,
            'jenis_surat' => $nama_surat,
            'tgl_ajukan_surat' => $today,
            'status_surat' => $status_surat
        );

        $this->M_surat_n1_n6->save($data, 'surat_n1');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('user/index');
    }
    function hapus($id_surat_n1)
    {
        $where = array('id_surat_n1' => $id_surat_n1);
        $this->M_surat_n1_n6->hapus_data($where, 'surat_n1');
        redirect('user/index');
    }
    function hapusn6($id_surat_n6)
    {
        $where = array('id_surat_n6' => $id_surat_n6);
        $this->M_surat_n1_n6->hapus_data($where, 'surat_n6');
        redirect('user/index');
    }

    function edit_form($id_surat_n1)
    {
        $where = array('id_surat_n1' => $id_surat_n1);
        $data['surat_n1'] = $this->surat_model->edit_data($where, 'surat_n1')->result();
        $this->load->view('admin/edit_form_suratKP', $data);
    }

    function update()
    {
        $no_surat = $this->input->post('no_surat');
        $tanggal_surat = $this->input->post('tanggal_surat');
        $nama_intansi = $this->input->post('nama_intansi');
        $alamat_intansi = $this->input->post('alamat_intansi');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nim = $this->input->post('nim');
        $jurusan = $this->input->post('jurusan');
        $semester = $this->input->post('semester');
        $lamanya = $this->input->post('lamanya');
        $mulai_tgl = $this->input->post('mulai_tgl');
        $akhir_tgl = $this->input->post('akhir_tgl');
        $data = array(
            'tanggal_surat' => $tanggal_surat,
            'nama_intansi' => $nama_intansi,
            'alamat_intansi' => $alamat_intansi,
            'nama_lengkap' => $nama_lengkap,
            'nim' => $nim,
            'jurusan' => $jurusan,
            'semester' => $semester,
            'lamanya' => $lamanya,
            'mulai_tgl' => $mulai_tgl,
            'akhir_tgl' => $akhir_tgl,
        );
        $where = array(
            'no_surat' => $no_surat
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
        redirect('admin/SuratKp/index');
    }
}
