<?php

class Users_model extends CI_Model{

	// cek users login
	public function check_credential()
	{
		$this->load->helper('security');

		$pwd = $this->input->post('password');
		$data = array(
		 		'username'	=> $this->input->post('username'),
		 		'password'	=> do_hash($pwd)
		 	); 

		$query = $this->db->where($data)
		 				  ->limit(1)
		 				  ->get('user');

		if ($query->num_rows() > 0)
		{
			return $query->row();
		} 
		else 
		{
			return FALSE;
		}
	}

	// cek username
	public function check_username()
	{
		$data = array(
			'username'	=> $this->input->post('username')
			);
		$query = $this->db->where($data)
		 				  ->limit(1)
		 				  ->get('user');

		if ($query->num_rows() > 0)
		{
			return $query->row();
		} 
		else 
		{
			return FALSE;
		}

	}

	// cek status aktif / tidak aktif
	public function check_status_user()
	{
		$data = array(
		 		'username'		=> $this->input->post('username'),
		 		'status_user'	=> 'Aktif'
		 	); 
		$query = $this->db->where($data)
		 				  ->limit(1)
		 				  ->get('user');

		if ($query->num_rows() > 0)
		{
			return $query->row();
		} 
		else 
		{
			return FALSE;
		}	
	}

	public function add_user($data_user, $data_pegawai)
	{
		$this->db->insert('user', $data_user);
		$id_user = $this->db->insert_id();
		
		$data_pegawai['id_user'] = $id_user;
		$this->db->insert('pegawai', $data_pegawai);	
	}

	public function delete_user($id)
	{
		$this->db->where('id_user',$id)->delete('user');
		$this->db->where('id_user',$id)->delete('pegawai');
	}

	public function update_user($id, $data_user, $data_pegawai)
	{
		$this->db->where('id_user',$id)->update('user', $data_user);
		$this->db->where('id_user',$id)->update('pegawai', $data_pegawai);	
	}

	public function register($data_user, $data_grup)
	{
		$this->db->insert('user', $data_user);
		$id_user = $this->db->insert_id();

		$data_grup['id_user'] = $id_user;
		$this->db->insert('grup_pendaki', $data_grup);
	}

	public function reset_password($id)
	{
		$this->load->helper('security');
		$password = '123456';
		$data = array(
			'password'	=> do_hash($password)
			);
		$this->db->where('id_user',$id)->update('user', $data);	
	}

	public function update_password($id)
	{
		$this->load->helper('security');
		$password = $this->input->post('password');
		$data = array(
			'password'	=> do_hash($password)
			);
		$this->db->where('id_user',$id)->update('user', $data);
	}
}