<?php
defined('BASEPATH') or exit('No direct script access allowed');

	class Konten_model extends CI_Model{
	public function get_all($limit = null, $offset = null)
	{
		if ($limit !== null) {
			$this->db->limit($limit, $offset);
		}
		return $this->db->get('konten')->result();
	}

	public function count_all()
	{
		return $this->db->count_all('konten');
	}

	public function count_filtered($kategori = null, $q = null)
	{
		if ($kategori) {
			$this->db->where('kategori', $kategori);
		}
		if ($q) {
			$this->db->like('judul', $q);
		}
		return $this->db->count_all_results('konten');
	}

	public function get_filtered($limit, $offset, $kategori = null, $q = null)
	{
		if ($kategori) {
			$this->db->where('kategori', $kategori);
		}
		if ($q) {
			$this->db->like('judul', $q);
		}
		$this->db->order_by('created_at', 'DESC');
		return $this->db->get('konten', $limit, $offset)->result();
	}

	public function get_by_id($id)
	{
		return $this->db->get_where('konten', ['id_konten' => $id])->row();
	}

	public function insert($data)
	{
		return $this->db->insert('konten', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('id_konten', $id);
		return $this->db->update('konten', $data);
	}

	public function delete($id)
	{
		return $this->db->delete('konten', ['id_konten' => $id]);
	}
	public function get_by_kategori($kategori, $limit = null)
	{
		$this->db->where('kategori', $kategori)
			->order_by('created_at', 'DESC');

		if ($limit) {
			$this->db->limit($limit);
		}

		return $this->db->get('konten')->result();
	}
	public function get_single_by_kategori($kategori)
	{
		return $this->db->where('kategori', $kategori)
			->order_by('created_at', 'DESC')
			->limit(1)
			->get('konten')
			->row();
	}
	}

?>