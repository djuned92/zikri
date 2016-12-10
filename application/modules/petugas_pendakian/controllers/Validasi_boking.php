<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi_boking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('boking_model','boking');
		$this->load->model('pendaki_model','pendaki');

		if ($this->session->userdata('level') != 'petugas_pendakian')
		{
		 redirect('auth/users');
		}
	}
	
	public function index()
	{
		$data['boking'] = $this->boking->get_all();
		$data['grup_pendaki'] = $this->pendaki->get_all();
		$this->template->petugas_pendakian('validasi_boking','script', $data);
	}

	public function jalur_cibodas()
	{
		$data['boking'] = $this->boking->boking_cibodas();
		$data['grup_pendaki'] = $this->pendaki->get_all();
		$this->template->petugas_pendakian('validasi_boking/jalur_cibodas','script', $data);
	}

	public function jalur_putri()
	{
		$data['boking'] = $this->boking->boking_putri();
		$data['grup_pendaki'] = $this->pendaki->get_all();
		$this->template->petugas_pendakian('validasi_boking/jalur_putri','script', $data);
	}

	public function jalur_salabintana()
	{
		$data['boking'] = $this->boking->boking_salabintana();
		$data['grup_pendaki'] = $this->pendaki->get_all();
		$this->template->petugas_pendakian('validasi_boking/jalur_salabintana','script', $data);
	}

	public function boking_valid($id_boking = NULL)
	{
		$this->load->library('email');
 		
 		$this->form_validation->set_rules('username', 'Username', 'trim|required');
 		if($this->form_validation->run() == FALSE)
 		{
 			$this->uri->segment(3);
 		}
 		else
 		{
 			$kode_boking = $this->input->post('kode_boking');		
		
			$to_email = $this->input->post('username');
			$subject = "Boking";
			$message = "Boking telah divalidasi dengan kode boking $kode_boking, segera melakukan pembayaran 1 x 24 jam";

			// configure email setting
			$config['protocol'] = 'smtp';
	        $config['smtp_host'] = 'ssl://smtp.gmail.com';
	        $config['smtp_port'] = '465';
	        $config['smtp_user'] = 'ahmaddjunaedi92@gmail.com'; //bangzafran445@gmail.com
	        $config['smtp_pass'] = 'junjunned92'; //bastol1234567 
	        // $config['protocol'] = 'mail';
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
				// boking
				$data = array(
					'status'				=> 'Boking Valid'
					);
				$uri = $this->input->post('uri_segment');

				$this->boking->update_boking($id_boking, $data);
				$this->session->set_flashdata('boking','Status boking berhasil diperbaharui');
				redirect('petugas_pendakian/validasi_boking/'.$uri);
			}
			else
			{
				print_r($this->email->print_debugger());
			}
 		}
	}

	public function boking_not_valid($id_boking = NULL)
	{
		$this->load->library('email');
 		
 		$this->form_validation->set_rules('username', 'Username', 'trim|required');
 		if($this->form_validation->run() == FALSE)
 		{
 			$this->uri->segment(3);
 		}
 		else
 		{
 			$this->load->library('email');
	 				
			$to_email = $this->input->post('username');
			$subject = "Boking";
			$message = "Boking tidak valid!!";

			// configure email setting
			$config['protocol'] = 'smtp';
	        $config['smtp_host'] = 'ssl://smtp.gmail.com';
	        $config['smtp_port'] = '465';
	        $config['smtp_user'] = 'ahmaddjunaedi92@gmail.com'; //bangzafran445@gmail.com
	        $config['smtp_pass'] = 'junjunned92'; //bastol1234567 
	        // $config['protocol'] = 'mail';
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
				// boking
				$data = array(
					'status'				=> 'Boking Tidak Valid'
					);
				$uri = $this->input->post('uri_segment');

				$this->boking->update_boking($id_boking, $data);
				$this->session->set_flashdata('boking','Status boking berhasil diperbaharui');
				redirect('petugas_pendakian/validasi_boking/'.$uri);
			}
			else
			{
				print_r($this->email->print_debugger());
			}	
 		}
	}

}

/* End of file Validasi_boking.php */
/* Location: ./application/modules/petugas_pendakian/controllers/Validasi_boking.php */