<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	public function get_by_id($id)
	{
		$q = $this->db->select('b.*')
						->from('berita as b')
						->where('b.id_berita',$id)
						->get();
		return $q->row();	
	}

	public function get_all()
	{
		$q = $this->db->select('b.*')
						->from('berita as b')
						->order_by('b.id_berita', 'DESC')
						->get();
		return $q->result();
	}

	public function add_berita($data)
	{
		$this->db->insert('berita', $data);
	}

	public function update_berita($id, $data)
	{
		$this->db->where('id_berita', $id)->update('berita', $data);
	}

	public function delete_berita($id)
	{
		$this->db->where('id_berita', $id)->delete('berita');
	}

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */