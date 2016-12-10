<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_gunung extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array(
      'jadwal_pendakian_model' => 'jadwal_pendakian',
      'provinsi_model'  => 'provinsi',
      'kota_model'    => 'kota'
      ));

    if ($this->session->userdata('level') != 'kepala_balai')
    {
     redirect('auth/users');
    }
  }

  public function index()
  {
    $data ['tanggal_pendakian'] = $this->jadwal_pendakian->get_tanggal_kuota();
    $data ['jadwal_pendakian'] = $this->jadwal_pendakian->get_all();
    $data['provinsi'] = $this->provinsi->get_all();
    $data['kota'] = $this->kota->get_all();
    $this->template->kepala_balai('info_gunung','script',$data);
  }

}

/* End of file Info_gunung.php */
/* Location: ./application/modules/kepala_balai/controllers/Info_gunung.php */
