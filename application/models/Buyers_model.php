<?php

class Buyers_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getBuyers()
	{
			$query = $this->db->get('buyers');
			return $query->result_array();
	}
}
