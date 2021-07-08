<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    // $data['barang'] = $this->barang_model->getAllbar();
    $data['head'] = "Pelanggan";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    // $data['pelanggan'] = 

    // modules::run('templates/Templates');
    $this->load->view('templates/_partials/header', $data);
    $this->load->view('templates/_partials/sidebar');
    $this->load->view('templates/_partials/topbar');
    $this->load->view('index');
    $this->load->view('templates/_partials/footer');
  }
}
