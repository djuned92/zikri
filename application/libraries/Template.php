<?php

class Template {
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('parser');
	}

	public function admin($content, $script = NULL, $data = NULL)
	{
		$data = array(
			'head'			=> $this->CI->load->view('template/admin/head', $data, TRUE),
			'navbar-top'	=> $this->CI->load->view('template/admin/navbar-top', $data, TRUE),
			'navbar-sidebar'=> $this->CI->load->view('template/admin/navbar-sidebar', $data, TRUE),
			'content'		=> $this->CI->load->view($content, $data, TRUE),
			'footer'		=> $this->CI->load->view('template/admin/footer', $data, TRUE),
			'script'		=> $this->CI->load->view('template/admin/script', $data, TRUE)
			);
		
		if ($script != NULL) 
		{
			$data['mod-script'] = $this->CI->load->view($script, $data, TRUE);
		}
		
		$this->CI->parser->parse('template/admin/index', $data);
	}

	public function pendaki($content, $script = NULL, $data = NULL)
	{
		$data = array(
			'head'			=> $this->CI->load->view('template/pendaki/head', $data, TRUE),
			'navbar-top'	=> $this->CI->load->view('template/pendaki/navbar-top', $data, TRUE),
			'content'		=> $this->CI->load->view($content, $data, TRUE),
			// 'footer'		=> $this->CI->load->view('template/pendaki/footer', $data, TRUE),
			'script'		=> $this->CI->load->view('template/pendaki/script', $data, TRUE)
			);
		
		if ($script != NULL) 
		{
			$data['mod-script'] = $this->CI->load->view($script, $data, TRUE);
		}
		
		$this->CI->parser->parse('template/pendaki/index', $data);
	}

	public function kepala_balai($content, $script = NULL, $data = NULL)
	{
		$data = array(
			'head'			=> $this->CI->load->view('template/kepala_balai/head', $data, TRUE),
			'navbar-top'	=> $this->CI->load->view('template/kepala_balai/navbar-top', $data, TRUE),
			'content'		=> $this->CI->load->view($content, $data, TRUE),
			'footer'		=> $this->CI->load->view('template/kepala_balai/footer', $data, TRUE),
			'script'		=> $this->CI->load->view('template/kepala_balai/script', $data, TRUE)
			);
		
		if ($script != NULL) 
		{
			$data['mod-script'] = $this->CI->load->view($script, $data, TRUE);
		}
		
		$this->CI->parser->parse('template/kepala_balai/index', $data);
	}

	public function petugas_pendakian($content, $script = NULL, $data = NULL)
	{
		$this->CI->load->model('count_model','count');
		$data['total_booking_pending'] = $this->CI->count->total_booking_pending();
		$data['total_pembayaran_pending'] = $this->CI->count->total_pembayaran_pending();
		$data = array(
			'head'			=> $this->CI->load->view('template/petugas_pendakian/head', $data, TRUE),
			'navbar-top'	=> $this->CI->load->view('template/petugas_pendakian/navbar-top', $data, TRUE),
			'content'		=> $this->CI->load->view($content, $data, TRUE),
			'footer'		=> $this->CI->load->view('template/petugas_pendakian/footer', $data, TRUE),
			'script'		=> $this->CI->load->view('template/petugas_pendakian/script', $data, TRUE)
			);
		
		if ($script != NULL) 
		{
			$data['mod-script'] = $this->CI->load->view($script, $data, TRUE);
		}
		
		$this->CI->parser->parse('template/petugas_pendakian/index', $data);
	}
}