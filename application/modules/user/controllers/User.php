<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model("User_model");
	}

	public function index()
	{
		// modules::run('templates/Templates');
		$data['head'] = "Data User";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['getuser'] = $this->db->get('user')->result_array();
		$data['usr'] = $this->User_model->getalluser();
		$this->load->view('templates/_partials/header', $data);
		$this->load->view('templates/_partials/sidebar');
		$this->load->view('templates/_partials/topbar');
		$this->load->view('index');
		$this->load->view('templates/_partials/footer');
	}
	public function tambah_user()
  	{
		$data['head'] = "Tambah Pengguna";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'email', 'required|trim');

		if ($this->form_validation->run() == false) {
		$this->load->view('templates/_partials/header', $data);
		$this->load->view('templates/_partials/sidebar');
		$this->load->view('templates/_partials/topbar');
		$this->load->view('usr/tambah');
		$this->load->view('templates/_partials/footer');
		} else {

		$this->User_model->simpan_data();
		}
 	}
	 public function hapus_user($id)
	 {
	   $this->db->where('id', $id);
	   $this->db->delete('user');
	   $this->session->set_flashdata('pesan', 'Dihapus');
	   redirect('user');
	 } 

}
