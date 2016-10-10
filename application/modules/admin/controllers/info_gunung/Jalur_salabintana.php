<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur_salabintana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jalur_salabintana_model','jalur_salabintana');

		if ($this->session->userdata('level_user') != 'admin')
		{
			redirect('auth/users');
		}
	}

	public function index()
	{
		$data['jalur_salabintana'] = $this->jalur_salabintana->get_all();
		$this->template->admin('info_gunung/jalur_salabintana','script',$data);
	}

}

/* End of file Jalur_salabintana.php */
/* Location: ./application/modules/admin/controllers/info_gunung/Jalur_salabintana.php */