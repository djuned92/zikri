<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function get_all()
	{
		$q = $this->db->select('p.*,u.*,j.*,mk.*, mp.*')
						->from('pegawai as p')
						->join('user as u','u.id_user = p.id_user')
						->join('jabatan as j','p.id_jabatan = j.id_jabatan')
						->join('master_kokab as mk','mk.kota_id = p.kota_id')
						->join('master_provinsi as mp','mk.provinsi_id = mp.provinsi_id')
						->order_by('u.id_user','DESC')
						->get();
		return $q->result();
	}
	

}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */