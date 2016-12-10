<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'boking_model'		=> 'boking',
			'grup_pendaki_model'		=> 'grup_pendaki',
			'jadwal_pendakian_model' => 'jadwal_pendakian'
			));

		// if ($this->session->userdata('level') != 'calon_pendaki')
		// {
		// 	redirect('auth/users');
		// }
	}

	public function index($id_jadwal_pendakian = NULL)
	{
		// diset_userdata file di auth/users
		$id = $this->session->userdata('id_user');

		// id berdasarkan user yang login
		$data['grup_pendaki'] = $this->grup_pendaki->grup_by_id($id);
		$data['email'] = $this->grup_pendaki->email_by_id($id);
		$data['boking'] = $this->jadwal_pendakian->get_id_jadwal_pendakian($id_jadwal_pendakian);
		$data['total_pendaki'] = $this->boking->total_pendaki(6);
		$this->template->pendaki('boking','script', $data);
	}

	public function total_pendaki($id)
	{
		$id_grup_pendaki = $id;
		$total_pendaki = $this->boking->total_pendaki($id_grup_pendaki);
		echo $total_pendaki;
		// echo json_encode($total_pendaki);
	}

	public function add()
	{
		$this->form_validation->set_rules('id_grup_pendaki', 'ID GRUP PENDAKI', 'required');
		$this->form_validation->set_rules('id_jadwal_pendakian', 'ID JADWAL PENDAKIAN', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$id_jadwal_pendakian = $this->input->post('id_jadwal_pendakian');
			redirect('calon_pendaki/boking/index'.$id_jadwal_pendakian);
		}
		else
		{
			// kode boking
			$kode_jalur = $this->input->post('kode_jalur');
			$id_grup_pendaki = $this->input->post('id_grup_pendaki');
			$kode_boking = $kode_jalur.'-'.$this->random_kode_boking();

			// boking
			$boking = array(
				'id_jadwal_pendakian'	=> $this->input->post('id_jadwal_pendakian'),
				'kode_boking'			=> $kode_boking,
				'id_grup_pendaki'		=> $id_grup_pendaki,
				'total_pendaki'			=> $this->input->post('total_pendaki'),
				'tgl_boking'			=> $this->input->post('tgl_boking'),
				'total_harga'			=> $this->input->post('total_harga'),
				'status'				=> 'Pending'
				);
			$id_jadwal_pendakian = $this->input->post('id_jadwal_pendakian');

			$this->boking->add_boking($boking);
			// $this->session->set_flashdata('success_boking','Boking telah berhasil silahkan cek email untuk mendapatkan informasi lebih lanjut');
			$this->session->set_flashdata('success_boking','Boking telah berhasil dilakukan, untuk info lebih lanjut kami akan segera mengirimkan email');
			redirect('calon_pendaki/boking/index/'.$id_jadwal_pendakian);

		}
		
		// $date = date('d/m/Y');
		// $this->load->library('email');

		// // kode boking
		
		// // $kode_jalur = $this->input->post('kode_jalur');
		// // $tanggal_pendakian = date_create($this->input->post('tanggal_pendakian'));
		// // $date_format = date_format($tanggal_pendakian, "dmY");
		// // $id_grup_pendaki = $this->input->post('id_grup_pendaki');
		// // $kode_boking = $kode_jalur.'-'.$date_format.'-'.$id_grup_pendaki;

		// $kode_jalur = $this->input->post('kode_jalur');
		// $id_grup_pendaki = $this->input->post('id_grup_pendaki');
		// $kode_boking = $kode_jalur.'-'.$this->random_kode_boking(); 
		
		// $to_email = $this->input->post('username');
		// $subject = "Boking";
		// $message = "Anda telah mendaftar pada tanggal $date dengan kode boking $kode_boking";

		// // configure email setting
		// $config['protocol'] = 'smtp';
  //       $config['smtp_host'] = 'ssl://smtp.gmail.com';
  //       $config['smtp_port'] = '465';
  //       $config['mailpath'] = '/usr/bin/sendmail';
  //       $config['smtp_user'] = 'ahmaddjunaedi92@gmail.com';
  //       $config['smtp_pass'] = 'junjunned';
  //       $config['mailtype'] = 'html';
  //       $config['charset'] = 'iso-8859-1';
  //       $config['wordwrap'] = TRUE;
  //       $config['newline'] = "\r\n"; //use double quotes
  //       $this->email->initialize($config);

  //       // send email
  //       $this->email->from('ahmaddjunaedi92@gmail.com','Ahmad Djunaedi');
  //       $this->email->to($to_email);
  //       $this->email->subject($subject);
  //       $this->email->message($message);

  //       if($this->email->send())
		// {
			
		// 	// boking
		// 	$boking = array(
		// 		'id_jadwal_pendakian'	=> $this->input->post('id_jadwal_pendakian'),
		// 		'kode_boking'			=> $kode_boking,
		// 		'id_grup_pendaki'		=> $id_grup_pendaki,
		// 		'total_pendaki'			=> $this->input->post('total_pendaki'),
		// 		'tgl_boking'			=> $this->input->post('tgl_boking'),
		// 		'total_harga'			=> $this->input->post('total_harga'),
		// 		'status'				=> 'Pending'
		// 		);
		// 	$id_jadwal_pendakian = $this->input->post('id_jadwal_pendakian');
	
		// 	$this->boking->add_boking($boking);
		// 	// $this->session->set_flashdata('success_boking','Boking telah berhasil silahkan cek email untuk mendapatkan informasi lebih lanjut');
		// 	$this->session->set_flashdata('success_boking','Boking telah berhasil dilakukan, untuk info lebih lanjut kami akan segera mengirimkan email');
		// 	redirect('calon_pendaki/boking/index/'.$id_jadwal_pendakian);
		// }
		// else
		// {
		// 	print_r($this->email->print_debugger());
		// }
	}

	public function random_kode_boking($length = 6)
	{
		return substr(str_shuffle(implode(array_merge(range(0,9), range('A', 'Z'), range('a', 'z')))), 0, $length);
	}

}

/* End of file Boking.php */
/* Location: ./application/modules/calon_pendaki/controllers/Boking.php */