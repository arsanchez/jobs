<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	public function login($user,$pass)
	{	
		// getting the user
		$this->db->where('user_name',$user);
		$this->db->where('password',md5($pass));
		$this->db->select('u.*,ut.name');
		$this->db->from('user u');
		$this->db->join('user_types ut','ut.id = u.user_type');
		$user = $this->db->get()->row();
		return $user;
	}	
}