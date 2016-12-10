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
					'level'			=> $valid_user->level,
					'status_user'	=> $valid_user->status_user,
					'status_login'	=> 'login'
					);
				$this->session->set_userdata($data);
				
				switch (TRUE)
				{
					case ($valid_user->level == 'admin' && $valid_user->status_user == 'Aktif'):
						redirect('admin/home');
						break;
					case ($valid_user->level == 'calon_pendaki' && $valid_user->status_user == 'Aktif'):
						redirect('calon_pendaki/home');
						break;
					case ($valid_user->level == 'petugas_pendakian' && $valid_user->status_user == 'Aktif'):
						redirect('petugas_pendakian/home');
						break;
					case ($valid_user->level == 'kepala_balai' && $valid_user->status_user == 'Aktif'):
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

	public function register()
	{
		$this->load->helper('security');

		$this->form_validation->set_rules('username', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('register');	
		}
		else 
		{
			// data user
			$data_user = array(
				'username'	=> $this->input->post('username'),
				'password'	=> do_hash($this->input->post('password')),
				'level'=> 'calon_pendaki'
				);

			$this->users->register($data_user);
			redirect('auth/users');
		}
		
	}
}