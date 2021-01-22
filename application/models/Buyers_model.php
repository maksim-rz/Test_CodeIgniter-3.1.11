<?php

class Buyers_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getBuyers()
	{
			$query2 = $this->db->get('buyers');
			return $query2->result_array();
	}
}
