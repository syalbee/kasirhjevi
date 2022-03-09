<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'login') {
            redirect('/');
        }
        $this->load->model('supplier_model');
    }

    public function tambahsupplier()
    {

        $data = [
            'title' => "Tambah Supplier",
            'toko' => "Toko Hj Evi",
            'nama' => $this->session->userdata('nama'),
            'kodesup' => $this->_generateKodesupplier()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/tambahsupplier', $data);
        // $this->load->view('template/footer');
    }


    public function add()
    {
        $data = array(
            'nama' => $this->input->post('SPNama'),
            'alamat' => $this->input->post('SPAlamat'),
            'notelp' => $this->input->post('SPNohp'),
            'kode' => $this->input->post('SPKode'),
            'active' => '1'
        );

        if ($this->supplier_model->create($data)) {
            echo json_encode('sukses');
        }
    }

    private function _generateKodesupplier()
    {

        $this->db->select('RIGHT(kode,4) as kode', false);
        $this->db->order_by("kode", "DESC");
        $this->db->limit(1);
        $query = $this->db->get('supplier');

        if ($query->num_rows() <> 0) {

            $data       = $query->row();
            $kodesupplier  = intval($data->kode) + 1;
        } else {
            $kodesupplier  = 1;
        }

        $lastKode = str_pad($kodesupplier, 4, "0", STR_PAD_LEFT);
        $tahun    = date("y");
        $SUP      = "SUP";

        $newKode  = $SUP . $tahun . $lastKode;

        return $newKode;
    }


    public function read()
    {
        header('Content-type: application/json');
        $iterasi = 1;
        if ($this->supplier_model->read()->num_rows() > 0) {
            foreach ($this->supplier_model->read()->result() as $supplier) {
                if ($supplier->active != '0') {
                    $data[] = array(
                        'no' => $iterasi++,
                        'kode' => $supplier->kode,
                        'nama' => $supplier->nama,
                        'alamat' => $supplier->alamat,
                        'telepon' => $supplier->notelp,
                        'action' => '<button class="btn btn-sm btn-warning" onclick="edit(' . $supplier->id . ')"><i class="fas fa-edit"></i></button> <button class="btn btn-sm btn-danger" onclick="remove(' . $supplier->id . ')"><i class="fas fa-trash"></i></button>'
                    );
                }
            }
        } else {
            $data = array();
        }
        $supplier = array(
            'data' => $data
        );
        echo json_encode($supplier);
    }

    public function listsupplier()
    {

        $data = [
            'title' => "List Supplier",
            'toko' => "Toko Hj Evi",
            'nama' => $this->session->userdata('nama'),
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/listsupplier', $data);
    }

    public function get_supplier()
    {
        $id = $this->input->post('id');
        $supplier = $this->supplier_model->getSupplier($id);
        if ($supplier->row()) {
            echo json_encode($supplier->row());
        }
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'notelp' => $this->input->post('telepon')
        );
        if ($this->supplier_model->update($id, $data)) {
            echo json_encode('sukses');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $data = array(
            'active' => '0'
        );
        
        if ($this->supplier_model->update($id, $data)) {
            echo json_encode('sukses');
        }
    }
}
