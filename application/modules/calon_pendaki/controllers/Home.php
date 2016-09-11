<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('level_user') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$this->template->pendaki('index','script');
	}

}

/* End of file Home.php */
/* Location: ./application/modules/calon_pendaki/controllers/Home.php */