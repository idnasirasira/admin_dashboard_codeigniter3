<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');

		// Check Logged In
		if (!$this->session->userdata('logged_in')) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Login';
		$data['page_content'] = $this->load->view('pages/admin/dashboard', [], true);

		$this->load->view('layouts/admin', $data);
	}
}
