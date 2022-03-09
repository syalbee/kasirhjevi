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
            'kodesup' => $this->_cekkodesup()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/tambahsupplier', $data);
        // $this->load->view('template/footer');
    }

    private function _cekkodesup()
    {
        $this->db->select('kode, id');
        $this->db->from('supplier');
        $this->db->order_by('id', 'DESC');

        $kodesup = $this->db->get()->result_array();

        if (empty($kodesup) || $kodesup == null || $kodesup == "") {
            $this->db->select('value');
            $this->db->from('helper');
            $this->db->where('table', 'supplier');
            $kodesup = $this->db->get()->result_array()[0]['value'] . "1";
        } else {
            $icrement = substr($kodesup[0]['kode'], 3) + 1;
            $kodesup = "SUP" . $icrement . $kodesup[0]['id'] + 1;
        }

        return $kodesup;
    }

    public function add()
    {
        $data = array(
            'nama' => $this->input->post('SPNama'),
            'alamat' => $this->input->post('SPAlamat'),
            'notelp' => $this->input->post('SPNohp'),
            'kode' => $this->input->post('SPKode')
        );

        if ($this->supplier_model->create($data)) {
            echo json_encode('sukses');
        }
    }


    public function read()
    {
        header('Content-type: application/json');
        $iterasi = 1;
        if ($this->supplier_model->read()->num_rows() > 0) {
            foreach ($this->supplier_model->read()->result() as $supplier) {
                $data[] = array(
                    'no' => $iterasi++,
                    'kode' => $supplier->kode,
                    'nama' => $supplier->nama,
                    'alamat' => $supplier->alamat,
                    'telepon' => $supplier->notelp,
                    'action' => '<button class="btn btn-sm btn-warning" onclick="edit(' . $supplier->id . ')"><i class="fas fa-edit"></i></button> <button class="btn btn-sm btn-danger" onclick="remove(' . $supplier->id . ')"><i class="fas fa-trash"></i></button>'
                );
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
        if ($this->supplier_model->delete($id)) {
            echo json_encode('sukses');
        }
    }

}
