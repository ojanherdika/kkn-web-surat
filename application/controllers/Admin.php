<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_surat_n1_n6");
    }
    public function index()
    {
        $data['title'] = 'Admin Pages';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['surat_n1'] = $this->M_surat_n1_n6->getAll()->result_array();


        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('layout/adminFooter',);
    }

    public function detail_pengajuan_surat()
    {
        $data['title'] = 'Detail Pengajuan Surat';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/detail_surat', $data);
        $this->load->view('layout/adminFooter',);
    }

    public function profile()
    {

        $data['title'] = 'Data Warga';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['user'] = $this->db->query('SELECT * FROM user');

        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/profilPage', $data);
        $this->load->view('layout/adminFooter',);
    }

    public function detail_warga()
    {
        $data['title'] = 'Detail Warga';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/detail_warga', $data);
        $this->load->view('layout/adminFooter',);
    }
    public function tambah_warga()
    {
        $data['title'] = 'Tambah Warga';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/tambah_warga', $data);
        $this->load->view('layout/adminFooter',);
    }

    public function edit()
    {
        $data['title'] = 'Data Warga';
        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('layout/adminFooter',);
    }

    public function menu()
    {
        $data['title'] = 'Data Rekap';
        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/menu', $data);
        $this->load->view('layout/adminFooter',);
    }
    public function detail_menu()
    {
        $data['title'] = 'Detail Data Rekap';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/detail_menu', $data);
        $this->load->view('layout/adminFooter',);
    }
}
