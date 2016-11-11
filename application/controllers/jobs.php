<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('job_model');
	}

	public function index()
	{
		$categories = $this->job_model->get_job_categories();
		$pageData = array('categories' => $categories);

		$data = array('selected_tab' => "",'title' => $this->lang->line('new_job'));
		$this->load->view('includes/header',$data);
		$this->load->view('jobs/new_job',$pageData);
		$this->load->view('includes/footer');
	}

	public function save()
	{

	}
}
