<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'login') {
            redirect('/');
        }
        $this->load->model('pelanggan_model');
    }

    public function tambahpelanggan()
    {

        $data = [
            'title' => "Tambah Pelanggan",
            'toko' => "Toko Hj Evi",
            'nama' => $this->session->userdata('nama'),
            'kodeplg' => $this->_generateKodepelanggan()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/tambahpelanggan', $data);
        // $this->load->view('template/footer');
    }

    private function _generateKodepelanggan()
    {

        $this->db->select('RIGHT(kode,4) as kode', false);
        $this->db->order_by("kode", "DESC");
        $this->db->limit(1);
        $query = $this->db->get('pelanggan');

        if ($query->num_rows() <> 0) {
            
            $data       = $query->row();
            $kodepelanggan  = intval($data->kode) + 1;
        } else {
            $kodepelanggan  = 1;
        }

        $lastKode = str_pad($kodepelanggan, 4, "0", STR_PAD_LEFT);
        $tahun    = date("y");
        $PLG      = "PLG";

        $newKode  = $PLG . $tahun . $lastKode;

        return $newKode;
    }

    public function add()
    {
        $data = array(
            'kode' => $this->input->post('PLKode'),
            'nama' => $this->input->post('PLNama'),
            'notelp' => $this->input->post('PLNohp'),
            'alamat' => $this->input->post('PLAlamat'),
            'nik' => $this->input->post('PLNik'),
            'active' => '1',
            'point' => 0
        );

        if ($this->pelanggan_model->create($data)) {
            echo json_encode('sukses');
        }
    }


    public function read()
    {
        header('Content-type: application/json');
        $iterasi = 1;
        if ($this->pelanggan_model->read()->num_rows() > 0) {
            foreach ($this->pelanggan_model->read()->result() as $pelanggan) {
                if ($pelanggan->active != '0') {
                    $data[] = array(
                        'kode' => $pelanggan->kode,
                        'nama' => $pelanggan->nama,
                        'alamat' => $pelanggan->alamat,
                        'telepon' => $pelanggan->notelp,
                        'nik' => $pelanggan->nik,
                        'point' => $pelanggan->point,
                        'action' => '<button class="btn btn-sm btn-warning" onclick="edit(' . $pelanggan->id . ')"><i class="fas fa-edit"></i></button> <button class="btn btn-sm btn-danger" onclick="remove(' . $pelanggan->id . ')"><i class="fas fa-trash"></i></button>'
                    );
                }
            }
        } else {
            $data = array();
        }
        $pelanggan = array(
            'data' => $data
        );
        echo json_encode($pelanggan);
    }

    public function listpelanggan()
    {

        $data = [
            'title' => "List pelanggan",
            'toko' => "Toko Hj Evi",
            'nama' => $this->session->userdata('nama'),
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/listpelanggan', $data);
    }

    public function get_pelanggan()
    {
        $id = $this->input->post('id');
        $pelanggan = $this->pelanggan_model->getpelanggan($id);
        if ($pelanggan->row()) {
            echo json_encode($pelanggan->row());
        }
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'notelp' => $this->input->post('telepon'),
            'nik' => $this->input->post('nik')
        );

        if ($this->pelanggan_model->update($id, $data)) {
            echo json_encode('sukses');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $data = array(
            'active' => '0',
        );
        if ($this->pelanggan_model->update($id, $data)) {
            echo json_encode('sukses');
        }
    }
}
