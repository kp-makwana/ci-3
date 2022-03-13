<?php

class UserModel extends CI_Model
{
	public function index()
	{

		$query = $this->db->select('*')->get('users');

		if ( $query->num_rows() > 0)
		{
			return $query->row_array();
		}

	}
}
