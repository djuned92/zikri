<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_pendakian_model extends CI_Model {

	public function add($data)
	{
		$this->db->insert('jadwal_pendakian', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('id_jadwal_pendakian', $id)->update('jadwal_pendakian', $data);
	}

	public function get_status_jalur()
	{
		$q = $this->db->select('j.status_jalur_pendakian')
						->from('jadwal_pendakian as j')
						->group_by('j.status_jalur_pendakian')
						->get();
		return $q->result();	
	}

	public function get_tanggal_kuota()
	{
		$q = $this->db->select('j.tanggal_pendakian, j.id_jalur_pendakian')
						->from('jadwal_pendakian as j')
						->group_by('j.tanggal_pendakian')
						->get();
		return $q->result();
	}	

	public function get_kuota($tanggal_pendakian)
	{
		$q = $this->db->select('j.*,jp.*')
						->from('jadwal_pendakian as j')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = j.id_jalur_pendakian')
						->where('j.tanggal_pendakian', $tanggal_pendakian)
						->get();
		return $q->result();
	}

	public function get_id_jadwal_pendakian($id_jadwal_pendakian)
	{
		$q = $this->db->select('j.*,jp.*')
						->from('jadwal_pendakian as j')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = j.id_jalur_pendakian')
						->where('j.id_jadwal_pendakian', $id_jadwal_pendakian)
						->get();
		return $q->row();
	}

}

/* End of file Jadwal_pendakian_model.php */
/* Location: ./application/models/Jadwal_pendakian_model.php */
