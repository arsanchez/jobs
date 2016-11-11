<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$user = $this->input->post('txtUser');
			$pass = $this->input->post('txtPass');
			$user = $this->login_model->login($user,$pass);
			if($user != null)
			{
				$this->session->set_userdata('user_info',$user);
				$this->session->set_userdata('valid_user',true);
				if($user->user_type == '1')
				{
					redirect('admin');
				}
				else
				{
					redirect('/');
				}
			}
			else
			{
				$message = $this->lang-line('invalid_user');
			}
		}
		// $this->load->view('includes/header');
		$this->load->view('login_view');
		// $this->load->view('includes/footer');
	}
}
