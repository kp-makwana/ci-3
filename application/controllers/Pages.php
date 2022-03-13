<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function view($page)
	{
		if (!file_exists('C:/wamp64/www/CI/Learn/application/views/pages/about.php')){
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('layouts/header');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('layouts/footer');
	}
}
