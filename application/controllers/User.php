<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'WEB Persuratan Desa Cinunuk';
        $data['user'] = $this->db->get_where('user', ['no_nik' =>
        $this->session->userdata('no_nik')])->row_array();

        $this->load->view('layout/userHeader', $data);
        $this->load->view('user/index', $data);
        $this->load->view('layout/userFooter');
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
