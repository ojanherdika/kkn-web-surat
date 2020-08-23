<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_n6 extends CI_Controller {
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
        $kode_pos=$this->input->post('kecamatan');
        $alamat=$this->input->post('alamat');
        $status_nikah=$this->input->post('status_nikah');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $nama_mati=$this->input->post('nama_mati');
        $binti_mati=$this->input->post('binti_mati');
        $nik_mati=$this->input->post('nik_mati');
        $tempat_lahir_mati=$this->input->post('tempat_lahir_mati');
        $tanggal_lahir_mati=$this->input->post('tanggal_lahir_mati');
        $kewarganegaraan_mati=$this->input->post('kewarganegaraan_mati');
        $agama_mati=$this->input->post('agama_mati');
        $pekerjaan_mati=$this->input->post('pekerjaan_mati');
        $alamat_mati=$this->input->post('alamat_mati');
        $provinsi_mati=$this->input->post('provinsi_mati');
        $kab_kota_mati=$this->input->post('kab_kota_mati');
        $kecamatan_mati=$this->input->post('kecamatan_mati');
        $desa_mati=$this->input->post('desa_mati');
        $rt_mati=$this->input->post('rt_mati');
        $rw_mati=$this->input->post('rw_mati');
        $kode_pos_mati=$this->input->post('kode_pos_mati');
        $tgl_meninggal=$this->input->post('tgl_meninggal');
        $tempat_meninggal=$this->input->post('tempat_meninggal');
        $nama_surat="Surat N6";
        $status_surat="Pending";
        $today=mdate('%Y-%m-%d', now());
        
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
            'kode_pos' => $kecamatan,
            'alamat' => $alamat,
            'status_nikah' => $status_nikah,
            'jenis_kelamin' => $jenis_kelamin,
            'nama_mati' => $nama_mati,
            'binti_mati' => $binti_mati,
            'nik_mati' => $nik_mati,
            'tempat_lahir_mati' => $tempat_lahir_mati,
            'tanggal_lahir_mati' => $tanggal_lahir_mati,
            'kewarganegaraan_mati' => $kewarganegaraan_mati,
            'agama_mati' => $agama_mati,
            'pekerjaan_mati' => $pekerjaan_mati,
            'alamat_mati' => $alamat_mati,
            'provinsi_mati' => $provinsi_mati,
            'kab_kota_mati' => $kab_kota_mati,
            'kecamatan_mati' => $kecamatan_mati,
            'desa_mati' => $desa_mati,
            'rt_mati' => $rt_mati,
            'rw_mati' => $rw_mati,
            'kode_pos_mati' => $kode_pos_mati,
            'tgl_meninggal' => $tgl_meninggal,
            'tempat_meninggal' => $tempat_meninggal,
            'jenis_surat'=>$nama_surat,
            'tgl_ajukan_surat'=>$today,
            'status_surat'=>$status_surat
        );

        $this->M_surat_n1_n6->save($data,'surat_n6');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('user'); 
		
    }
    function hapus($id_surat_n1){
		$where = array('id_surat_n1' => $id_surat_n1);
		$this->M_surat_n1_n6->hapus_data($where,'surat_n1_n6');
		redirect('user/index');
	}

	function edit_form($no_surat){
		$where = array('no_surat' => $no_surat);
        $data['surat_n1_n6'] = $this->surat_model->edit_data($where,'surat_n1_n6')->result();
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
