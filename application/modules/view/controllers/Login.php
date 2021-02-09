<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Template');
		if ($this->session->logged_in == true) {
			redirect('dashboard.html','refresh');
		}
	}
	
	public function index()
	{
		$data_1 = $this->template->highadmin();
		$data_2 = [
			'title' => 'Login',
			'content' => 'view/login',
			'js' => 'login'
		];
		$data = array_merge($data_1, $data_2);
		$this->load->view('template/template_login', $data);
	}

}

/* End of file Login.php */
/* Location: ./application/modules/view/controllers/Login.php */