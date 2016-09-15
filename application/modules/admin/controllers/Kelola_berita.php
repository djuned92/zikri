<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model','berita');

		// if ($this->session->userdata('level_user') != 'admin')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$data['berita'] = $this->berita->get_all();
		$this->template->admin('kelola_berita','script',$data);
	}

	public function lihat_berita($id)
	{
		$data['berita'] = $this->berita->get_by_id($id);
		$this->template->admin('lihat_berita','script',$data);
	}

	public function add()
	{
		$this->form_validation->set_rules('judul','Judul','required'); // sebatas trigger
		if($this->form_validation->run() == FALSE)
		{
			$this->template->admin($this->index());
		}
		else
		{
			$config['upload_path']          = './assets/img/';
	        $config['allowed_types']        = 'jpg|png';
	        $config['max_size']             = 1024*10; // 10 mb
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
			
			$this->upload->initialize($config); // $this->load->library('upload', $config) karena gk bisa. pake yang $this->upload->initialize($config);

	       	if ( ! $this->upload->do_upload('userfile'))
	        {
	        	//file gagal di upload -> kembali ke form tambah
	        	$error = array('error' => $this->upload->display_errors());
	        	echo $error;
	        }
	        else
	        {
	        	$data = array(
					'judul'	=> $this->input->post('judul'),
					'isi'	=> nl2br($this->input->post('isi')),
					'gambar'=> $this->upload->data('file_name')
					);
				$this->berita->add_berita($data);
				$this->session->set_flashdata('add','Berita berhasil ditambah');
				redirect('admin/kelola_berita');	
	        }
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('judul','Judul','required'); // sebatas trigger
		if($this->form_validation->run() == FALSE)
		{
			$this->template->admin($this->index());
		}
		else
		{
			if($_FILES['userfile']['name'] != '') // dengan gambar diisi
			{
			$config['upload_path']          = './assets/img/';
	        $config['allowed_types']        = 'jpg|png';
	        $config['max_size']             = 1024*10; // 10 mb
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
			
			$this->upload->initialize($config); // $this->load->library('upload', $config) karena gk bisa. pake yang $this->upload->initialize($config);

		       	if ( ! $this->upload->do_upload('userfile'))
		        {
		        	//file gagal di upload -> kembali ke form tambah
		        	$error = array('error' => $this->upload->display_errors());
		        	echo $error;
		        }
		        else
		        {
		        	$data = array(
						'judul'	=> $this->input->post('judul'),
						'isi'	=> nl2br($this->input->post('isi')),
						'gambar'=> $this->upload->data('file_name')
						);
					$this->berita->update_berita($id, $data);
					$this->session->set_flashdata('update','Berita berhasil diperbaharui');
					redirect('admin/kelola_berita');
		        }
	        }
	        else // tanpa gambar diisi
	        {
	        	$data = array(
					'judul'	=> $this->input->post('judul'),
					'isi'	=> nl2br($this->input->post('isi'))
					);
				$this->berita->update_berita($id, $data);
				$this->session->set_flashdata('update','Berita berhasil diperbaharui');
				redirect('admin/kelola_berita');
	        }
		}
	}

	public function delete($id)
	{
		$this->berita->delete_berita($id);
		$this->session->set_flashdata('update','Berita berhasil dihapus');
		redirect('admin/kelola_berita');
	}
}

/* End of file Kelola_berita.php */
/* Location: ./application/modules/admin/controllers/Kelola_berita.php */