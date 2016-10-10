<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi_pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pembayaran_model','pembayaran');
		if ($this->session->userdata('level_user') != 'petugas_pendakian')
		{
		 redirect('auth/users');
		}
	}

	public function index()
	{
		$data['pembayaran'] = $this->pembayaran->get_all();
		$this->template->petugas_pendakian('validasi_pembayaran','script', $data);
	}

	public function update($id_pembayaran = NULL)
	{
		$this->load->library('email');
 		
 		$this->form_validation->set_rules('nama', 'Atas Nama', 'trim|required'); // trigger
 		if($this->form_validation->run() == FALSE)
 		{
 			$data['pembayaran'] = $this->pembayaran->get_all();
			$this->template->petugas_pendakian('validasi_pembayaran','script', $data);
 		}
 		else
 		{		
			$to_email = $this->input->post('username');
			$subject = "Validasi Pembayaran dan ID SIMAKSI";
			$message = "Pembayaran telah divalidasi, ini adalah ID SIMAKSI yang digunakan waktu hari H";

			// configure email setting
			$config['protocol'] = 'smtp';
	        $config['smtp_host'] = 'ssl://smtp.gmail.com';
	        $config['smtp_port'] = '465';
	        $config['mailpath'] = '/usr/bin/sendmail';
	        $config['smtp_user'] = 'ahmaddjunaedi92@gmail.com';
	        $config['smtp_pass'] = 'junjunned';
	        $config['mailtype'] = 'html';
	        $config['charset'] = 'iso-8859-1';
	        $config['wordwrap'] = TRUE;
	        $config['newline'] = "\r\n"; //use double quotes
	        $this->email->initialize($config);

	        // send email
	        $this->email->from('ahmaddjunaedi92@gmail.com','Ahmad Djunaedi');
	        $this->email->to($to_email);
	        $this->email->subject($subject);
	        $this->email->message($message);

	        if($this->email->send())
			{
				$data = array(
					'status'	=> 'Valid'
					);
				$this->pembayaran->update_pembayaran($id_pembayaran, $data);
				$this->session->set_flashdata('update_pembayaran', 'Pembayaran berhasil divalidasi');
				redirect('petugas_pendakian/validasi_pembayaran');
			}
			else
			{
				print_r($this->email->print_debugger());
			}
 		}
	}
}

/* End of file Validasi_pembayaran.php */
/* Location: ./application/modules/petugas_pendakian/controllers/Validasi_pembayaran.php */