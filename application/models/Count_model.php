<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Count_model extends CI_Model {

	public function total_pendaki($id_jadwal_pendakian)
	{
		$where = "boking.id_jadwal_pendakian = $id_jadwal_pendakian AND p.status = 'Valid'";
		$q = $this->db->select_sum('total_pendaki')
						->select('p.status')
						->from('boking')
						->join('pembayaran as p','p.id_boking = boking.id_boking')
						// ->where('id_jadwal_pendakian', 9)
						->where($where)
						->get();

		return $q->row('total_pendaki');
	}

	public function count_jadwal_pendakian()
	{
		$q = $this->db->select('kuota')
						->from('jadwal_pendakian as jp')
						->where('id_jadwal_pendakian', 9)
						->get();
		return $q->row('kuota');
	}

	public function total_booking_pending()
	{
		$q = $this->db->select('b.status')
						->from('boking as b')
						->where('b.status', 'Pending')
						->get();
		return $q->num_rows();
	}

	public function total_pembayaran_pending()
	{
		$q = $this->db->select('p.status')
						->from('pembayaran as p')
						->where('p.status', 'Pending')
						->get();
		return $q->num_rows();
	}
	

}

/* End of file Total_pendaki.php */
/* Location: ./application/models/Total_pendaki.php */