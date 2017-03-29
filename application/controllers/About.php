<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'About';
	}

	public function index()
	{
		$this->page="pages/about";
		$this->render();
	}
}
