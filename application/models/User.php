<?php

class User extends CI_Model
{
	public function index()
	{

		$query = $this->db->select('*')->get('users');

		echo $query;
		if ( $query->num_rows() > 0 )
		{
			$row = $query->row_array();
			echo $row;
			return $row;
		}
		exit();
		return $q;

	}
}
