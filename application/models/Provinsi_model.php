<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_model extends CI_Model {

		public function get_all()
		{
			$q = $this->db->select('mp.*')
							->from('master_provinsi as mp')
							->get();
			return $q->result();
		}	

}

/* End of file Provinsi_model.php */
/* Location: ./application/models/Provinsi_model.php */