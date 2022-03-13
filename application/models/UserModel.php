<?php

class UserModel extends CI_Model
{
	public function index()
	{
		$this->db->select('*');
		$this->db->where(array('country_code'=>91));
		$this->db->order_by('id','desc');
		$this->db->limit(10);
		$query = $this->db->get('users');

		if ( $query->num_rows() > 0)
		{
			return $query->result();
		}
		return false;
	}

	public function add($userArr)
	{
		$this->db->insert('users',$userArr);
		return $this->db->insert_id();
	}

}
