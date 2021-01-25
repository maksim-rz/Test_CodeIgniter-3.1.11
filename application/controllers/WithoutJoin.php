<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WithoutJoin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('requests_model');
		$this->load->model('buyers_model');
		$this->load->model('requestsInfo_model');
	}

	public function index ()
	{
		$data = [];
		$data['title'] = "getDataWithoutJoin";

		$data['requests'] = $this->requests_model->getRequests();
		$buyers = $this->buyers_model->getBuyers();
		$requestsInfo = $this->requestsInfo_model->getRequestsInfo();

		foreach ($data['requests'] as $key => $req)
		{
			if (!empty($req['buyer_id']))
			{
				foreach ($buyers as $buyer)
				{
					if ($req['buyer_id'] !== $buyer['buyer_id'])
					{
						continue;
					}
					$data['requests'][$key] = array_merge($data['requests'][$key], $buyer);
					break;
				}
			}

			if (!empty($req['request_id']))
			{
				foreach ($requestsInfo as $reqInfo)
				{
					if ($req['request_id'] !== $reqInfo['request_id'])
					{
						continue;
					}
					$data['requests'][$key] = array_merge($data['requests'][$key], $reqInfo);
					break;
				}
			}
		}

		$this->load->view('templates/header', $data);
		$this->load->view('without_join/index.php', $data);
		$this->load->view('templates/footer');

	}


	/*public function index2 ()
	{
		$data = [];
		$data['title'] = "getDataWithoutJoin";

		$data['requests2'] = $this->requests_model->getRequests();
		$buyers = $this->buyers_model->getBuyers();
		$requestsInfo = $this->requestsInfo_model->getRequestsInfo();

		foreach ($data['requests2'] as $key => $req)
		{
			if (!empty($req['buyer_id']))
			{
				foreach ($buyers as $buyer)
				{
					if ($req['buyer_id'] !== $buyer['buyer_id'])
					{
						continue;
					}
					$data['requests2'][$key]['buyer'] = $buyer;
					break;
				}
			}

			if (!empty($req['request_id']))
			{
				foreach ($requestsInfo as $reqInfo)
				{
					if ($req['request_id'] !== $reqInfo['request_id'])
					{
						continue;
					}
					$data['requests2'][$key]['request'] = $reqInfo;
					break;
				}
			}
		}

		$this->load->view('templates/header', $data);
		$this->load->view('without_join/index.php', $data);
		$this->load->view('templates/footer');

	}*/

}
