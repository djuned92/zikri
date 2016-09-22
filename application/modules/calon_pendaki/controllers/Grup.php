<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('grup_pendaki_model','grup_pendaki');

		// if ($this->session->userdata('level_user') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$this->template->pendaki('grup','script');
	}

}

/* End of file Grup.php */
/* Location: ./application/modules/calon_pendaki/controllers/Grup.php */