<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('berita_model','berita');

		// if ($this->session->userdata('level_user') != 'petugas_pendakian')
		// {
		//  redirect('auth/users');
		// }
	}

	public function index()
	{
		$data['berita'] = $this->berita->get_all();
		$this->template->petugas_pendakian('index','script', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/modules/petugas_pendakian/controllers/Home.php */