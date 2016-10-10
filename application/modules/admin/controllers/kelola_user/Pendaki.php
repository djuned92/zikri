<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaki extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pendaki_model','pendaki');
    $this->load->model('users_model','users');
    $this->load->model('jabatan_model','jabatan');
    $this->load->model('provinsi_model','provinsi');
    $this->load->model('kota_model','kota');
    
    if ($this->session->userdata('level_user') != 'admin')
    {
     redirect('auth/users');
    }
  }

  public function index()
  {
    $data['jabatan'] = $this->jabatan->get_all();
    $data['provinsi'] = $this->provinsi->get_all();
    $data['kota'] = $this->kota->get_all();
    $data['grup_pendaki'] = $this->pendaki->get_all();
    $this->template->admin('kelola_user/pendaki','script', $data);
  }

  public function update_grup_pendaki($id)
  {
    $data_grup_pendaki = array(
      'nama_grup'   => $this->input->post('nama_grup'),
      'alamat'    => $this->input->post('alamat'),
      'kota_id'   => $this->input->post('kota_id')
      );
    $this->users->update_grup_pendaki($id, $data_grup_pendaki);
    $this->session->set_flashdata('update_grup_pendaki','Grup pendaki berhasil diperbaharui');
    redirect('admin/kelola_user');    
  }

  public function delete_grup_pendaki($id)
  {
    $this->users->delete_grup_pendaki($id);
    $this->session->set_flashdata('delete_grup_pendaki', 'Grup pendaki berhasil dihapus');
    redirect('admin/kelola_user');  
  }

}

/* End of file Kelola_user.php */
/* Location: ./application/modules/admin/controllers/Kelola_user.php */