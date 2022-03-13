<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Model
{
	public function index()
	{

		$query = $this->db->select('*')->get('products');

//		echo $query;
		if ( $query->num_rows() > 0 )
		{
			//			echo $row;
			return $query->row_array();
		}
		exit();
//		return $query;

	}
}
