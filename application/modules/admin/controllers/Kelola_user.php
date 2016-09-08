<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model','pegawai');
		$this->load->model('pendaki_model','pendaki');
		// if ($this->session->userdata('level_user') != 'admin')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$data['pegawai'] = $this->pegawai->get_all();
		$data['grup_pendaki'] = $this->pendaki->get_all();
		$this->template->admin('kelola_user','script', $data);
	}

}

/* End of file Kelola_user.php */
/* Location: ./application/modules/admin/controllers/Kelola_user.php */