<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Template');
		$this->load->model('M_view', 'mview');
		if ($this->session->logged_in == false) {
			redirect('login.html','refresh');
		}
	}
	
	public function index()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'Company Profile',
			'content' => 'view/company',
			'js' => 'company'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_struktur()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'Struktur Organisasi',
			'content' => 'view/struktur',
			'js' => 'struktur'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_moto()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'Moto',
			'content' => 'view/moto',
			'js' => 'moto'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_visi()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'visi',
			'content' => 'view/visi',
			'js' => 'visi'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_misi()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'misi',
			'content' => 'view/misi',
			'js' => 'misi'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_program()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'program',
			'content' => 'view/program',
			'js' => 'program'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_produk()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'produk',
			'content' => 'view/produk',
			'js' => 'produk'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_galeri()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'galeri',
			'content' => 'view/kegiatan',
			'js' => 'kegiatan'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_medsos()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'medsos',
			'content' => 'view/medsos',
			'js' => 'medsos'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_banner()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'banner',
			'content' => 'view/banner',
			'js' => 'banner'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_contact()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'contact',
			'content' => 'view/contact',
			'js' => 'contact'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_user()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'users',
			'content' => 'view/users',
			'js' => 'users'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_pendafataran()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'text pendafataran',
			'content' => 'view/text_pendafataran',
			'js' => 'text_pendafataran'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

}