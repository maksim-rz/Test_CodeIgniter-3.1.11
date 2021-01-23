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
		$data['title'] = "getDataWithoutJoin";
//		$data['requests'] = $this->requests_model->getRequestsWithoutJoin();

		$data['requests'] = $this->requests_model->getRequests();
		$data['buyers'] = $this->buyers_model->getBuyers();
		$data['requests_info'] = $this->requestsInfo_model->getRequestsInfo();

		$this->load->view('templates/header', $data);
		$this->load->view('without_join/index.php', $data);
		$this->load->view('templates/footer');

	}

}
