<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_admin();
    }

    public function index()
    {
        //cek level
        /*  $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array(); */

        echo 'selamat datang admin';




        /*  $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['title'] = 'Dashboard Admin';


        $this->load->view('admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer'); */
    }
}
