<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_surat_n1_n6");
        $this->load->model('M_surat_n6');
        $this->load->model('Usermodel');
    }
    public function index()
    {
        $data['title'] = 'Admin Pages';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['surat_n1'] = $this->M_surat_n1_n6->getAll()->result_array();
        $data['surat_n6'] = $this->M_surat_n6->getN6()->result_array();

        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('layout/adminFooter');
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
        $this->load->view('layout/adminFooter');
    }

    public function profile()
    {

        $data['title'] = 'Data Warga';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['user'] = $this->M_surat_n6->getUser()->result_array();

        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/profilPage', $data);
        $this->load->view('layout/adminFooter');
    }

    public function detail_warga($id)
    {
        $data['title'] = 'Detail Warga';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $where = array('id' => $id);
        $data['user'] = $this->Usermodel->get_data($where,'user')->result();

        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/detail_warga', $data);
        $this->load->view('layout/adminFooter');
    }

    public function edit_detail_warga($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->Usermodel->get_data_($where,'user')->result();
        $data['title'] = 'Edit Detail Warga';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/edit_detail_warga', $data);
        $this->load->view('layout/adminFooter');
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
        $this->load->view('layout/adminFooter');
    }

    public function data_admin()
    {
        $data['title'] = 'Data Admin';
        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/data_admin', $data);
        $this->load->view('layout/adminFooter');
    }

    public function detail_admin()
    {
        $data['title'] = 'Detail Data Admin';
        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/detail_admin', $data);
        $this->load->view('layout/adminFooter');
    }

    public function menu()
    {
        $data['title'] = 'Data Rekap';
        $data['surat_n1'] = $this->M_surat_n1_n6->getAll()->result_array();
        $data['surat_n6'] = $this->M_surat_n6->getN6()->result_array();
        $this->load->view('layout/adminHeader', $data);
        $this->load->view('layout/adminSidebar', $data);
        $this->load->view('layout/adminTopbar', $data);
        $this->load->view('admin/menu', $data);
        $this->load->view('layout/adminFooter');
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
        $this->load->view('layout/adminFooter');
    }

    public function hapus_warga($id)
    {
        $where = array('id' => $id);
        $this->Usermodel->hapus_warga($where, 'user');
        redirect('admin/profile');
    }
}
