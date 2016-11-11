<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Job_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	public function add_job($data)
	{	
		
	}	

	public function get_job_categories()
	{
		return $this->db->get('job_category')->result_array();
	}
}