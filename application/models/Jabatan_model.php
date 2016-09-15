<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model {

	public function get_all()
	{
		$q = $this->db->select('j.*')
						->from('jabatan as j')
						->order_by('j.id_jabatan','ASC')
						->get();
		return $q->result();
	}
	

}

/* End of file Jabatan_model.php */
/* Location: ./application/models/Jabatan_model.php */