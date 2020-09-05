<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('User_m');
        $this->load->model('Lokasi_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['lokasi'] = $this->Lokasi_m->getAll();

        $data['title'] = 'All Location';
        $this->load->view('user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', [
            'id_user' => $this->session->userdata('id_user')
        ])->row_array();

        $data['title'] = 'Home';
        $this->load->view('user/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('user/footer');
    }

    public function editprofile()
    {
        $data['user'] = $this->db->get_where('user', [
            'id_user' => $this->session->userdata('id_user')
        ])->row_array();


        $data['title'] = 'Home';
        $this->load->view('user/header', $data);
        $this->load->view('user/editprofile', $data);
        $this->load->view('user/footer');
    }

    public function tes()
    {

        $userid = $this->session->userdata('id_user');
        $this->load->model('User_m');
        $data['user'] = $this->User_m->getById($userid);

        $data['title'] = 'Home';
        $this->load->view('user/header', $data);
        $this->load->view('user/index');
        $this->load->view('user/footer');
    }



    public function lokasi()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->model('Lokasi_m');
        $userid = $this->session->userdata('id_user');
        $data['lokasi'] = $this->Lokasi_m->getByUser($userid);

        $data['title'] = 'Home';
        $this->load->view('user/header', $data);
        $this->load->view('user/lokasi', $data);
        $this->load->view('user/footer');
    }

    public function editlokasi($idlokasi)
    {
        $this->load->model('Lokasi_m');

        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['lokasi'] = $this->Lokasi_m->getById($idlokasi);

        $data['title'] = 'Home';
        $this->load->view('user/header', $data);
        $this->load->view('user/editlokasi', $data);
        $this->load->view('user/footer');
    }

    public function tambahlokasi()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->form_validation->set_rules('nama_lok', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat_lok', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Home';
            $this->load->view('user/header', $data);
            $this->load->view('user/inputlokasi');
            $this->load->view('user/footer');
        } else {
            $this->Lokasi_m->inputlok();
            redirect('user/lokasi');
        }
    }

    public function tambahreklame($idlokasi)
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->form_validation->set_rules('nama_iklan', 'Nama Iklan', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['lokasi'] = $this->Lokasi_m->getById($idlokasi);
            $data['title'] = 'Home';
            $this->load->view('user/header', $data);
            $this->load->view('user/inputreklame', $data);
            $this->load->view('user/footer');
        } else {
            $this->Lokasi_m->inputreklame($idlokasi);
            redirect('user/reklame');
        }
    }

    public function reklame()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array(); //data header
        $userid = $this->session->userdata('id_user');
        $data['reklame'] = $this->Lokasi_m->getReklameUser($userid);

        $data['title'] = 'Home';
        $this->load->view('user/header', $data);
        $this->load->view('user/reklame', $data);
        $this->load->view('user/footer');
    }
}
