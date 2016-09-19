<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_gunung_model extends CI_Model {

	public function get_tanggal_kuota()
	{
		$q = $this->db->select('k.tanggal_kuota, k.id_jalur_pendakian')
						->from('kuota as k')
						->group_by('k.tanggal_kuota')
						->get();
		return $q->result();
	}	

	public function get_kuota($tanggal_kuota)
	{
		// $where = "jp.nama_jalur = 'Jalur Cibodas' AND k.tanggal_kuota = $tanggal_kuota ";
		$q = $this->db->select('k.*,jp.*')
						->from('kuota as k')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = k.id_jalur_pendakian')
						->where('k.tanggal_kuota', $tanggal_kuota)
						// ->group_by('k.kuota')
						->get();
		return $q->result();
	}

	public function get_id_kuota($id_kuota)
	{
		// $where = "jp.nama_jalur = 'Jalur Cibodas' AND k.tanggal_kuota = $tanggal_kuota ";
		$q = $this->db->select('k.*,jp.*')
						->from('kuota as k')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = k.id_jalur_pendakian')
						->where('k.id_kuota', $id_kuota)
						// ->group_by('k.kuota')
						->get();
		return $q->row();
	}

}

/* End of file Info_gunung_model.php */
/* Location: ./application/models/Info_gunung_model.php */