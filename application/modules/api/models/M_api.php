<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

	function __login($where)
	{
		$this->db->where($where);
		return $this->db->get('users')
		->row();
	}

	function __getCompany($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		return $this->db->get('m_company')
		->result();
	}

	function __getStruktur($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		return $this->db->get('m_struktur')
		->result();
	}

	function __getMoto($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('index_moto', 'asc');
		return $this->db->get('m_moto')
		->result();
	}

	function __getVisi($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_visi')
		->result();
	}

	function __getMisi($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('index_misi', 'asc');
		return $this->db->get('m_misi')
		->result();
	}

	function __getProgram($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_program')
		->result();
	}

	function __getProgramVideo($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_program_video')
		->result();
	}

	function __getJasa($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_jasa')
		->result();
	}

	function __getContact()
	{
		$this->db->order_by('tanggal', 'desc');
		return $this->db->get('contact')
		->result();
	}

	function __getKegiatan($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_galeri')
		->result();
	}

	function __getUsers($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('id', 'asc');
		return $this->db->get('users')
		->result();
	}

	function __getMedsos($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_medsos')
		->result();
	}

	function __getNews($page=0)
	{
		$limit = 6;
		$offset = $limit * $page;
		$this->db->select('*, artikel.id as id_artikel');
		$this->db->join('users', 'users.id = artikel.id_user', 'inner');
		return $this->db->get('artikel', $limit, $page)
		->result();
	}

	function __getNewsCount()
	{
		$this->db->select('count(isi_artikel) as jml');
		return $this->db->get('artikel')
		->row();
	}

	function __getNewsDetail($where=null)
	{
		$this->db->select('*, artikel.id as id_artikel');
		$this->db->join('users', 'users.id = artikel.id_user', 'inner');
		$this->db->where('artikel.id', $where);
		return $this->db->get('artikel')
		->row();
	}

	function __getNewsTable($where=null)
	{
		$this->db->select('*, artikel.id as id_artikel');
		$this->db->join('users', 'users.id = artikel.id_user', 'inner');
		if ($where != null) {
			$this->db->where($where);
		}
		return $this->db->get('artikel')
		->result();
	}

	function __getBanner($where=null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		return $this->db->get('m_slider')
		->result();
	}

}

/* End of file M_api.php */
/* Location: ./application/modules/api/models/M_api.php */