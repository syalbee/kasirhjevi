<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'login') {
            redirect('/');
        }
        $this->load->model('barang_model');
    }

    public function tambahbarang()
    {
        $data = [
            'title' => "Tambah Barang",
            'toko' => "Toko Hj Evi",
            'nama' => $this->session->userdata('nama'),
            'kodebarang' => $this->_generateKodepelanggan()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/tambahbarang', $data);
    }

    public function pbarang()
    {
        $data = [
            'title' => "Pengaturang Barang",
            'toko' => "Toko Hj Evi",
            'nama' => $this->session->userdata('nama'),
            'listpbarang' => $this->db->get('p_barang')
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/pbarang', $data);
        $this->load->view('template/footer');
    }

    public function addqty()
    {
        $data = array(
            'j_qty' => $this->input->post('BRQtyadd'),
        );

        if ($this->db->insert('p_barang', $data)) {
            redirect('barang/pbarang');
        }
    }

    public function removeqty()
    {
        $id = $this->input->post('btnrqty');

        $this->db->where('id', $id);
        if ($this->db->delete('p_barang')) {
            redirect('barang/pbarang');
        }
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
        $tahun    = date("Y");
        $PLG      = "PLG";

        $newKode  = $PLG . $tahun . $lastKode;

        return $newKode;
    }
}
