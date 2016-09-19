<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur_cibodas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jalur_cibodas_model','jalur_cibodas');

		// if ($this->session->userdata('level_user') != 'admin')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$data['jalur_cibodas'] = $this->jalur_cibodas->get_all();
		$this->template->admin('info_gunung/jalur_cibodas','script',$data);
	}

}

/* End of file Jalur_cibodas.php */
/* Location: ./application/modules/admin/controllers/info_gunung/Jalur_cibodas.php */