<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_website extends CI_Model {

	function company()
	{
		return $this->db->get('m_company')
		->row();
	}

	function medsos()
	{
		return $this->db->get('m_medsos')
		->row();
	}

	function slider()
	{
		return $this->db->get('m_slider')
		->result();
	}

	function moto()
	{
		$this->db->order_by('index_moto', 'asc');
		return $this->db->get('m_moto')
		->result();
	}

	function program()
	{
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_program')
		->result();
	}

	function program_video()
	{
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_program_video')
		->row();
	}

	function jasa()
	{
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_jasa')
		->result();
	}

	function visi()
	{
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_visi')
		->result();
	}

	function misi_1()
	{
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_misi', 4, 0)
		->result();
	}

	function misi_2()
	{
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_misi', 4, 4)
		->result();
	}

	function struktur()
	{
		$this->db->order_by('id', 'asc');
		return $this->db->get('m_struktur')
		->result();
	}

	function artikel_deskripsi($url)
	{
		$this->db->select('id, tag_artikel, deskripsi_artikel');
		$this->db->where('url_artikel', $url);
		return $this->db->get('artikel')
		->row();
	}

}

/* End of file M_website.php */
/* Location: ./application/modules/website/models/M_website.php */