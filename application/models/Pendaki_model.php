<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaki_model extends CI_Model {

	public function get_all()
	{
		$q = $this->db->select('gp.*,u.*') // , ga.* , a.*, mk.*, mp.*
						->from('grup_pendaki as gp')
						->join('user as u','u.id_user = gp.id_user')
						// ->join('grup_anggota as ga','ga.id_grup_pendaki = gp.id_grup_pendaki')
						// ->join('master_kokab as mk','mk.kota_id = gp.kota_id','mk.kota_id = a.kota_id')
						// ->join('master_provinsi as mp','mk.provinsi_id = mp.provinsi_id')
						// ->join('anggota as a','a.id_anggota = ga.id_anggota')
						->group_by('gp.id_grup_pendaki')
						->order_by('gp.id_grup_pendaki','DESC')
						->get();
		return $q->result();
	}
	
}

/* End of file Pendaki_model.php */
/* Location: ./application/models/Pendaki_model.php */