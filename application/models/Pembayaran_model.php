<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

	public function get_all()
	{
		$q = $this->db->select('p.*, p.status as status_pembayaran, b.*, gp.*, jp.*, jadwal.id_jalur_pendakian, jadwal.tanggal_pendakian')
						->from('pembayaran as p')
						->join('boking as b','b.id_boking = p.id_boking')
						->join('jadwal_pendakian as jadwal','jadwal.id_jadwal_pendakian = b.id_jadwal_pendakian')
						->join('grup_pendaki as gp','b.id_grup_pendaki = gp.id_grup_pendaki')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = jadwal.id_jalur_pendakian')
						->where('b.status','Boking Valid')
						->get();
		return $q->result();
	}

	public function add_pembayaran($data)
	{
		$this->db->insert('pembayaran', $data);
	}

	public function update_pembayaran($id_pembayaran, $data)
	{
		$this->db->where('id_pembayaran', $id)->update('pembayaran', $data);
	}

}

/* End of file Pembayaran_model.php */
/* Location: ./application/models/Pembayaran_model.php */