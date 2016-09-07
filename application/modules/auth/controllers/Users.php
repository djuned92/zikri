<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
				'users_model'	=> 'users'
			));
	}

	//login
	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required'); // ini agar validation run == FALSE soalnya validation pake bootstrap validation
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');	
		} 
		else 
		{
			$check_username = $this->users->check_username(); // check username terdaftar atau tidak
			$check_status_user = $this->users->check_status_user(); // check status user aktif atau tidak aktif
			$valid_user = $this->users->check_credential(); // check username yang sudah terdaftar cocok tidak dengan password

			if($check_username == FALSE) // username tidak terdaftar
			{
				$this->session->set_flashdata('username_not_register','Username tidak terdaftar');
				redirect('auth/users');	
			}
			elseif($check_status_user == FALSE) // status user tidak aktif
			{
				$this->session->set_flashdata('status_tidak_aktif','Status user tidak aktif');
				redirect('auth/users');
			} 
			elseif ($valid_user == FALSE) // status user aktif dan terdaftar tapi salah password
			{
				$this->session->set_flashdata('wrong_password','Password salah');
				redirect('auth/users');	
			}
			else 
			{
				//login sukses
				$data = array(
					'id_user'		=> $valid_user->id_user,
					'username'		=> $valid_user->username,
					'level_user'	=> $valid_user->level_user,
					'status_user'	=> $valid_user->status
					);
				$this->session->set_userdata($data);
				
				switch (TRUE)
				{
					case ($valid_user->level_user == 'admin' && $valid_user->status_user == 'Aktif'):
						redirect('admin/home');
						break;
					case ($valid_user->level_user == 'calon_pendaki' && $valid_user->status_user == 'Aktif'):
						redirect('calon_pendaki/home');
						break;
					case ($valid_user->level_user == 'petugas_perijinan' && $valid_user->status_user == 'Aktif'):
						redirect('petugas_pendakian/home');
						break;
					case ($valid_user->level_user == 'kepala_balai' && $valid_user->status_user == 'Aktif'):
						redirect('kepala_balai/home');
						break;
					default : 
						break;
				}
			}
		}
	}

	//logout
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/users');
	}

	// buat pesan
	public function create_message()
	{
		$this->load->model('pesan_model','pesan');

		$this->form_validation->set_rules('username','Username','required'); // sebatas trigger bootstrap validation
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else 
		{
			$this->pesan->create_message();
			redirect('auth/users');
		}
	}
}