<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model','pegawai');
		$this->load->model('pendaki_model','pendaki');
		$this->load->model('users_model','users');
		$this->load->model('jabatan_model','jabatan');
		$this->load->model('provinsi_model','provinsi');
		$this->load->model('kota_model','kota');
		
		if ($this->session->userdata('level') != 'admin')
		{
			redirect('auth/users');
		}
	}

	public function index()
	{
		$data['pegawai'] = $this->pegawai->get_all();
		$data['jabatan'] = $this->jabatan->get_all();
		$data['provinsi'] = $this->provinsi->get_all();
		$data['kota'] = $this->kota->get_all();
		$data['grup_pendaki'] = $this->pendaki->get_all();
		$this->template->admin('kelola_user','script', $data);
	}

	public function add()
	{
		$this->load->helper('security');	
		
		$data_user = array(
			'username'		=> $this->input->post('username'),
			'level'			=> $this->input->post('level'),
			'password'		=> do_hash($this->input->post('password')),
			'status_user'	=> 'Aktif'
			);

		$data_pegawai = array(
			'id_pegawai'	=> $this->input->post('id_pegawai'),
			'id_jabatan'	=> $this->input->post('id_jabatan'),
			'kota_id'		=> $this->input->post('kota_id'),
			'nama'			=> $this->input->post('nama'),
			'alamat'		=> $this->input->post('alamat'),
			'tgl_lahir'		=> $this->input->post('tgl_lahir')
			);
		$this->users->add_user($data_user, $data_pegawai);
		$this->session->set_flashdata('add_user','User berhasil ditambah');
		redirect('admin/kelola_user');
	}

	public function update($id)
	{
		$this->load->helper('security');	
		
		$data_user = array(
			'username'		=> $this->input->post('username'),
			'level'			=> $this->input->post('level'),
			'password'		=> do_hash($this->input->post('password')),
			'status_user'	=> 'Aktif'
			);

		$data_pegawai = array(
			'id_pegawai'	=> $this->input->post('id_pegawai'),
			'id_jabatan'	=> $this->input->post('id_jabatan'),
			'kota_id'		=> $this->input->post('kota_id'),
			'nama'			=> $this->input->post('nama'),
			'alamat'		=> $this->input->post('alamat'),
			'tgl_lahir'		=> $this->input->post('tgl_lahir')
			);
		$this->users->update_user($id, $data_user, $data_pegawai);
		$this->session->set_flashdata('update_user','User berhasil diperbaharui');
		redirect('admin/kelola_user');	
	}

	public function update_grup_pendaki($id)
	{
		$data_grup_pendaki = array(
			'nama_grup'		=> $this->input->post('nama_grup'),
			'alamat'		=> $this->input->post('alamat'),
			'kota_id'		=> $this->input->post('kota_id')
			);
		$this->users->update_grup_pendaki($id, $data_grup_pendaki);
		$this->session->set_flashdata('update_grup_pendaki','Grup pendaki berhasil diperbaharui');
		redirect('admin/kelola_user');		
	}

	public function delete($id)
	{
		$this->users->delete_user($id);
		$this->session->set_flashdata('delete_user', 'User berhasil dihapus');
		redirect('admin/kelola_user');
	}

	public function delete_grup_pendaki($id)
	{
		$this->users->delete_grup_pendaki($id);
		$this->session->set_flashdata('delete_grup_pendaki', 'Grup pendaki berhasil dihapus');
		redirect('admin/kelola_user');	
	}

}

/* End of file Kelola_user.php */
/* Location: ./application/modules/admin/controllers/Kelola_user.php */