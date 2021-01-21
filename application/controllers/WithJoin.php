<?php

defined('BASEPATH') or exit('No direct script access allowed');

class WithJoin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('requests_model');

	}

	public function index ()
	{
		$data['title'] = "getDataWithJoin";
		$data['requests'] = $this->requests_model->getRequestsJoin();

		$this->load->view('templates/header', $data);
		$this->load->view('with_join/index.php', $data);
		$this->load->view('templates/footer');

	}

}

