<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function index()
	{
		$this->load->view('dashboard');
	}

	function update()
	{
		session_destroy();
		redirect(base_url('update'));
	}
	
}
