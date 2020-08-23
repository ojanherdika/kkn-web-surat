<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
    }
    public function index()
    {
        if (isset($_SESSION['dataN1'])) {
            echo 'session ada';
            die();
        }
        $data['title'] = 'WEB Persuratan Desa Cinunuk';
        $data['user'] = $this->db->get_where('user', ['no_nik' =>
        $this->session->userdata('no_nik')])->row_array();
        $data["surat_n1_n6"] = $this->M_surat_n1_n6->getAll()->result();
        $this->load->view('layout/userHeader', $data);
        $this->load->view('user/index', $data);
        $this->load->view('layout/userFooter');
        // $this->load->view('user/index', $data);
    }

    public function profil()
    {
        $data['title'] = 'WEB Persuratan Desa Cinunuk | Ubah Profil';
        $this->load->view('layout/userHeader', $data);
        $this->load->view('user/changeprofil', $data);
        $this->load->view('layout/userFooter');
    }

    public function p_n1()
    {
        $data['title'] = 'WEB Persuratan Desa Cinunuk | N1';
        $data['user'] = $this->db->get_where('user', ['no_nik' =>
        $this->session->userdata('no_nik')])->row_array();
        $this->load->view('layout/userHeader', $data);
        $this->load->view('user/n1', $data);
        $this->load->view('layout/userFooter');
    }
    public function p_n4()
    {
        $data['title'] = 'WEB Persuratan Desa Cinunuk | N4';
        $this->load->view('layout/userHeader', $data);
        $this->load->view('user/n4', $data);
        $this->load->view('layout/userFooter');
    }
    public function p_n5()
    {
        $data['title'] = 'WEB Persuratan Desa Cinunuk | N5';
        $this->load->view('layout/userHeader', $data);
        $this->load->view('user/n5', $data);
        $this->load->view('layout/userFooter');
    }
}
