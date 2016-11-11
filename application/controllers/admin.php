<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data = array('selected_tab' => "",'title' => 'ADMIN');
		$this->load->view('includes/header',$data);
		$this->load->view('admin_view');
		$this->load->view('includes/footer');
	}

	public function config()
	{
		$this->load->view('admin/config_view');
	}
}
