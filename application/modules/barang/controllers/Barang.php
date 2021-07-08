<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Barang_model");
  }
  public function index()
  {
    $data['head'] = "Produk";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['brg'] = $this->Barang_model->getallbrg();
    $this->load->view('templates/_partials/header', $data);
    $this->load->view('templates/_partials/sidebar');
    $this->load->view('templates/_partials/topbar');
    $this->load->view('index');
    $this->load->view('templates/_partials/footer');
  }
  public function tambah_barang()
  {
    $data['head'] = "Tambah barang";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getkat'] =  $this->db->get('tbl_kategori')->result_array();
    $this->form_validation->set_rules('nama_produk', 'Nama barang', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/_partials/header', $data);
      $this->load->view('templates/_partials/sidebar');
      $this->load->view('templates/_partials/topbar');
      $this->load->view('brg/tambah');
      $this->load->view('templates/_partials/footer');
    } else {

      $this->Barang_model->simpan_data();
    }
  }

  public function hapus_barang($id)
  {
    $this->db->where('id_produk', $id);
    $this->db->delete('tbl_produk');
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('barang');
  }
  public function edit_barang($id)
  {
    $data['head'] = "Edit Barang";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getbyidbrg'] = $this->Barang_model->editbarangId($id);
    $data['getkat'] =  $this->db->get('tbl_kategori')->result_array();
    $this->form_validation->set_rules('nama_barang', 'Nama Kategori', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/_partials/header', $data);
      $this->load->view('templates/_partials/sidebar');
      $this->load->view('templates/_partials/topbar');
      $this->load->view('brg/edit');
      $this->load->view('templates/_partials/footer');
    } else {
      $config['upload_path']   = './assets/images/';
      $config['allowed_types'] = 'jpg|png|gif|jpeg';
      $config['max_size']      = '2048000';
      $namaFile = $_FILES['gambar']['name'];
      $error = $_FILES['gambar']['error'];
      $this->upload->initialize($config);
      $old_image = $this->input->post('old_image');
      $id_produk = $this->input->post('id_produk');

      if ($namaFile == '') {
        $ganti = $old_image;
      } else {
        if (!$this->upload->do_upload('gambar')) {
          $error = $this->upload->display_errors();
          redirect('barang/edit_barang/' . $id_produk);
        } else {
          $data = array('gambar' => $this->upload->data());
          $nama_file = $data['gambar']['file_name'];
          $ganti = str_replace(" ", "_", $nama_file);
          if ($old_image == 'cheklist.png') {
          } else {
            unlink('./assets/images/' . $old_image . '');
          }
        }
      }
      $data = array(
        'nama_produk'        => $this->input->post('nama_produk'),
        'kategori'         => $this->input->post('id'),
        'harga'     => $this->input->post('harga'),
        'deskripsi'     => $this->input->post('deskripsi'),
        'gambar'       => $ganti
      );

      $this->db->where('id_produk', $id_produk);
      $this->db->update('tbl_produk', $data);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('barang');
    }
  }
}
