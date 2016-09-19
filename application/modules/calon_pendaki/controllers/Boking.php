<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'boking_model'		=> 'boking',
			'provinsi_model'	=> 'provinsi',
			'kota_model'		=> 'kota',
			'jadwal_pendakian_model' => 'jadwal_pendakian'
			));

		// if ($this->session->userdata('level_user') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index($id_jadwal_pendakian = NULL)
	{
		$data['boking'] = $this->jadwal_pendakian->get_id_jadwal_pendakian($id_jadwal_pendakian);
		$data['provinsi'] = $this->provinsi->get_all();
		$data['kota'] = $this->kota->get_all();
		$this->template->pendaki('boking','script', $data);
	}

	public function add()
	{
		
	}

}

/* End of file Boking.php */
/* Location: ./application/modules/calon_pendaki/controllers/Boking.php */