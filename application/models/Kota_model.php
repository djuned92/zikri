<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_model extends CI_Model {

	public function get_all()
	{
		$q = $this->db->select('mk.*')
						->from('master_kokab as mk')
						->get();
		return $q->result();	
	}
	

}

/* End of file Kota_model.php */
/* Location: ./application/models/Kota_model.php */