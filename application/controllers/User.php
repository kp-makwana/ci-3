<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	public function index()
	{
		$this->load->model('user');
		$data = $this->user->index();
		echo $data;

		$this->load->helper('url');
		$data['title'] = 'user title';
		$data['user'] = array('first','second','third');

		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/menu',$data);
		$this->load->view('User/index',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function show($id,$id2)
	{
		echo "param = ".$id." - ".$id2;
	}
}
