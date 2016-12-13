<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('grup_pendaki_model','grup_pendaki');
		$this->load->model('anggota_model','anggota');
		$this->load->model('provinsi_model','provinsi');
		$this->load->model('kota_model','kota');

		// if ($this->session->userdata('level') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		// di set_userdata file di auth/users
		$id = $this->session->userdata('id_user');

		// id berdasarkan user yang login
		$data['grup_pendaki'] = $this->grup_pendaki->grup_by_id($id);
		$data['provinsi'] = $this->provinsi->get_all();
		$data['kota'] = $this->kota->get_all();
		$this->template->pendaki('grup','script', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama_grup', 'Nama Grup', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$data['provinsi'] = $this->provinsi->get_all();
			$data['kota'] = $this->kota->get_all();
			$this->template->pendaki('add_grup','script', $data);
		}
		else
		{		
			// grup pendaki
			$grup_pendaki = array(
				'id_user'	=> $this->input->post('id_user'),
				'nama_grup'	=> $this->input->post('nama_grup')
				);
			$this->grup_pendaki->add_grup_pendaki($grup_pendaki);
			$id_grup_pendaki = $this->db->insert_id();

			// anggota grup pendaki
			$level_anggota = $this->input->post('level_anggota');
			for($i = 0; $i < count($level_anggota); $i++)
			{
				$anggota[] = array(
					'id_grup_pendaki'	=> $id_grup_pendaki,
					'level_anggota'		=> $level_anggota[$i],
					'no_identitas'		=> $this->input->post('no_identitas')[$i],
					'nama_anggota'		=> $this->input->post('nama_anggota')[$i],
					'alamat'			=> $this->input->post('alamat')[$i],
					'kota_id'			=> $this->input->post('kota_id')[$i],
					'email'				=> $this->input->post('email')[$i],
					'no_telp'			=> $this->input->post('no_telp')[$i]
					);
			}
			$this->anggota->add_anggota($anggota);
			$this->session->set_flashdata('add','Berhasil menambah grup pendaki');
			redirect('calon_pendaki/grup');
		}
	}

}

/* End of file Grup.php */
/* Location: ./application/modules/calon_pendaki/controllers/Grup.php */
/* biar add grup bisa harus tambah ob_start(); di file helpers/url_helper*/