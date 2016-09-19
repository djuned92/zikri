<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_gunung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'info_gunung_model' => 'info_gunung',
			'provinsi_model'	=> 'provinsi',
			'kota_model'		=> 'kota'
			));

		// if ($this->session->userdata('level_user') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$data ['tanggal_kuota'] = $this->info_gunung->get_tanggal_kuota();
		$data['provinsi'] = $this->provinsi->get_all();
		$data['kota'] = $this->kota->get_all();
		$this->template->pendaki('info_gunung','script',$data);
	}

}

/* End of file Info_gunung.php */
/* Location: ./application/modules/calon_pendaki/controllers/Info_gunung.php */