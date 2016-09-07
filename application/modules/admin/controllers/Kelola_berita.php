<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model','berita');

		// if ($this->session->userdata('level_user') != 'admin')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$data['berita'] = $this->berita->get_all();
		$this->template->admin('kelola_berita','script',$data);
	}

	public function lihat_berita($id)
	{
		$data['berita'] = $this->berita->get_by_id($id);
		$this->template->admin('lihat_berita','script',$data);
	}

	public function add()
	{
		$data = array(
			'judul'	=> $this->input->post('judul'),
			'isi'	=> $this->input->post('isi')
			);
		$this->berita->add_berita($data);
		$this->session->set_flashdata('add','Berita berhasil ditambah');
		redirect('admin/kelola_berita');
	}

	public function update($id)
	{
		$data = array(
			'judul'	=> $this->input->post('judul'),
			'isi'	=> $this->input->post('isi')
			);
		$this->berita->update_berita($id, $data);
		$this->session->set_flashdata('update','Berita berhasil diperbaharui');
		redirect('admin/kelola_berita');
	}

	public function delete($id)
	{
		$this->berita->delete_berita($id);
		$this->session->set_flashdata('update','Berita berhasil dihapus');
		redirect('admin/kelola_berita');
	}
}

/* End of file Kelola_berita.php */
/* Location: ./application/modules/admin/controllers/Kelola_berita.php */