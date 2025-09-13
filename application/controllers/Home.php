<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Konten_model $konten_model
 *  @property CI_Lang $lang
 * @property CI_Session $session
 */
	class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Konten_model'); // model konten
		$site_lang = $this->session->userdata('site_lang');
		if ($site_lang) {
			$this->lang->load('app', $site_lang == 'en' ? 'english' : 'indonesian');
		} else {
			$this->lang->load('app', 'indonesian'); // default ID
		}
	}
   public function index(){
		// Ambil hanya satu baris untuk kategori tertentu
		$data['home']       = $this->konten_model->get_single_by_kategori('home');
		$data['about']      = $this->konten_model->get_single_by_kategori('about');
		$data['contact']    = $this->konten_model->get_single_by_kategori('contact');
		$data['story']      = $this->konten_model->get_single_by_kategori('story');

		// Kalau butuh banyak (misalnya gallery, menu, testimoni) bisa tetap pakai get_by_kategori
		$data['gallery']    = $this->konten_model->get_by_kategori('gallery');
		$data['emenu']      = $this->konten_model->get_by_kategori('e-menu');
		$data['testimoni']  = $this->konten_model->get_by_kategori('testimoni');
		$data['edukasi']    = $this->konten_model->get_by_kategori('edukasi');
		$data['experience'] = $this->konten_model->get_by_kategori('experience');

		
		$data['lang'] = $this->session->userdata('site_lang') ?? 'id';

		$this->load->view('beranda', $data);
	 }

	}


?>
