<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Konten_model $konten_model
 * @property CI_Input $input
 * @property CI_upload $upload
 * @property CI_Session $session
 *  @property CI_URI $uri
 * @property CI_Pagination $pagination
 */
class Admin extends  CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			redirect('auth/login');
		}
		$this->load->model('konten_model');
	}

	public function konten()
	{

		$this->load->library('pagination');

		// daftar kategori sesuai ENUM
		$data['kategori_list'] = [
			'home',
			'gallery',
			'testimoni',
			'e-menu',
			'contact',
			'story',
			'edukasi',
			'experience',
			'about'
		];

		// Ambil filter
		$kategori = $this->input->get('kategori');
		$q = $this->input->get('q');

		// Hitung total rows dengan filter
		$config['base_url'] = base_url('admin/konten');
		$config['total_rows'] = $this->konten_model->count_filtered($kategori, $q);
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;


		// Tailwind modern styling
		$config['full_tag_open'] = '<div class="flex justify-center gap-2 mt-6 space-x-1">';
		$config['full_tag_close'] = '</div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<button class="px-3 py-1 bg-gray-200/30 backdrop-blur-2xl text-gray-700 rounded hover:bg-[#493628] hover:text-white transition">';
		$config['first_tag_close'] = '</button>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<button class="px-3 py-1 bg-gray-200/30 backdrop-blur-2xl text-gray-700 rounded hover:bg-[#493628] hover:text-white transition">';
		$config['last_tag_close'] = '</button>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<button class="px-3 py-1 bg-gray-200/30 backdrop-blur-2xl text-gray-700 rounded hover:bg-[#493628] hover:text-white transition">';
		$config['next_tag_close'] = '</button>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<button class="px-3 py-1 bg-gray-200/30 backdrop-blur-2xl hover:bg-[#493628] hover:text-white transition text-gray-700 rounded ">';
		$config['prev_tag_close'] = '</button>';

		$config['cur_tag_open'] = '<button class="px-3 py-1 bg-[#AB886D] text-white transition rounded shadow">';
		$config['cur_tag_close'] = '</button>';

		$config['num_tag_open'] = '<button class="px-3 py-1 bg-gray-200/30 backdrop-blur-2xl hover:bg-[#493628] hover:text-white transition text-gray-700 rounded ">';
		$config['num_tag_close'] = '</button>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['konten'] = $this->konten_model->get_all($config['per_page'], $page);
		$data['konten'] = $this->konten_model->get_filtered($config['per_page'], $page, $kategori, $q);
		$data['pagination'] = $this->pagination->create_links();
		$data['start'] = $page;

		$this->load->view('admin/konten_list', $data);
	}

	public function dashboard()
	{
		$kategori_list = [
			'home' => 'Home',
			'gallery' => 'Gallery',
			'testimoni' => 'Testimoni',
			'e-menu' => 'E-Menu',
			'contact' => 'Contact',
			'story' => 'Story',
			'edukasi' => 'Edukasi',
			'experience' => 'Experience',
			'about' => 'About'
		];

		$statistik = [];
		foreach ($kategori_list as $key => $label) {
			$statistik[$key] = [
				'label' => $label,
				'jumlah' => $this->konten_model->count_filtered($key)
			];
		}

		$data['statistik'] = $statistik;
		$this->load->view('admin/dashboard', $data);
	}



	public function create()
	{
		// Ambil kategori dari query string
		$kategori = $this->input->get('kategori');

		// Default view kalau kategori tidak dikenali
		$view = 'admin/konten_form';

		// Tentukan form view sesuai kategori
		switch ($kategori) {
			case 'home':
				$view = 'admin/form/home_form';
				break;
			case 'gallery':
				$view = 'admin/form/gallery_form';
				break;
			case 'testimoni':
				$view = 'admin/form/testimoni_form';
				break;
			case 'e-menu':
				$view = 'admin/form/emenu_form';
				break;
			case 'contact':
				$view = 'admin/form/contact_form';
				break;
			case 'story':
				$view = 'admin/form/story_form';
				break;
			case 'edukasi':
				$view = 'admin/form/edukasi_form';
				break;
			case 'experience':
				$view = 'admin/form/experience_form';
				break;
			case 'about':
				$view = 'admin/form/about_form';
				break;
		}

		// Kirim data kategori ke view biar bisa diset otomatis hidden input
		$data['kategori'] = $kategori;

		$this->load->view($view, $data);
	}
	public function create_action()
	{
		$id_user = $this->session->userdata('id_user');

		$kategori          = $this->input->post('kategori');
		$judul             = $this->input->post('judul');
		$judul_en             = $this->input->post('judul_en');
		$deskripsi_singkat = $this->input->post('deskripsi_singkat');
		$deskripsi_singkat_en = $this->input->post('deskripsi_singkat_en');
		$deskripsi_lengkap = $this->input->post('deskripsi_lengkap');
		$deskripsi_lengkap_en = $this->input->post('deskripsi_lengkap_en');
		$meta_url          = $this->input->post('meta_url');
		$keyword           = $this->input->post('keyword');
		$tagline           = $this->input->post('tagline');
		$harga             = $this->input->post('harga');

		// Upload file (tanpa duplikat)
		$logo       = $this->_upload_file('logo', 'logo');
		$hero_image = $this->_upload_file('hero_image', 'hero');
		$photo1     = $this->_upload_file('photo1', 'p1');
		$photo2     = $this->_upload_file('photo2', 'p2');
		$photo3     = $this->_upload_file('photo3', 'p3');
		$photo4     = $this->_upload_file('photo4', 'p4');
		$photo5     = $this->_upload_file('photo5', 'p5');


		// 🔴 ERROR HANDLING: kalau file upload gagal
		if (($logo === null && !empty($_FILES['logo']['name'])) ||
			($hero_image === null && !empty($_FILES['hero_image']['name'])) ||
			($photo1 === null && !empty($_FILES['photo1']['name'])) ||
			($photo2 === null && !empty($_FILES['photo2']['name'])) ||
			($photo3 === null && !empty($_FILES['photo3']['name'])) ||
			($photo4 === null && !empty($_FILES['photo4']['name'])) ||
			($photo5 === null && !empty($_FILES['photo5']['name']))
		) {

			$this->session->set_flashdata('error', '❌ Upload gagal! Pastikan file gambar sesuai (jpg/png/gif) dan ukuran < 2MB.');
			redirect('admin/create'); // balik lagi ke form
			return; // stop eksekusi
		}

		$data = array(
			'kategori'          => $kategori,
			'judul'             => $judul,
			'judul_en'             => $judul_en,
			'deskripsi_singkat' => $deskripsi_singkat,
			'deskripsi_singkat_en' => $deskripsi_singkat_en,
			'deskripsi_lengkap' => $deskripsi_lengkap,
			'deskripsi_lengkap_en' => $deskripsi_lengkap_en,
			'meta_url'          => $meta_url,
			'keyword'           => $keyword,
			'logo'              => $logo,
			'tagline'           => $tagline,
			'hero_image'        => $hero_image,
			'photo1'            => $photo1,
			'photo2'            => $photo2,
			'photo3'            => $photo3,
			'photo4'            => $photo4,
			'photo5'            => $photo5,
			'harga'             => $harga,
			'id_user'           => $id_user // ambil dari session
		);

		$this->konten_model->insert($data);
		redirect('admin/konten');
	}



	private function _upload_file($field, $prefix, $old_file = null, $kategori = 'konten')
	{
		if (!empty($_FILES[$field]['name'])) {
			$ext = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);

			$config['upload_path']   = './assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size']      = 2048;
			$config['overwrite']     = true;
			$config['file_name']     = $kategori . '_' . $prefix . '_' . time() . '.' . $ext;

			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload($field)) {
				echo $this->upload->display_errors();
				return null;
			} else {
				return $this->upload->data('file_name');
			}
		}
		return null;
	}

	public function edit($id)
	{
		$data['konten'] = $this->konten_model->get_by_id($id);

		if (!$data['konten']) {
			show_404();
		}

		// Tentukan form view sesuai kategori
		switch ($data['konten']->kategori) {
			case 'home':
				$view = 'admin/form_edit/home_edit';
				break;
			case 'gallery':
				$view = 'admin/form_edit/gallery_edit';
				break;
			case 'testimoni':
				$view = 'admin/form_edit/testimoni_edit';
				break;
			case 'e-menu':
				$view = 'admin/form_edit/emenu_edit';
				break;
			case 'contact':
				$view = 'admin/form_edit/contact_edit';
				break;
			case 'story':
				$view = 'admin/form_edit/story_edit';
				break;
			case 'edukasi':
				$view = 'admin/form_edit/edukasi_edit';
				break;
			case 'experience':
				$view = 'admin/form_edit/experience_edit';
				break;
			case 'about':
				$view = 'admin/form_edit/about_edit';
				break;
			default:
				show_404();
		}

		$this->load->view($view, $data);
	}


	public function update_action($id)
	{
		$id_user = $this->session->userdata('id_user');

		// Ambil data lama
		$konten = $this->konten_model->get_by_id($id);

		$kategori          = $this->input->post('kategori');
		$judul             = $this->input->post('judul');
		$judul_en             = $this->input->post('judul_en');
		$deskripsi_singkat = $this->input->post('deskripsi_singkat');
		$deskripsi_singkat_en = $this->input->post('deskripsi_singkat_en');
		$deskripsi_lengkap = $this->input->post('deskripsi_lengkap');
		$deskripsi_lengkap_en = $this->input->post('deskripsi_lengkap_en');
		$meta_url          = $this->input->post('meta_url');
		$keyword           = $this->input->post('keyword');
		$tagline           = $this->input->post('tagline');
		$harga             = $this->input->post('harga');

		// Upload baru? kalau tidak, tetap pakai file lama
		$logo       = $this->_upload_file('logo', 'logo') ?: $konten->logo;
		$hero_image = $this->_upload_file('hero_image', 'hero') ?: $konten->hero_image;
		$photo1     = $this->_upload_file('photo1', 'p1') ?: $konten->photo1;
		$photo2     = $this->_upload_file('photo2', 'p2') ?: $konten->photo2;
		$photo3     = $this->_upload_file('photo3', 'p3') ?: $konten->photo3;
		$photo4     = $this->_upload_file('photo4', 'p4') ?: $konten->photo4;
		$photo5     = $this->_upload_file('photo5', 'p5') ?: $konten->photo5;
		// 🔴 ERROR HANDLING: kalau upload gagal
		if (($logo === null && !empty($_FILES['logo']['name'])) ||
			($hero_image === null && !empty($_FILES['hero_image']['name'])) ||
			($photo1 === null && !empty($_FILES['photo1']['name'])) ||
			($photo2 === null && !empty($_FILES['photo2']['name'])) ||
			($photo3 === null && !empty($_FILES['photo3']['name'])) ||
			($photo4 === null && !empty($_FILES['photo4']['name'])) ||
			($photo5 === null && !empty($_FILES['photo5']['name']))
		) {

			$this->session->set_flashdata('error', '❌ Upload gagal! Pastikan file gambar sesuai (jpg/png/gif) dan ukuran < 2MB.');
			redirect('admin/konten?kategori=' . $konten->kategori);
			return;
		}

		$data = array(
			'kategori'          => $kategori,
			'judul'             => $judul,
			'judul_en'             => $judul_en,
			'deskripsi_singkat' => $deskripsi_singkat,
			'deskripsi_singkat_en' => $deskripsi_singkat_en,
			'deskripsi_lengkap' => $deskripsi_lengkap,
			'deskripsi_lengkap_en' => $deskripsi_lengkap_en,
			'meta_url'          => $meta_url,
			'keyword'           => $keyword,
			'logo'              => $logo,
			'tagline'           => $tagline,
			'hero_image'        => $hero_image,
			'photo1'            => $photo1,
			'photo2'            => $photo2,
			'photo3'            => $photo3,
			'photo4'            => $photo4,
			'photo5'            => $photo5,
			'harga'             => $harga,
			'id_user'           => $id_user
		);

		$this->konten_model->update($id, $data);
		redirect('admin/konten?kategori=' . $kategori);
	}


	public function delete($id)
	{
		$this->konten_model->delete($id);
		redirect('admin/konten');
	}
}