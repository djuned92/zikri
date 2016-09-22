<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking_model extends CI_Model {

	public function add_boking($boking) // , $grup_anggota
	{
		// data boking
		$this->db->insert('boking', $boking);
	}

}

/* End of file Boking_model.php */
/* Location: ./application/models/Boking_model.php */