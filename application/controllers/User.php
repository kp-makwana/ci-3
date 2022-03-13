<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('usermodel');
	}

	public function index()
	{
		$this->load->model('usermodel');
		$data['users'] = $this->usermodel->index();

		$this->load->view('layouts/header');
		$this->load->view('user/index',$data);
		$this->load->view('layouts/footer');
	}

	public function show($id,$id2)
	{
		echo "param = ".$id." - ".$id2;
	}
}
