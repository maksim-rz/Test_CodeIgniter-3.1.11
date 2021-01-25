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
		$query = $this->db->get('buyers');
		return $query->result_array();
	}

	/*private function normalizeBuyer(array $buyers)
	{
		$result = [];
		foreach ($buyers as $buyer)
		{
			$result[$buyer['buyer_id']] = $buyer;
		}
		return $result;
	}*/

}
