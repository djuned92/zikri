<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking_model extends CI_Model {

	public function add_boking($boking) // , $grup_anggota
	{
		// data boking
		$this->db->insert('boking', $boking);
	}

	public function total_pendaki($id_grup_pendaki)
	{
		$q = $this->db->select('gp.id_grup_pendaki, a.*')
						->from('grup_pendaki as gp')
						->join('anggota as a','a.id_grup_pendaki = gp.id_grup_pendaki')
						->where('a.id_grup_pendaki', $id_grup_pendaki)
						->get();
		return $q->num_rows();

	}

}

/* End of file Boking_model.php */
/* Location: ./application/models/Boking_model.php */