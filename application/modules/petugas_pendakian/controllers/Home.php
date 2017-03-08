<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->library('pagination');
		$this->load->model('berita_model','berita');

		if ($this->session->userdata('level') != 'petugas_pendakian')
		{
		 redirect('auth/users');
		}
	}

	public function index()
	{
		// pagination settings
	    $config['base_url'] = 'http://localhost/zikri/petugas_pendakian/home/index';
	    $config['total_rows'] = $this->berita->count_all(); // tbl_berita
	    $config['per_page'] = 3;
	    $config['uri_segment' ] = 4;
	    $choice = $config['total_rows'] / $config['per_page'];
	    $config['num_links'] = floor($choice);

	    //config bootstrap
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '&laquo';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] ='&raquo';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';

	    $this->pagination->initialize($config);
	    $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4): 0;
	    $data['berita'] = $this->berita->get_berita_list($data['page'], $config['per_page']);
	    $data['pagination'] = $this->pagination->create_links();

		// $data['berita'] = $this->berita->get_all();
		$this->template->petugas_pendakian('index','script', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/modules/petugas_pendakian/controllers/Home.php */