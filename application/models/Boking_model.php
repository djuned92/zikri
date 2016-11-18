<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking_model extends CI_Model {

	public function get_all()
	{
		// $q = $this->db->select('b.*, gp.*, jp.* , jadwal.*') // , a.*
		// 				->from('boking as b')
		// 				->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
		// 				// ->join('anggota as a','a.id_grup_pendaki = gp.id_grup_pendaki')
		// 				->join('jadwal_pendakian as jadwal','jadwal.id_jadwal_pendakian = b.id_jadwal_pendakian')
		// 				->join('jalur_pendakian as jp','jp.id_jalur_pendakian = jadwal.id_jalur_pendakian')
		// 				// ->group_by('jadwal.tanggal_pendakian')
		// 				->order_by('b.id_boking','DESC')
		// 				->get();
		// return $q->result();

		$q = $this->db->select('b.*, gp.*, jp.* , jadwal.*, u.username') // , a.*
						->from('boking as b')
						->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
						->join('user as u','u.id_user = gp.id_user')
						->join('jadwal_pendakian as jadwal','jadwal.id_jadwal_pendakian = b.id_jadwal_pendakian')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = jadwal.id_jalur_pendakian')
						// ->group_by('jadwal.tanggal_pendakian')
						// ->where('jp.nama_jalur','Jalur Cibodas')
						->order_by('b.id_boking','DESC')
						->get();
		return $q->result();
	}

	public function boking_cibodas()
	{
		$q = $this->db->select('b.*, gp.*, jp.* , jadwal.*, u.username') // , a.*
						->from('boking as b')
						->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
						->join('user as u','u.id_user = gp.id_user')
						->join('jadwal_pendakian as jadwal','jadwal.id_jadwal_pendakian = b.id_jadwal_pendakian')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = jadwal.id_jalur_pendakian')
						// ->group_by('jadwal.tanggal_pendakian')
						->where('jp.nama_jalur','Jalur Cibodas')
						->order_by('b.id_boking','DESC')
						->get();
		return $q->result();
	}

	public function boking_putri()
	{
		$q = $this->db->select('b.*, gp.*, jp.* , jadwal.*, u.username') // , a.*
						->from('boking as b')
						->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
						->join('user as u','u.id_user = gp.id_user')
						->join('jadwal_pendakian as jadwal','jadwal.id_jadwal_pendakian = b.id_jadwal_pendakian')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = jadwal.id_jalur_pendakian')
						// ->group_by('jadwal.tanggal_pendakian')
						->where('jp.nama_jalur','Jalur Putri')
						->order_by('b.id_boking','DESC')
						->get();
		return $q->result();
	}

	public function boking_salabintana()
	{
		$q = $this->db->select('b.*, gp.*, jp.* , jadwal.*, u.username') // , a.*
						->from('boking as b')
						->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
						->join('user as u','u.id_user = gp.id_user')
						->join('jadwal_pendakian as jadwal','jadwal.id_jadwal_pendakian = b.id_jadwal_pendakian')
						->join('jalur_pendakian as jp','jp.id_jalur_pendakian = jadwal.id_jalur_pendakian')
						// ->group_by('jadwal.tanggal_pendakian')
						->where('jp.nama_jalur','Jalur Salabintana')
						->order_by('b.id_boking','DESC')
						->get();
		return $q->result();
	}

	public function add_boking($boking) 
	{
		// data boking
		$this->db->insert('boking', $boking);
	}

	public function update_boking($id_boking, $data)
	{
		$this->db->where('id_boking', $id_boking)->update('boking', $data);
	}

	public function total_pendaki($id_grup_pendaki)
	{
		$where = "a.id_grup_pendaki = $id_grup_pendaki AND a.no_identitas != 'NULL'";
		$q = $this->db->select('gp.id_grup_pendaki, a.*')
						->from('grup_pendaki as gp')
						->join('anggota as a','a.id_grup_pendaki = gp.id_grup_pendaki')
						// ->where('a.id_grup_pendaki', $id_grup_pendaki)
						->where($where)
						->get();
		return $q->num_rows();
		// return $q->result();
	}

	// check kode boking
	public function check_kode_boking($kode_boking)
	{
		$q = $this->db->select('b.*, gp.*, a.*')
						->from('boking as b')
						->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
						->join('anggota as a','a.id_grup_pendaki = gp.id_grup_pendaki')
						->where('b.kode_boking',$kode_boking)
						->get();
		return $q->row_array();
	}

	public function boking_by_kode_boking($kode_boking)
	{
		$q = $this->db->select('b.*, gp.*, a.*')
						->from('boking as b')
						->join('grup_pendaki as gp','gp.id_grup_pendaki = b.id_grup_pendaki')
						->join('anggota as a','a.id_grup_pendaki = gp.id_grup_pendaki')
						->where('b.kode_boking',$kode_boking)
						->get();
		return $q->row();
	}

	// check kode boking di table pembayaran
	public function boking_at_table_pembayaran($id_boking)
	{
		$q = $this->db->select('b.*,p.*')
						->from('boking as b')
						->join('pembayaran as p','p.id_boking = b.id_boking')
						->where('b.id_boking',$id_boking)
						->get();
		return $q->row();
	}

}

/* End of file Boking_model.php */
/* Location: ./application/models/Boking_model.php */