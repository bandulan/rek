<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_m extends CI_Model
{
    public function getAll()
    {

        $query = $this->db->get('lokasi')->result_array(); //select dari tabel warga
        return $query;
    }

    public function getByUser($userid)
    {

        $query = $this->db->get_where('lokasi', ['id_pemilik' => $userid])->result_array(); //select dari tabel warga
        return $query;
    }

    public function getById($idlokasi)
    {

        //$query = $this->db->select('*')->from('lokasi')->where(array('id_pemilik' => 1, 'id_lokasi' => $idlokasi))->get();
        //$userid = $this->session->userdata('id_user');
        $userid = $this->session->userdata('id_user');
        $query = $this->db->get_where('lokasi', [
            'id_lokasi' => $idlokasi,
            'id_pemilik' => $userid
        ])->row_array(); //select dari tabel warga

        if (count($query) > 0) {
            return $query;
        } else {
            redirect('user/lokasi');
        }
    }

    public function inputlok()
    {
        $userid = $this->session->userdata('id_user');
        $data = [
            "id_pemilik" => $userid,
            "nama_lok" => $this->input->post('nama_lok', true),
            "alamat_lok" => $this->input->post('alamat_lok', true),
            "lat" => $this->input->post('lat', true),
            "lng" => $this->input->post('lng', true)
        ];

        $this->db->insert('lokasi', $data); //insert to tabel persil
    }

    public function inputreklame($idlokasi)
    {
        $userid = $this->session->userdata('id_user');
        $data = [
            "id_lokasi" => $idlokasi,
            "id_penyewa" => $userid,
            "alamat" => $this->input->post('alamat_lok', true),
            "nama_iklan" => $this->input->post('nama_iklan', true),
            "start" => $this->input->post('start', true),
            "end" => $this->input->post('end', true)
        ];

        $this->db->insert('reklame', $data); //insert to tabel persil
    }

    public function getReklameUser($userid)
    {

        $query = $this->db->get_where('reklame', ['id_penyewa' => $userid])->result_array(); //select dari tabel warga
        return $query;
    }
}
