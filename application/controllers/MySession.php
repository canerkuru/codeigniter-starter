<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MySession extends MY_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'Session';
	}
	
	public function index()
	{
		$this->page="pages/session";
		$this->render();
	}
	
	public function form_post()
	{
		$this->session->set_userdata('firstname', $this->input->post('firstname'));
		$this->session->set_userdata('lastname', $this->input->post('lastname'));
		$this->page="pages/session";
		$this->render();
	}
	
	public function clear_session()
	{
		$this->session->unset_userdata('firstname');
		$this->session->unset_userdata('lastname');
		$this->page="pages/session";
		$this->render();
	}
	
}
