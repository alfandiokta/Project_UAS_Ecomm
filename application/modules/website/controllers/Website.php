<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Web_model');
  }
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['head'] = "E-Comm";
    $data['getkat'] = $this->Web_model->getkat();
    $data['getprod'] = $this->Web_model->getprod();
    $this->load->view('templates/_partialwebs/header', $data);
    $this->load->view('index');
    $this->load->view('templates/_partialwebs/footer');
  }
  public function product()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['head'] = "E-Comm";
    $data['getkat'] = $this->Web_model->getkat();
    $data['getprodall'] = $this->Web_model->getprodall();
    $this->load->view('templates/_partialwebs/header', $data);
    $this->load->view('web/product');
    $this->load->view('templates/_partialwebs/footer');
  }
  public function product_detail($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['head'] = "E-Comm";
    $data['getkat'] = $this->Web_model->getkat();
    $data['getsimilarprod'] = $this->Web_model->getsimilarprod();
    $data['getprodid'] = $this->Web_model->prodId($id);
    $this->load->view('templates/_partialwebs/header', $data);
    $this->load->view('web/product_detail');
    $this->load->view('templates/_partialwebs/footer');
  }
  public function perkat($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['head'] = "E-Comm";
    $data['getperkat'] = $this->Web_model->getperkat($id);
    $data['getkat'] = $this->Web_model->getkat();
    $this->load->view('templates/_partialwebs/header', $data);
    $this->load->view('web/product_category');
    $this->load->view('templates/_partialwebs/footer');
  }
  public function belanja()
  {
    if (empty($this->cart->contents())) {
      redirect('website/product');
    }
    $data['head'] = "E-Comm";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getkat'] = $this->Web_model->getkat();
    $this->load->view('templates/_partialwebs/header', $data);
    $this->load->view('web/belanja');
    $this->load->view('templates/_partialwebs/footer');
    
  }
  public function checkout()
  {
    $data['head'] = "E-Comm";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getkat'] = $this->Web_model->getkat();
    $this->load->view('templates/_partialwebs/header', $data);
    $this->load->view('web/checkout');
    $this->load->view('templates/_partialwebs/footer');
  }
  public function proses_order()
  {
    //-------------------------Input data pelanggan--------------------------
    $data_pelanggan = array(
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'alamat' => $this->input->post('alamat'),
      'telp' => $this->input->post('telp')
    );
    $id_pelanggan = $this->Web_model->tambah_pelanggan($data_pelanggan);
    //-------------------------Input data order------------------------------
    $data_order = array(
      'tanggal' => date('Y-m-d'),
      'pelanggan' => $id_pelanggan
    );
    $id_order = $this->Web_model->tambah_order($data_order);
    //-------------------------Input data detail order-----------------------
    if ($cart = $this->cart->contents()) {
      foreach ($cart as $item) {
        $data_detail = array(
          'order_id' => $id_order,
          'produk' => $item['id'],
          'qty' => $item['qty'],
          'harga' => $item['price']
        );
        $proses = $this->Web_model->tambah_detail_order($data_detail);
      }
    }
    //-------------------------Hapus shopping cart--------------------------
    $this->cart->destroy();
    $data['head'] = 'E-comm';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getkat'] = $this->Web_model->getkat();
    $this->load->view('templates/_partialwebs/header', $data);
    $this->load->view('web/sukses');
    $this->load->view('templates/_partialwebs/footer');
  }
  public function pengrajin()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['head'] = "E-Comm";
    $data['getkat'] = $this->Web_model->getkat();
    $data['getprodall'] = $this->Web_model->getprodall();
    $data['getmitra'] = $this->Web_model->getmitra();
    $this->load->view('templates/_partialwebs/header', $data);
    $this->load->view('web/pengrajin');
    $this->load->view('templates/_partialwebs/footer');
  }
  public function daftar_mitra()
  {
    $data['head'] = "Daftar Mitra";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getkat'] = $this->Web_model->getkat();
    $this->form_validation->set_rules('nama', 'nama', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/_partialwebs/header', $data);
      $this->load->view('web/daftar_mitra');
      $this->load->view('templates/_partialwebs/footer');
    } else {

      $this->Web_model->simpan_data();
    }
  }
  
}
