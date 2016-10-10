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

}

/* End of file Grup_pendaki_model.php */
/* Location: ./application/models/Grup_pendaki_model.php */