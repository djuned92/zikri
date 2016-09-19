<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur_putri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jalur_putri_model','jalur_putri');

		// if ($this->session->userdata('level_user') != 'admin')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$data['jalur_putri'] = $this->jalur_putri->get_all();
		$this->template->admin('info_gunung/jalur_putri','script',$data);
	}


}

/* End of file Jalur_putri.php */
/* Location: ./application/modules/admin/controllers/info_gunung/Jalur_putri.php */