<?php

class UserModel extends CI_Model
{
	public function index()
	{
		$this->db->select('*');
		$this->db->where(array('country_code'=>91));
		$query = $this->db->get('users');


		if ( $query->num_rows() > 0)
		{
			return $query->result_array();
		}

	}
}
