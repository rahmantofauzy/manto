<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('body/head');
		$this->load->view('body/shoulder');
		$this->load->view('body/left_arm');
		$this->load->view('dashboard/index');
		$this->load->view('body/foot');
	}
}
