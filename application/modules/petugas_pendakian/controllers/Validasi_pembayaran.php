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

	public function pembayaran_valid($id_pembayaran = NULL)
	{
		$this->load->library('email');
 		
 		$this->form_validation->set_rules('username', 'Email', 'trim|required'); // trigger
 		if($this->form_validation->run() == FALSE)
 		{
 			$data['pembayaran'] = $this->pembayaran->get_all();
			$this->template->petugas_pendakian('validasi_pembayaran','script', $data);
 		}
 		else
 		{		
			$to_email = $this->input->post('username');
			$id_simaksi = $this->random_id_simaksi();
			$subject = "Validasi Pembayaran dan ID SIMAKSI";
			$message = "Pembayaran telah divalidasi, $id_simaksi ini adalah ID SIMAKSI yang digunakan waktu hari H";

			// configure email setting
			// $config['protocol'] = 'smtp';
	        // $config['smtp_host'] = 'ssl://smtp.gmail.com';
	        // $config['smtp_port'] = '465';
	        // $config['smtp_user'] = 'ahmaddjunaedi92@gmail.com'; //bangzafran445@gmail.com
	        // $config['smtp_pass'] = 'junjunned'; //bastol1234567 
	        $config['protocol'] = 'mail';
	        $config['mailpath'] = '/usr/sbin/sendmail';
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
				// $this->session->set_flashdata('update_pembayaran', 'Pembayaran berhasil divalidasi');
				$this->session->set_flashdata('update', 'Status pembayaran berhasil diperbaharui');
				redirect('petugas_pendakian/validasi_pembayaran');
			}
			else
			{
				print_r($this->email->print_debugger());
			}
 		}
	}

	public function pembayaran_not_valid($id_pembayaran = NULL)
	{
		$this->load->library('email');
 		
 		$this->form_validation->set_rules('username', 'Email', 'trim|required'); // trigger
 		if($this->form_validation->run() == FALSE)
 		{
 			$data['pembayaran'] = $this->pembayaran->get_all();
			$this->template->petugas_pendakian('validasi_pembayaran','script', $data);
 		}
 		else
 		{		
			$to_email = $this->input->post('username');
			$subject = "Validasi Pembayaran";
			$message = "Pembayaran tidak valid, segera melakukan pembayaran ulang";

			// configure email setting
			// $config['protocol'] = 'smtp';
	        // $config['smtp_host'] = 'ssl://smtp.gmail.com';
	        // $config['smtp_port'] = '465';
	        // $config['smtp_user'] = 'ahmaddjunaedi92@gmail.com'; //bangzafran445@gmail.com
	        // $config['smtp_pass'] = 'junjunned'; //bastol1234567 
	        $config['protocol'] = 'mail';
	        $config['mailpath'] = '/usr/sbin/sendmail';
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
					'status'	=> 'Tidak Valid'
					);
				$this->pembayaran->update_pembayaran($id_pembayaran, $data);
				$this->session->set_flashdata('update', 'Status pembayaran berhasil diperbaharui');
				redirect('petugas_pendakian/validasi_pembayaran');
			}
			else
			{
				print_r($this->email->print_debugger());
			}
 		}
	}

	public function random_id_simaksi($length = 6)
	{
		return substr(str_shuffle(implode(array_merge(range(0,9), range('A', 'Z'), range('a', 'z')))), 0, $length);
	}
}

/* End of file Validasi_pembayaran.php */
/* Location: ./application/modules/petugas_pendakian/controllers/Validasi_pembayaran.php */