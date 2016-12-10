<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur_putri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jalur_putri_model','jalur_putri');
		$this->load->model('jadwal_pendakian_model','jadwal_pendakian');

		if ($this->session->userdata('level') != 'admin')
		{
			redirect('auth/users');
		}
	}

	public function index()
	{
		$data['jalur_putri'] = $this->jalur_putri->get_all();
		$data['status_jalur_pendakian'] = $this->jadwal_pendakian->get_status_jalur();
		$this->template->admin('info_gunung/jalur_putri','script',$data);
	}

	public function add()
	{
		$data = array(
			'id_jalur_pendakian'	=> 2,
			'kuota'					=> $this->input->post('kuota'),
			'status_jalur_pendakian'=> $this->input->post('status_jalur_pendakian'),
			'harga'					=> $this->input->post('harga'),
			'tanggal_pendakian'		=> $this->input->post('tanggal_pendakian')
			);
		$this->jadwal_pendakian->add($data);
		$this->session->set_flashdata('add', 'Jadwal jalur putri berhasil ditambah');
		redirect('admin/info_gunung/jalur_putri');
	}

	public function update($id)
	{
		$data = array(
			'id_jalur_pendakian'	=> 2,
			'kuota'					=> $this->input->post('kuota'),
			'status_jalur_pendakian'=> $this->input->post('status_jalur_pendakian'),
			'harga'					=> $this->input->post('harga'),
			'tanggal_pendakian'		=> $this->input->post('tanggal_pendakian')
			);
		$this->jadwal_pendakian->update($id, $data);
		$this->session->set_flashdata('add', 'Jadwal jalur putri berhasil diperbaharui');
		redirect('admin/info_gunung/jalur_putri');
	}

}

/* End of file Jalur_putri.php */
/* Location: ./application/modules/admin/controllers/info_gunung/Jalur_putri.php */