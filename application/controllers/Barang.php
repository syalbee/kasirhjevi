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
            'kodebarang' => $this->_generateKodebarang(),
            'supplier' => $this->_getSupplier(),
            'satuan' =>  $this->_getSatuan(),
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/tambahbarang', $data);
    }

    public function listbarang()
    {

        $data = [
            'title' => "List Barang",
            'toko' => "Toko Hj Evi",
            'nama' => $this->session->userdata('nama'),
            'supplier' => $this->_getSupplier(),
            'satuan' =>  $this->_getSatuan(),
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/listbarang', $data);
    }

    public function add()
    {
        $data = array(
            'kode_supplier' => $this->input->post('BRGSupplier'),
            'barcode' => $this->input->post('BRGBarcode'),
            'nama' => $this->input->post('BRGNama'),
            'satuan' => $this->input->post('BRGSatuan'),
            'qty' => $this->input->post('BRGQty'),
            'hrg_modal' => $this->input->post('BRGHbeli'),
            'hrg_jual' => $this->input->post('BRGHjual'),
            'active' => '1'
        );

        if ($this->barang_model->create($data)) {
            echo json_encode('sukses');
        }
    }

    public function read()
    {
        header('Content-type: application/json');
        if ($this->barang_model->read()->num_rows() > 0) {
            foreach ($this->barang_model->read()->result() as $barang) {
                $data[] = array(
                    'barcode' => $barang->barcode,
                    'supplier' => $barang->supplier,
                    'nama' => $barang->nama,
                    'satuan' => $barang->satuan,
                    'qty' => $barang->qty,
                    'Hjual' => $barang->hrg_jual,
                    'Hmodal' => $barang->hrg_modal,
                    'action' => '<button class="btn btn-sm btn-warning" onclick="edit(' . $barang->id . ')"><i class="fas fa-edit"></i></button> <button class="btn btn-sm btn-danger" onclick="remove(' . $barang->id . ')"><i class="fas fa-trash"></i></button>'
                );
            }
        } else {
            $data = array();
        }
        $pelanggan = array(
            'data' => $data
        );
        echo json_encode($pelanggan);
    }

    public function edit()
    {
        $id = $this->input->post('id');

        $data = array(
            'kode_supplier' => $this->input->post('EtBRGSupplier'),
            'barcode' => $this->input->post('EtBarcode'),
            'nama' => $this->input->post('EtNama'),
            'satuan' => $this->input->post('EtBRGSatuan'),
            'hrg_modal' => $this->input->post('EtHbeli'),
            'hrg_jual' => $this->input->post('EtHjual')
        );

        if ($this->barang_model->update($id, $data)) {
            echo json_encode('sukses');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $data = array(
            'active' => '0',
        );
        if ($this->barang_model->update($id, $data)) {
            echo json_encode('sukses');
        }
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
    public function get_barang()
    {
        $id = $this->input->post('id');
        $barang = $this->barang_model->getBarang($id);
        if ($barang->row()) {
            echo json_encode($barang->row());
        }
    }

    private function _generateKodebarang()
    {

        $this->db->select('RIGHT(kode,4) as kode', false);
        $this->db->order_by("kode", "DESC");
        $this->db->limit(1);
        $query = $this->db->get('barang');

        if ($query->num_rows() <> 0) {
            $data       = $query->row();
            $kodebarang  = intval($data->kode) + 1;
        } else {
            $kodebarang  = 1;
        }

        $lastKode = str_pad($kodebarang, 4, "0", STR_PAD_LEFT);
        $tahun    = date("Y");
        $PLG      = "PLG";

        $newKode  = $PLG . $tahun . $lastKode;

        return $newKode;
    }

    private function _getSupplier()
    {
        $query = $this->db->get_where('supplier', ['active' => '1'])->result();
        return $query;
    }

    private function _getSatuan()
    {
        $query = $this->db->get('p_barang')->result();
        return $query;
    }
}
