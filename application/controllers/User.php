<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	public function index()
	{
		$this->load->model('usermodel');
		$data = $this->usermodel->index();

		$this->load->helper('url');
		$data['title'] = 'user title';
		$data['user'] = array('first','second','third');

		echo "<pre>";
		print_r($data);
		exit();

		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/menu',$data);
		$this->load->view('user/index',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function show($id,$id2)
	{
		echo "param = ".$id." - ".$id2;
	}
}
