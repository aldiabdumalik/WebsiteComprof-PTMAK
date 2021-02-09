<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
			'title' => 'Dashboard',
			'content' => 'view/dashboard',
			'js' => 'dashboard'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_artikel()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'Artikel',
			'content' => 'view/artikel',
			'js' => 'artikel'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function index_artikel_input()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'Input Artikel',
			'content' => 'view/artikel_input',
			'js' => 'artikel_input'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template', $data);
	}

	public function logout()
	{
		session_destroy();
		redirect('login.html','refresh');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/view/controllers/Dashboard.php */