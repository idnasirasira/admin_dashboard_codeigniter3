<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function login()
	{
		// Check Logged In
		if ($this->session->userdata('logged_in')) {
			redirect('admin/dashboard');
		}

		$data['title'] = 'Login';
		$data['page_content'] = $this->load->view('pages/auth/login', [], true);

		$this->load->view('layouts/auth', $data);
	}

	public function login_action()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->user_model->validate_user($username, $password);

		if ($user) {
			$session_data = [
				'user_id' => $user->id,
				'username' => $user->username,
				'logged_in' => true
			];
			$this->session->set_userdata($session_data);
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('error', 'Invalid username or password');
			redirect('auth/login');
		}
	}

	public function register()
	{
		// Check Logged In
		if ($this->session->userdata('logged_in')) {
			redirect('admin/dashboard');
		}

		$data['title'] = 'Register';
		$data['page_content'] = $this->load->view('pages/auth/register', [], true);

		$this->load->view('layouts/auth', $data);
	}

	public function register_action()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');

		if ($password !== $confirm_password) {
			$this->session->set_flashdata('error', 'Password does not match');
			redirect('auth/register');
		}

		$data = [
			'username' => $username,
			'password' => $password
		];

		$this->user_model->register_user($data);
		redirect('auth/login');
	}

	public function logout()
	{
		$this->session->unset_userdata(['user_id', 'username', 'logged_in']);
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
