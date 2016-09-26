<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'boking_model'		=> 'boking',
			'grup_pendaki_model'		=> 'grup_pendaki',
			'jadwal_pendakian_model' => 'jadwal_pendakian'
			));

		// if ($this->session->userdata('level_user') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index($id_jadwal_pendakian = NULL)
	{
		// diset_userdata file di auth/users
		$id = $this->session->userdata('id_user');

		// id berdasarkan user yang login
		$data['grup_pendaki'] = $this->grup_pendaki->grup_by_id($id);
		$data['boking'] = $this->jadwal_pendakian->get_id_jadwal_pendakian($id_jadwal_pendakian);
		$data['total_pendaki'] = $this->boking->total_pendaki(6);
		$this->template->pendaki('boking','script', $data);
	}

	public function add()
	{
		// boking
		$boking = array(
			'id_jadwal_pendakian'	=> $this->input->post('id_jadwal_pendakian'),
			'id_grup_pendaki'		=> $this->input->post('id_grup_pendaki'),
			'tgl_boking'			=> $this->input->post('tgl_boking'),
			'status'				=> 'Pending'
			);

		$this->boking->add_boking($boking);
		$this->session->set_flashdata('success_boking','Boking telah berhasil');
		redirect('calon_pendaki/home');
	}

}

/* End of file Boking.php */
/* Location: ./application/modules/calon_pendaki/controllers/Boking.php */