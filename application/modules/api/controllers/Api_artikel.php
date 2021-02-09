<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class Api_artikel extends RestController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_api', 'api');
		$this->load->library('template');
	}

	public function index_get()
	{
		$page = $this->get('page');
		$result = $this->api->__getNews($page);
		$data = [];
		foreach ($result as $res) {
			$data[] = [
				'id' => $res->id,
				'judul_artikel' => $res->judul_artikel,
				'deskripsi_artikel' => $res->deskripsi_artikel,
				'foto_artikel' => $res->foto_artikel,
				'tag_artikel' => $res->tag_artikel,
				'url_artikel' => $res->url_artikel,
				'author' => $res->username,
				'tgl_artikel' => date('d/m/Y H:i', strtotime($res->tgl_artikel))
			];
		}
		$this->response([
			'status' => true,
			'data' => $data,
			'all' => $this->api->__getNewsCount()
		], 200);
	}

	public function artikel_get()
	{
		$res = $this->api->__getNewsDetail($this->get('id'));
		$data[] = [
			'id' => $res->id,
			'judul_artikel' => $res->judul_artikel,
			'deskripsi_artikel' => $res->deskripsi_artikel,
			'foto_artikel' => $res->foto_artikel,
			'tag_artikel' => $res->tag_artikel,
			'url_artikel' => $res->url_artikel,
			'author' => $res->username,
			'tgl_artikel' => date('d/m/Y H:i', strtotime($res->tgl_artikel))
		];
		$this->response([
			'status' => true,
			'data' => $data
		], 200);
	}

	public function slogan_get()
	{
		$res = $this->db->get('m_slogan')->row();
		$this->response([
			'status' => true,
			'data' => $res
		], 200);
	}

	public function slogan_post()
	{
		$data = [
			'judul' => $this->post('judul'),
			'text' => $this->post('text')
		];
		$this->db->update('m_slogan', $data, ['id' => $this->post('id')]);
		$this->response([
			'status' => true,
			'message' => 'Data berhasil diperbaharui'
		], 200);
	}

}

/* End of file Api_artikel.php */
/* Location: ./application/modules/api/controllers/Api_artikel.php */