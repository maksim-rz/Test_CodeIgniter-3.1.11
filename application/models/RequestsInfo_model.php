<?php

class RequestsInfo_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getRequestsInfo()
	{
		$query3 = $this->db->get('requests_info');
		return $query3->result_array();
	}

	/*private function normalizeRequestsInfo(array $requestsInfo)
	{
		$result = [];
		foreach ($requestsInfo as $reqInfo)
		{
			$result[$reqInfo['request_id']] = $reqInfo;
		}
		return $result;
	}*/
}
