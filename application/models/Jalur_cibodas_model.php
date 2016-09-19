<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur_cibodas_model extends CI_Model {

	public function get_all()
	{
		$q = $this->db->select('k.*,jp.*')
						->from('kuota as k')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = k.id_jalur_pendakian')
						->where('jp.id_jalur_pendakian','1')
						->get();
		return $q->result();
	}
	
}

/* End of file Jalur_cibodas_model.php */
/* Location: ./application/models/Jalur_cibodas_model.php */