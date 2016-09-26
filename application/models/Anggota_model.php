<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	// anggota berdasarkan grup 
	public function anggota_by_grup_id($id)
	{
<<<<<<< HEAD
		$q = $this->db->select('gp.*, a.*, mk.*, mp.* ')
						->from('grup_pendaki as gp')
						->join('anggota as a','a.id_grup_pendaki = gp.id_grup_pendaki')
=======
		$q = $this->db->select('gp.*, a.*, mk.*, mp.*') 
						->from('grup_pendaki as gp')
						// ->join('grup_anggota as ga','ga.id_grup_pendaki = gp.id_grup_pendaki')
						->join('anggota as a','gp.id_grup_pendaki = a.id_grup_pendaki')
>>>>>>> kepala_balai
						->join('master_kokab as mk','mk.kota_id = gp.kota_id','mk.kota_id = a.kota_id')
						->join('master_provinsi as mp','mk.provinsi_id = mp.provinsi_id')
						->where('a.id_grup_pendaki', $id)
						->order_by('a.id_anggota','DESC')
						->get();
		return $q->result();
	}

	public function add_anggota($anggota)
	{
		$this->db->insert_batch('anggota',$anggota);
	}

	public function add_grup_anggota($grup_anggota)
	{
		$this->db->insert_batch('grup_anggota',$grup_anggota);
	}

}

/* End of file Anggota_model.php */
/* Location: ./application/models/Anggota_model.php */