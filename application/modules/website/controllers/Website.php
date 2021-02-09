<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Template');
		$this->load->model('M_website', 'mweb');
	}

	public function index()
	{
		$data_1 = $this->template->website();
		$data_2 = [
			'content' => 'home',
			'deskripsi' => 'Mitra Andalan Karawang Adalah tempat platihan kerja ke jepang',
			'keywords' => 'Pelatihan karawang, magang ke jepang, kursus jepang',
			'medsos' => $this->mweb->medsos(),
			'company' => $this->mweb->company(),
			'moto' => $this->mweb->moto(),
			'program' => $this->mweb->program(),
			'program_video' => $this->mweb->program_video(),
			'jasa' => $this->mweb->jasa(),
			'slider' => $this->mweb->slider(),
			'tp' => $this->db->get('m_slogan')->row()
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template', $data);
	}

	public function tentang()
	{
		$data_1 = $this->template->website();
		$data_2 = [
			'content' => 'tentang',
			'deskripsi' => 'Mitra Andalan Karawang Adalah tempat platihan kerja ke jepang',
			'keywords' => 'Pelatihan karawang, magang ke jepang, kursus jepang',
			'medsos' => $this->mweb->medsos(),
			'company' => $this->mweb->company(),
			'moto' => $this->mweb->moto(),
			'visi' => $this->mweb->visi(),
			'misi_1' => $this->mweb->misi_1(),
			'misi_2' => $this->mweb->misi_2(),
			'struktur' => $this->mweb->struktur()
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template', $data);
	}

	public function jasa()
	{
		$data_1 = $this->template->website();
		$data_2 = [
			'content' => 'jasa',
			'deskripsi' => 'Mitra Andalan Karawang Adalah tempat platihan kerja ke jepang',
			'keywords' => 'Pelatihan karawang, magang ke jepang, kursus jepang',
			'medsos' => $this->mweb->medsos(),
			'company' => $this->mweb->company(),
			'program' => $this->mweb->program(),
			'program_video' => $this->mweb->program_video(),
			'jasa' => $this->mweb->jasa(),
			'tp' => $this->db->get('m_slogan')->row()
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template', $data);
	}

	public function kontak()
	{
		$data_1 = $this->template->website();
		$data_2 = [
			'content' => 'kontak',
			'deskripsi' => 'Mitra Andalan Karawang Adalah tempat platihan kerja ke jepang',
			'keywords' => 'Pelatihan karawang, magang ke jepang, kursus jepang',
			'medsos' => $this->mweb->medsos(),
			'company' => $this->mweb->company(),
			'js' => 'kirim_kontak'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template', $data);
	}

	public function artikel()
	{
		$data_1 = $this->template->website();
		$data_2 = [
			'content' => 'artikel',
			'deskripsi' => 'Mitra Andalan Karawang Adalah tempat platihan kerja ke jepang',
			'keywords' => 'Pelatihan karawang, magang ke jepang, kursus jepang',
			'medsos' => $this->mweb->medsos(),
			'company' => $this->mweb->company(),
			'js' => 'view_artikel'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template', $data);
	}

	public function artikel_detail($url)
	{
		$artikel = $this->mweb->artikel_deskripsi($url);
		if (empty($artikel)) {
			redirect('arikel','refresh');
		}
		$data_1 = $this->template->website();
		$data_2 = [
			'content' => 'artikel_detail',
			'deskripsi' => $artikel->deskripsi_artikel,
			'keywords' => $artikel->tag_artikel,
			'id_artikel' => $artikel->id,
			'medsos' => $this->mweb->medsos(),
			'company' => $this->mweb->company(),
			'js' => 'view_artikel_detail'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template', $data);
	}

	public function album()
	{
		$data_1 = $this->template->website();
		$data_2 = [
			'content' => 'album',
			'deskripsi' => 'Mitra Andalan Karawang Adalah tempat platihan kerja ke jepang',
			'keywords' => 'Pelatihan karawang, magang ke jepang, kursus jepang',
			'medsos' => $this->mweb->medsos(),
			'galeri' => $this->db->get('m_galeri')->result()
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template_2', $data);
	}

	public function galeri()
	{
		$data_1 = $this->template->website();
		$data_2 = [
			'content' => 'galeri-kegiatan',
			'deskripsi' => 'Mitra Andalan Karawang Adalah tempat platihan kerja ke jepang',
			'keywords' => 'Pelatihan karawang, magang ke jepang, kursus jepang',
			'medsos' => $this->mweb->medsos()
			// 'js' => 'view_artikel'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template', $data);
	}

}

/* End of file Web.php */
/* Location: ./application/modules/website/controllers/Web.php */