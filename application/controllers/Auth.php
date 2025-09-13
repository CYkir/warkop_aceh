<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property User_model $user_model
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session'); // pastikan session diload
	}

	public function login()
	{
		if ($this->input->post()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->user_model->cek_login($username, $password);

			if ($user) {
				$this->session->set_userdata([
					'id_user' => $user->id_user,
					'username' => $user->username,
					'role' => $user->role,
					'logged_in' => TRUE
				]);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Username atau password salah!');
				redirect('auth/login');
			}
		} else {
			$this->load->view('auth/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}