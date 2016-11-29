<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup_pendaki_model extends CI_Model {

	// id by user login
	public function grup_by_id($id)
	{
		$q = $this->db->select('gp.*, u.id_user')
						->from('grup_pendaki as gp')
						->join('user as u','u.id_user = gp.id_user')
						->where('gp.id_user', $id)
						->get();
		return $q->result();
	}

	// id by user login
	public function email_by_id($id)
	{
		$q = $this->db->select('gp.*, u.id_user, u.username')
						->from('grup_pendaki as gp')
						->join('user as u','u.id_user = gp.id_user')
						->where('u.id_user', $id)
						->group_by('gp.id_user')
						->get();
		return $q->result();
	}

	public function add_grup_pendaki($grup_pendaki)
	{
		$this->db->insert('grup_pendaki',$grup_pendaki);
	}

	//history grup pendaki
	public function history_grup()
	{
		$where = "p.status = 'Valid'";
		$q = $this->db->select('p.*, b.*, gp.*')
						->from('pembayaran as p')
						->join('boking as b','p.id_boking = b.id_boking')
						->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
						->group_by('gp.nama_grup')
						->where($where)
						->get();
		return $q->result();
	}

	// detail history grup
	public function detail_history_grup($id_grup_pendaki)
	{
		$where = "p.status = 'Valid'";
		$q = $this->db->select('p.*, b.*, gp.*, jp.*,j.*')
						->from('pembayaran as p')
						->join('boking as b','p.id_boking = b.id_boking')
						->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
						->join('jadwal_pendakian as jp','b.id_jadwal_pendakian = jp.id_jadwal_pendakian')
						->join('jalur_pendakian as j','j.id_jalur_pendakian = jp.id_jalur_pendakian')
						// ->group_by('gp.nama_grup')
						->where($where)
						->get();
		return $q->result();	
	}

}

/* End of file Grup_pendaki_model.php */
/* Location: ./application/models/Grup_pendaki_model.php */