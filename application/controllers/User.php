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

	public function add()
	{
		$f_name = $this->generateRandomString();
		$l_name = $this->generateRandomString();
		$dob = '2000-01-01';
		$contact_no = $this->generateRandomNumber();
		$email = $this->generateRandomString().'@gmail.com';
		$username = $email;

		$userArr = array(
			'f_name' => $f_name,
			'l_name' => $l_name,
			'dob' => $dob,
			'contact_no' => $contact_no,
			'email' => $email,
			'username' => $username,
		);
		$this->usermodel->add($userArr);
		$this->session->set_flashdata('success','record insert successfully.');
		redirect('user');
	}

	public function edit($id)
	{
		echo $id;
		exit();
	}

	public function delete($id)
	{
		echo $id;
		exit();
	}
	private function generateRandomString($length = 4) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	private function generateRandomNumber($length = 10) {
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}
