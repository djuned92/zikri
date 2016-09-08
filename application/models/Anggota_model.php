<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	// anggota berdasarkan grup 
	public function anggota_by_grup_id($id)
	{
		$q = $this->db->select('gp.*, ga.* , a.*, mk.*, mp.*') 
						->from('grup_pendaki as gp')
						->join('grup_anggota as ga','ga.id_grup_pendaki = gp.id_grup_pendaki')
						->join('anggota as a','a.id_anggota = ga.id_anggota')
						->join('master_kokab as mk','mk.kota_id = gp.kota_id','mk.kota_id = a.kota_id')
						->join('master_provinsi as mp','mk.provinsi_id = mp.provinsi_id')
						->order_by('a.id_anggota','DESC')
						->get();
		return $q->result();
	}


}

/* End of file Anggota_model.php */
/* Location: ./application/models/Anggota_model.php */