<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Session $session
 */
class Language extends CI_Controller
{
	public function switch($lang = "id")
	{
		$lang = in_array($lang, ['id', 'en']) ? $lang : 'id';
		$this->session->set_userdata('site_lang', $lang);
		redirect($_SERVER['HTTP_REFERER']); // kembali ke halaman sebelumnya
	}
}
