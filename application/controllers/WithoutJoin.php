<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WithoutJoin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('requests_model');
		$this->load->model('buyers_model');
		$this->load->model('requests_info_model');
	}

	public function index ()
	{
		$data['title'] = "getDataWithoutJoin";
//		$data['requests'] = $this->requests_model->getRequestsWithoutJoin ();


		$data['requests'] = $this->requests_model->getRequests();
		$data['buyers'] = $this->buyers_model->getBuyers();
		$data['requests_info'] = $this->requests_info_model->getRequests_info();

		// $data['array_result']=$data['buyers'] + $data['requests'] + $data['requests_info'];



		$arrays = array_merge( $data['requests'], $data['buyers'], $data['requests_info']);


		$data['array_result'] = $arrays;

		$this->load->view('templates/header', $data);
		$this->load->view('without_join/index.php', $data);
		$this->load->view('templates/footer');

	}

}
