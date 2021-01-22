<?php

class Requests_info_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getRequests_info()
	{
		$query3 = $this->db->get('requests_info');
		return $query3->result_array();
	}
}
