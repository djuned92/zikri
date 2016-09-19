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
			'info_gunung_model' => 'info_gunung'
			));

		// if ($this->session->userdata('level_user') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index($id_kuota)
	{
		$data['boking'] = $this->info_gunung->get_id_kuota($id_kuota);
		$data['provinsi'] = $this->provinsi->get_all();
		$data['kota'] = $this->kota->get_all();
		$this->template->pendaki('boking','script', $data);
	}

}

/* End of file Boking.php */
/* Location: ./application/modules/calon_pendaki/controllers/Boking.php */