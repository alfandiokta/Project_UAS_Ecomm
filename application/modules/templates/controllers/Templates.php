<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Templates extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Templates_model');
  }
  public function header()
  {
    $this->load->view('header');
  }
  public function footer()
  {
    $this->load->view('footer');
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
}
