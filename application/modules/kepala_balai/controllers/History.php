<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('grup_pendaki_model','grup_pendaki');

		if ($this->session->userdata('level_user') != 'kepala_balai')
	    {
	     redirect('auth/users');
	    }
	}

	public function index()
	{
		$data['history_grup'] = $this->grup_pendaki->history_grup();
		$this->template->kepala_balai('history','script', $data);
	}

}

/* End of file History.php */
/* Location: ./application/modules/kepala_balai/controllers/History.php */