<?php

class Requests_info_model_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getRequest_info()
	{
		$query = $this->db->get('request_info');
		return $query->result_array();
	}
}
