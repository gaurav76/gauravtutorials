<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->head();
	}

	public function head()
	{
		$data['v']='body';
		$this->load->view('template', $data);
	}
}

/* End of file head.php */
/* Location: ./application/controllers/head.php */