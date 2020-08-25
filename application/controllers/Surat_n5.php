<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_n5 extends CI_Controller {
function __construct() {
    parent::__construct();
    $this->load->library('pdf');
    $this->load->model("M_surat_n1_n6");
    $this->load->helper('date');
}
public function index()
    {
        $data["surat_n1_n6"] = $this->M_surat_n1_n6->getAll()->result();
        $this->load->view("user",$data);   
    }
public function add(){
        $nama_ayah = $this->input->post('nama_ayah');
        $binti_ayah = $this->input->post('binti_ayah');
        $nik_ayah = $this->input->post('nik_ayah');
        $agama_ayah = $this->input->post('agama_ayah');
        $tempat_lahir_ayah = $this->input->post('tempat_lahir_ayah');
        $tanggal_lahir_ayah = $this->input->post('tanggal_lahir_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $kewarganegaraan_ayah = $this->input->post('kewarganegaraan_ayah');
        $kecamatan_ayah=$this->input->post('kecamatan_ayah');
        $alamat_ayah = $this->input->post('alamat_ayah');
        $provinsi_ayah = $this->input->post('provinsi_ayah');
        $kab_kota_ayah = $this->input->post('kab_kota_ayah');
        $rt_ayah = $this->input->post('rt_ayah');
        $rw_ayah = $this->input->post('rw_ayah');
        $kode_pos_ayah = $this->input->post('kode_pos_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $binti_ibu = $this->input->post('binti_ibu');
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
        $nama = $this->input->post('nama');
		$no_nik = $this->input->post('no_nik');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $binti = $this->input->post('binti');
        $agama=$this->input->post('agama');
        $tempat_lahir=$this->input->post('tempat_lahir');
        $tanggal_lahir=$this->input->post('tanggal_lahir');
        $pekerjaan=$this->input->post('pekerjaan');
        $kewarganegaraan=$this->input->post('kewarganegaraan');
        $provinsi=$this->input->post('provinsi');
        $kab_kota=$this->input->post('kab_kota');
        $kecamatan=$this->input->post('kecamatan');
        $desa=$this->input->post('desa');
        $rt=$this->input->post('rt');
        $rw=$this->input->post('rw');
        $kode_pos=$this->input->post('kode_pos');
        $alamat=$this->input->post('alamat');
        $nama_calon=$this->input->post('nama_calon');
        $binti_calon=$this->input->post('binti_calon');
        $nik_calon=$this->input->post('nik_calon');
        $tempat_lahir_calon=$this->input->post('tempat_lahir_calon');
        $tanggal_lahir_calon=$this->input->post('tanggal_lahir_calon');
        $kewarganegaraan_calon=$this->input->post('kewarganegaraan_calon');
        $agama_calon=$this->input->post('agama_calon');
        $pekerjaan_calon=$this->input->post('pekerjaan_calon');
        $alamat_calon=$this->input->post('alamat_calon');
        $provinsi_calon=$this->input->post('provinsi_calon');
        $kab_kota_calon=$this->input->post('kab_kota_calon');
        $kecamatan_calon=$this->input->post('kecamatan_calon');
        $desa_calon=$this->input->post('desa_calon');
        $rt_calon=$this->input->post('rt_calon');
        $rw_calon=$this->input->post('rw_calon');
        $kode_pos_calon=$this->input->post('kode_pos_calon');
        $nama_surat="Surat N5";
        $status_surat="Pending";
        $today=mdate('%Y-%m-%d', now());
        
		$data = array(
            'nama_ayah' => $nama_ayah,
            'binti_ayah' => $binti_ayah,
            'nik_ayah' => $nik_ayah,
            'agama_ayah' => $agama_ayah,
            'tempat_lahir_ayah' => $tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $tanggal_lahir_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'kewarganegaraan_ayah' => $kewarganegaraan_ayah,
            'alamat_ayah' => $alamat_ayah,
            'desa_ayah'=>$desa_ayah,
            'provinsi_ayah' => $provinsi_ayah,
            'kab_kota_ayah' => $kab_kota_ayah,
            'kecamatan_ayah' => $kecamatan_ayah,
            'rt_ayah' => $rt_ayah,
            'rw_ayah' => $rw_ayah,
            'kode_pos_ayah' => $kode_pos_ayah,
            'nama_ibu' => $nama_ibu,
            'binti_ibu' => $binti_ibu,
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
            'rt_ibu' => $rt_ibu,
            'rw_ibu' => $rw_ibu,
            'kode_pos_ibu' => $kode_pos_ibu,
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
            'nama_calon' => $nama_calon,
            'binti_calon' => $binti_calon,
            'nik_calon' => $nik_calon,
            'tempat_lahir_calon' => $tempat_lahir_calon,
            'tanggal_lahir_calon' => $tanggal_lahir_calon,
            'kewarganegaraan_calon' => $kewarganegaraan_calon,
            'agama_calon' => $agama_calon,
            'pekerjaan_calon' => $pekerjaan_calon,
            'alamat_calon' => $alamat_calon,
            'provinsi_calon' => $provinsi_calon,
            'kab_kota_calon' => $kab_kota_calon,
            'kecamatan_calon' => $kecamatan_calon,
            'desa_calon' => $desa_calon,
            'rt_calon' => $rt_calon,
            'rw_calon' => $rw_calon,
            'kode_pos_calon' => $kode_pos_calon,
            'jenis_surat'=>$nama_surat,
            'tgl_ajukan_surat'=>$today,
            'status_surat'=>$status_surat
        );
        $this->M_surat_n1_n6->save($data,'surat_n5');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('user'); 
		
    }
    function hapus($id_surat_n5){
		$where = array('id_surat_n5' => $id_surat_n5);
		$this->M_surat_n1_n6->hapus_data($where,'surat_n1_n6');
		redirect('user/index');
	}

	function edit_form($id_surat_n5){
		$where = array('id_surat_n5' => $id_surat_n5);
        $data['surat_n5'] = $this->surat_model->edit_data($where,'surat_n5')->result();
		$this->load->view('admin/edit_form_suratKP',$data);
    }

    function update(){
        $no_surat = $this->input->post('no_surat');
		$tanggal_surat = $this->input->post('tanggal_surat');
        $nama_intansi = $this->input->post('nama_intansi');
        $alamat_intansi = $this->input->post('alamat_intansi');
        $nama_lengkap=$this->input->post('nama_lengkap');
        $nim=$this->input->post('nim');
        $jurusan=$this->input->post('jurusan');
        $semester=$this->input->post('semester');
        $lamanya=$this->input->post('lamanya');
        $mulai_tgl=$this->input->post('mulai_tgl');
        $akhir_tgl=$this->input->post('akhir_tgl');
		$data = array(
			'tanggal_surat' => $tanggal_surat,
            'nama_intansi' => $nama_intansi,
            'alamat_intansi'=>$alamat_intansi,
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
        $this->surat_model->update_data($where,$data,'surat_n1_n6');
        redirect('admin/SuratKp/index');
    }
}
