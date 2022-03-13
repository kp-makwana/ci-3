<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product');
	}
	public function index()
	{
		$data['products'] = $this->product->index();

		$data['title'] = "Product Index";
		$this->load->view('Product/index',$data);
	}
}
