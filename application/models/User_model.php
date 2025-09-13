<?php

	class User_model extends CI_Model {
	public function cek_login($username, $password)
	{
		$this->db->where('username', $username);
		$user = $this->db->get('users')->row();

		if ($user) {
			// cocokkan password (pastikan password disimpan hash, misal password_hash())
			if (password_verify($password, $user->password)) {
				return $user;
			}
		}
		return false;
	}
	}
