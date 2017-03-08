<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model','users');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function count()
	{
		$this->load->model('total_pendaki_model','total_pendaki');

		$total_pendaki = $this->total_pendaki->count_total_pendaki();
		$kuota = $this->total_pendaki->count_jadwal_pendakian();
		echo $kuota - $total_pendaki;

	}

	public function test_email()
	{
		$this->load->library('email');

			// $id_simaksi = $this->random_id_simaksi();
			$subject = "TEST";
			$message = "TEST ke 2";

			// configure email setting
			$config['protocol'] = 'smtp';
	        $config['smtp_host'] = 'ssl://smtp.gmail.com';
	        $config['smtp_port'] = '465';
	        $config['smtp_user'] = 'marzekal.123@gmail.com'; //bangzafran445@gmail.com
	        $config['smtp_pass'] = '123456zik'; //bastol1234567 
	        // $config['protocol'] = 'mail';
	        $config['mailpath'] = '/usr/sbin/sendmail';
	        $config['mailtype'] = 'html';
	        $config['charset'] = 'iso-8859-1';
	        $config['wordwrap'] = TRUE;
	        $config['newline'] = "\r\n"; //use double quotes
	        $this->email->initialize($config);

	        // send email
	        $this->email->from('marzekal.123@gmail.com','Marzekal Zikri');
	        $this->email->to('ahmaddjunaedi92@gmail.com');
	        $this->email->subject($subject);
	        $this->email->message($message);

	        if($this->email->send())
			{
				
				echo "Success";
			}
			else
			{
				print_r($this->email->print_debugger());
			}
 	
	}

}
