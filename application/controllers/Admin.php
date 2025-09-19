<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Cek login
        if (!$this->session->userdata('logged_in')) {
            redirect('welcome');
        }
        $this->load->model('Ab_rental');
        $this->load->helper('url');
    }

    public function index()
    {
        // Data untuk dashboard
        $data['total_alat'] = $this->Ab_rental->count_alat();
        $data['total_customer'] = $this->Ab_rental->count_customer();
        $data['total_transaksi'] = $this->Ab_rental->count_transaksi();
        $data['total_pendapatan'] = $this->Ab_rental->total_pendapatan();
        $data['transaksi_terbaru'] = $this->Ab_rental->get_transaksi_terbaru();
        $data['alat_disewa'] = $this->Ab_rental->get_alat_disewa();
        
        $this->load->view('admin/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
?>
