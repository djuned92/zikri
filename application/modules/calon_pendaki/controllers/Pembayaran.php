<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('boking_model','boking');
		$this->load->model('pembayaran_model','pembayaran');

		// if ($this->session->userdata('level_user') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index()
	{
		$this->template->pendaki('pembayaran', 'script');
	}

	public function add($kode_boking = NULL)
	{
		$this->form_validation->set_rules('nama','Nama Penyetor','required'); // sebatas trigger
		if($this->form_validation->run() == FALSE)
		{
			$data['boking'] = $this->boking->boking_by_kode_boking($kode_boking);
			$this->template->pendaki('pembayaran_boking','script', $data);
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
					'id_boking'			=> $this->input->post('id_boking'),
					'nama'				=> $this->input->post('nama'),
					'tanggal_bayar'		=> $this->input->post('tanggal_bayar'),
					'nominal_transfer'	=> $this->input->post('nominal_transfer'),
					'bukti_transfer'	=> $this->upload->data('file_name'),
					'status_pembayaran'	=> 'Pending'
					);
				$this->pembayaran->add_pembayaran($data);
				$this->session->set_flashdata('add','Terima kasih telah melakukan pembayaran, informasi lebih lanjut akan kami infokan lewat email');
				redirect('calon_pendaki/pembayaran');	
	        }
		}
	}

	public function check_kode_boking()
	{
		$kode_boking = $this->input->post('kode_boking');
		$valid_kode_boking = $this->boking->check_kode_boking($kode_boking);
		if(isset($valid_kode_boking)) // untuk dapet id_boking
		{
			$id_boking =  $valid_kode_boking['id_boking'];
		}

		if($valid_kode_boking == FALSE) // chcek kode boking ada apa enggak di table boking
		{
			$this->session->set_flashdata('wrong_kode_boking','Kode boking salah');
			redirect('calon_pendaki/pembayaran');
		}
		else
		{
			// check kode boking ada tidak di table pembayaran
			$boking_at_table_pembayaran = $this->boking->boking_at_table_pembayaran($id_boking);
			if($boking_at_table_pembayaran == TRUE)
			{
				$this->session->set_flashdata('proses','Pembayaran sedang diproses, untuk info lebih lanjut kami akan segera mengirimkan email');
				redirect('calon_pendaki/pembayaran');
			}
			else
			{
				redirect('calon_pendaki/pembayaran/add/'.$kode_boking);
			}
		}		
	}
}

/* End of file Pembayaran.php */
/* Location: ./application/modules/calon_pendaki/controllers/Pembayaran.php */