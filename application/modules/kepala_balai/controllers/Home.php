<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('berita_model','berita');
  
    // if ($this->session->userdata('level_user') != 'calon_pendaki')
    // {
    //  redirect('auth/users');
    // }
  }

  public function index()
  {
    $data['berita'] = $this->berita->get_all();
    $this->template->kepala_balai('index','script', $data);
  }

}

/* End of file Home.php */
/* Location: ./application/modules/calon_pendaki/controllers/Home.php */