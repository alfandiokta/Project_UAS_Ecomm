<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Dashboard_model');
	}

	public function index()
	{
		$data['head'] = "Dashboard";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['jmluser'] = $this->Dashboard_model->getcountuser();

		$data['jmlbarang'] = $this->Dashboard_model->getcountbrg();
		$data['jmlkat'] = $this->Dashboard_model->getcountkat();
		$this->load->view('templates/_partials/header', $data);
		$this->load->view('templates/_partials/sidebar');
		$this->load->view('templates/_partials/topbar');
		$this->load->view('index');
		$this->load->view('templates/_partials/footer');
	}
}
