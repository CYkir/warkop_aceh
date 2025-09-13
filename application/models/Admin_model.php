<?php

/**
 * @property user $user
 */

	class Admin_model extends CI_Model {
	public function get_login($username, $password)
	{
		$this->db->where('username', $username);
		$user = $this->db->get('users')->row(); // <-- simpan hasil query ke $user

		if ($user) {
			if (password_verify($password, $user->password)) {
				return $user; // login sukses
			}
		}
		return false; // login gagal
	}
	}
