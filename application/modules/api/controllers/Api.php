<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class Api extends RestController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_api', 'api');
		$this->load->library('template');
	}

	public function index_get()
	{
		$this->response([
			'status' => false,
			'message' => 'Page not found'
		], 404);
	}

	public function company_get()
	{
		if (!$this->get('id')) {
			$result = $this->api->__getCompany();
		}else{
			$result = $this->api->__getCompany(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			$this->response([
				'status' => true,
				'data' => $result
			], 200);
		}
	}

	public function company_post()
	{
		$config['upload_path'] = './uploads/company/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		$data = [
			'title_company' => $this->post('title'),
			'text_company' => $this->post('text')
		];
		if ($this->post('is_upload') == 'yes') {
			if ($this->upload->do_upload('foto')) {
				$data['foto_company'] = 'uploads/company/' . $this->upload->data('file_name');
				$this->db->update('m_company', $data, ['id' => $this->post('id')]);
				$this->response([
					'status' => true,
					'data' => $this->upload->data(),
					'message' => 'Berhasil mengubah data'
				], 200);
			}else{
				$this->response([
					'status' => false,
					'data' => $this->upload->display_errors(),
					'message' => 'Gagal merubah data file yang Anda upload tidak sesuai'
				], 200);
			}
		}else{
			$this->db->update('m_company', $data, ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'data' => $data,
				'message' => 'Berhasil mengubah data'
			], 200);
		}
	}

	public function struktur_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getStruktur();
		}else{
			$result = $this->api->__getStruktur(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'nama'=> $res->nama,
					'jabatan' => $res->jabatan,
					'foto' => $res->foto
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function struktur_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_struktur', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$config['upload_path'] = './uploads/struktur/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$data = [
				'nama' => $this->post('nama'),
				'jabatan' => $this->post('jabatan')
			];
			if ($this->post('is_upload') == 'yes') {
				if ($this->upload->do_upload('foto')) {
					$data['foto'] = 'uploads/struktur/' . $this->upload->data('file_name');
					if (!$this->post('id')) {
						$this->db->insert('m_struktur', $data);
					}else{
						$this->db->update('m_struktur', $data, ['id' => $this->post('id')]);
					}
					$this->response([
						'status' => true,
						'data' => $this->upload->data(),
						'message' => 'Tabel berhasil diperbaharui'
					], 200);
				}else{
					$this->response([
						'status' => false,
						'data' => $this->upload->display_errors(),
						'message' => 'Gagal merubah data file yang Anda upload tidak sesuai'
					], 200);
				}
			}else{
				if ($this->post('id') == "") {
					$this->db->insert('m_struktur', $data);
				}else{
					$this->db->update('m_struktur', $data, ['id' => $this->post('id')]);
				}
				$this->response([
					'status' => true,
					'data' => $data,
					'message' => 'Tabel berhasil diperbaharui'
				], 200);
			}
		}
	}

	public function moto_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getMoto();
		}else{
			$result = $this->api->__getMoto(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'moto'=> $res->moto,
					'index'=> $res->index_moto
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function moto_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_moto', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$data = [
				'moto' => $this->post('moto')
			];
			if ($this->post('id') == "") {
				$this->db->insert('m_moto', $data);
			}else{
				$this->db->update('m_moto', $data, ['id' => $this->post('id')]);
			}
			$this->response([
				'status' => true,
				'message' => 'Tabel berhasil diperbaharui'
			], 200);
		}
	}

	public function visi_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getVisi();
		}else{
			$result = $this->api->__getVisi(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'visi'=> $res->visi
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function visi_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_visi', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$data = [
				'visi' => $this->post('visi')
			];
			if ($this->post('id') == "") {
				$this->db->insert('m_visi', $data);
			}else{
				$this->db->update('m_visi', $data, ['id' => $this->post('id')]);
			}
			$this->response([
				'status' => true,
				'message' => 'Tabel berhasil diperbaharui'
			], 200);
		}
	}

	public function misi_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getMisi();
		}else{
			$result = $this->api->__getMisi(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'misi'=> $res->misi
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function misi_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_misi', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$data = [
				'misi' => $this->post('misi')
			];
			if ($this->post('id') == "") {
				$this->db->insert('m_misi', $data);
			}else{
				$this->db->update('m_misi', $data, ['id' => $this->post('id')]);
			}
			$this->response([
				'status' => true,
				'message' => 'Tabel berhasil diperbaharui'
			], 200);
		}
	}

	public function program_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getProgram();
		}else{
			$result = $this->api->__getProgram(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'title'=> $res->title_program,
					'deskripsi' => $res->deskripsi_program
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function program_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_program', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$data = [
				'title_program' => $this->post('judul'),
				'deskripsi_program' => $this->post('program')
			];
			if ($this->post('id') == "") {
				$this->db->insert('m_program', $data);
			}else{
				$this->db->update('m_program', $data, ['id' => $this->post('id')]);
			}
			$this->response([
				'status' => true,
				'message' => 'Tabel berhasil diperbaharui'
			], 200);
		}
	}

	public function programvideo_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getProgramVideo();
		}else{
			$result = $this->api->__getProgramVideo(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'thumb'=> $res->thumb,
					'video' => $res->video
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function programvideo_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_program_video', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$config['upload_path'] = './uploads/program/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['remove_spaces'] = TRUE;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$data = [
				'video' => $this->post('video')
			];
			if ($this->post('is_upload') == 'yes') {
				if ($this->upload->do_upload('foto')) {
					$data['thumb'] = 'uploads/program/' . $this->upload->data('file_name');
					if (!$this->post('id')) {
						$this->response([
							'status' => false,
							'message' => 'Silahkan pilih tabel yang akan diubah'
						], 200);
					}else{
						$this->db->update('m_program_video', $data, ['id' => $this->post('id')]);
					}
					$this->response([
						'status' => true,
						'data' => $this->upload->data(),
						'message' => 'Tabel berhasil diperbaharui'
					], 200);
				}else{
					$this->response([
						'status' => false,
						'data' => $this->upload->display_errors(),
						'message' => 'Gagal merubah data file yang Anda upload tidak sesuai'
					], 200);
				}
			}else{
				if ($this->post('id') == "") {
					$this->response([
						'status' => false,
						'message' => 'Silahkan pilih tabel yang akan diubah'
					], 200);
				}else{
					$this->db->update('m_program_video', $data, ['id' => $this->post('id')]);
				}
				$this->response([
					'status' => true,
					'data' => $data,
					'message' => 'Tabel berhasil diperbaharui'
				], 200);
			}
		}
	}

	public function produk_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getJasa();
		}else{
			$result = $this->api->__getJasa(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'title'=> $res->title_jasa,
					'deskripsi' => $res->deskripsi_jasa
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function produk_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_jasa', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$data = [
				'title_jasa' => $this->post('title'),
				'deskripsi_jasa' => $this->post('deskripsi')
			];
			if ($this->post('id') == "") {
				$this->db->insert('m_jasa', $data);
			}else{
				$this->db->update('m_jasa', $data, ['id' => $this->post('id')]);
			}
			$this->response([
				'status' => true,
				'message' => 'Tabel berhasil diperbaharui'
			], 200);
		}
	}

	public function kegiatan_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getKegiatan();
		}else{
			$result = $this->api->__getKegiatan(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'folder'=> $res->folder,
					'foto' => $res->file
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function kegiatan_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_galeri', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$data = [
				'folder' => $this->post('folder')
			];
			if (!file_exists('./uploads/kegiatan/' . $this->post('folder'))) {
				mkdir('./uploads/kegiatan/' . $this->post('folder'), 0777, true);
			}
			$config['upload_path'] = './uploads/kegiatan/' . $this->post('folder');
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['remove_spaces'] = TRUE;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) {
				$data['file'] = $this->upload->data('file_name');
				$this->db->insert('m_galeri', $data);
				$this->response([
					'status' => true,
					'data' => $this->upload->data(),
					'message' => 'Tabel berhasil diperbaharui'
				], 200);
			}else{
				$this->response([
					'status' => false,
					'data' => $this->upload->display_errors(),
					'message' => 'Gagal merubah data file yang Anda upload tidak sesuai'
				], 200);
			}
		}
	}

	public function banner_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getBanner();
		}else{
			$result = $this->api->__getBanner(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'is_active' => $res->is_active,
					'foto' => $res->slider
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function banner_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('m_slider', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$config['upload_path'] = './uploads/slider/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['remove_spaces'] = TRUE;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) {
				$data['slider'] = 'uploads/slider/'.$this->upload->data('file_name');
				$this->db->insert('m_slider', $data);
				$this->response([
					'status' => true,
					'data' => $this->upload->data(),
					'message' => 'Tabel berhasil diperbaharui'
				], 200);
			}else{
				$this->response([
					'status' => false,
					'data' => $this->upload->display_errors(),
					'message' => 'Gagal merubah data file yang Anda upload tidak sesuai'
				], 200);
			}
		}
	}

	public function contact_get()
	{
		$no = 1;
		$result = $this->api->__getContact();
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'tanggal' => $this->template->time_since(strtotime($res->tanggal)),
					'email' => $res->email,
					'subject' => $res->subject,
					'isi' => $res->isi,
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function users_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getUsers();
		}else{
			$result = $this->api->__getUsers(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'username'=> $res->username,
					'email' => $res->email,

				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function users_post()
	{
		if ($this->post('action') == "delete") {
			$this->db->delete('users', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			$data = [
				'email' => $this->post('email'),
				'username' => $this->post('username'),
				'password' => $this->post('password')
			];
			if ($this->post('id') == "") {
				$this->db->insert('users', $data);
			}else{
				$this->db->update('users', $data, ['id' => $this->post('id')]);
			}
			$this->response([
				'status' => true,
				'message' => 'Tabel berhasil diperbaharui'
			], 200);
		}
	}

	public function medsos_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getMedsos();
		}else{
			$result = $this->api->__getMedsos(['id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id,
					'email'=> $res->email_medsos,
					'telp' => $res->telp_medsos,
					'wa' => $res->wa_medsos,
					'fb' => $res->fb_medsos,
					'ig' => $res->ig_medsos,
					'yt' => $res->yt_medsos,

				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function medsos_post()
	{
		$data = [
			'email_medsos' => $this->post('email'),
			'telp_medsos' => $this->post('telp'),
			'wa_medsos' => $this->post('wa'),
			'fb_medsos' => $this->post('fb'),
			'ig_medsos' => $this->post('ig'),
			'yt_medsos' => $this->post('yt')
		];
		if ($this->post('id') == "") {
			$this->response([
				'status' => false,
				'message' => 'Silahkan pilih tabel yang akan diubah'
			], 200);
		}else{
			$this->db->update('m_medsos', $data, ['id' => $this->post('id')]);
		}
		$this->response([
			'status' => true,
			'message' => 'Tabel berhasil diperbaharui'
		], 200);
	}

	public function artikel_get()
	{
		$no = 1;
		if (!$this->get('id')) {
			$result = $this->api->__getNewsTable();
		}else{
			$result = $this->api->__getNewsTable(['artikel.id' => $this->get('id')]);
		}
		if (isset($result)) {
			foreach ($result as $res) {
				$data[] = [
					'no' => $no,
					'id' => $res->id_artikel,
					'author'=> $res->username,
					'judul' => $res->judul_artikel,
					'deskripsi' => $res->deskripsi_artikel,
					'konten' => file_get_contents('./uploads/artikel/' . $res->isi_artikel),
					'keywords' => $res->tag_artikel,
					'url' => 'http://pt-mak.co.id/artikel/detail/'.$res->url_artikel,
					'url_2' => $res->url_artikel
				];
				$no++;
			}
			$this->response([
				'status' => true,
				'data' => $data
			], 200);
		}
	}

	public function artikel_post()
	{
		$config['upload_path'] = './uploads/artikel/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['remove_spaces'] = TRUE;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->post('request') == 'delete') {
			$this->db->delete('artikel', ['id' => $this->post('id')]);
			$this->response([
				'status' => true,
				'message' => 'Data berhasil dihapus'
			], 200);
		}else{
			file_put_contents('./uploads/artikel/'. $this->post('url') .'.html', $this->post('konten'));
			$data = [
				'id_user' => $this->session->logged_in,
				'judul_artikel' => $this->post('judul'),
				'deskripsi_artikel' => $this->post('deskripsi'),
				'isi_artikel' => $this->post('url') . '.html',
				'tag_artikel' => $this->post('keywords'),
				'tgl_artikel' => date('Y-m-d H:i:s'),
				'url_artikel' => $this->post('url')
			];
			if ($this->post('is_upload') == 'yes') {
				if ($this->upload->do_upload('foto')) {
					$data['foto_artikel'] = $this->upload->data('file_name');
					if (!$this->post('id')) {
						$this->db->insert('artikel', $data);
					}else{
						$this->db->update('artikel', $data, ['id' => $this->post('id')]);
					}
					$this->response([
						'status' => true,
						'data' => $this->upload->data(),
						'message' => 'Tabel berhasil diperbaharui'
					], 200);
				}else{
					$this->response([
						'status' => false,
						'data' => $this->upload->display_errors(),
						'message' => 'Gagal merubah data file yang Anda upload tidak sesuai'
					], 200);
				}
			}else{
				if ($this->post('id') == "") {
					$this->db->insert('artikel', $data);
				}else{
					$this->db->update('artikel', $data, ['id' => $this->post('id')]);
				}
				$this->response([
					'status' => true,
					'data' => $data,
					'message' => 'Tabel berhasil diperbaharui'
				], 200);
			}
		}
	}

	public function login_post()
	{
		$input = file_get_contents("php://input");
		$input = json_decode($input);

		$where = [
			'email' => $input->id,
			'password' => $input->password
		];

		$result = $this->api->__login($where);


		if (isset($result)) {
			$data = [
				'myId' => $result->id,
				'myName' => $result->username,
				'myLevel' => $result->level,
				'logged_in' => true
			];
			
			$this->session->set_userdata($data);
			
			$this->response([
				'status' => true,
				'data' => $data,
				'message' => 'Login berhasil, tunggu beberapa saat'
			], 200);
		}else{
			$this->response([
				'status' => false,
				'message' => 'Login gagal, periksa kembali username & password Anda'
			], 200);
		}
	}

	public function sendkontak_post()
	{
		$input = file_get_contents("php://input");
		$input = json_decode($input);
		$data = [
			'nama' => $input->nama,
			'email' => $input->email,
			'subject' => $input->subject,
			'isi' => $input->isi
		];
		$this->db->insert('contact', $data);
		$this->response([
			'status' => true,
			'message' => 'Pesan berhasil dikirim'
		], 200);
	}

}

/* End of file Api.php */
/* Location: ./application/modules/api/controllers/Api.php */