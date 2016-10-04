<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihat_berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model', 'berita');

		// if ($this->session->userdata('level_user') != 'petugas_pendakian')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index($id)
	{
		$data['berita'] = $this->berita->get_by_id($id);
		$this->template->petugas_pendakian('lihat_berita','script',$data);		
	}

}

/* End of file Lihat_berita.php */
/* Location: ./application/modules/petugas_pendakian/controllers/Lihat_berita.php */