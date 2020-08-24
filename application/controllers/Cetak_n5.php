<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_n5 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
    }
    function index($id_surat_n5){
        $where = array('id_surat_n5' => $id_surat_n5);
        $data['surat_n5'] = $this->M_surat_n1_n5->get_data($where,'surat_n5')->result();
        $this->load->view('user/cetakSurat_n5',$data);
    }

}
