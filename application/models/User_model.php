<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function register_user($data)
	{
		$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
		return $this->db->insert('users', $data);
	}

	public function validate_user($username, $password)
	{
		$this->db->where('username', $username);
		$user = $this->db->get('users')->row();

		if ($user && password_verify($password, $user->password)) {
			return $user;
		}
		return false;
	}
}
