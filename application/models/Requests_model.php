<?php

class Requests_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}


	public function getRequestsWithoutJoin ()
	{
		$this->db->select("requests.*, buyers.name, requests_info.info");
		$this->db->from("requests, buyers, requests_info");
		$this->db->where("requests.buyer_id = buyers.buyer_id AND requests.request_id = requests_info.request_id");
		$query = $this->db->get();
		return $query;


	}

	public function getRequestsJoin()
	{
		$query = $this->db->query("SELECT buyers.buyer_id, buyers.name, requests.sum, requests_info.info, requests.date FROM ( ( requests RIGHT JOIN buyers ON requests.buyer_id = buyers.buyer_id ) LEFT JOIN requests_info ON requests.request_id = requests_info.request_id ) ORDER BY requests.buyer_id");
		return $query->result_array();

	}


	/*public function getRequests()
	{

		$query = $this->db->get('requests');
		return $query->result_array();

		$query = $this->db->get_where('requests', array('slug' => $slug));
		return $query->row_array();
	}*/
}
