<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kategori_model');
  }
  public function index()
  {

    $data['head'] = "Kategori";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kat'] = $this->db->get('tbl_kategori')->result_array();
    $this->load->view('templates/_partials/header', $data);
    $this->load->view('templates/_partials/sidebar');
    $this->load->view('templates/_partials/topbar');
    $this->load->view('index');
    $this->load->view('templates/_partials/footer');
  }
  public function tambah_kategori()
  {
    $data['head'] = "Tambah Kategori";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/_partials/header', $data);
      $this->load->view('templates/_partials/sidebar');
      $this->load->view('templates/_partials/topbar');
      $this->load->view('kat/tambah');
      $this->load->view('templates/_partials/footer');
    } else {
      $data = [
        'nama_kategori' => $this->input->post('nama_kategori'),
      ];
      $this->db->insert('tbl_kategori', $data);

      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('kategori');
    }
  }
  public function hapus_kategori($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tbl_kategori');
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('kategori');
  }
  public function edit_kategori($id)
  {

    $data['head'] = "Edit Kategori";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getbyidkat'] = $this->Kategori_model->editkategoriId($id);
    $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/_partials/header', $data);
      $this->load->view('templates/_partials/sidebar');
      $this->load->view('templates/_partials/topbar');
      $this->load->view('kat/edit');
      $this->load->view('templates/_partials/footer');
    } else {
      $data = [
        'nama_kategori' => $this->input->post('nama_kategori'),
      ];

      $this->db->where('id', $this->input->post('id'));
      $this->db->update('tbl_kategori', $data);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('kategori');
    }
  }
}
