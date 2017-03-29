<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $mPageTitlePrefix = '';
	public $mPageTitle = '';
	public $data;
	
    public function __construct()
	{
		parent::__construct();
		$this->_setup();	
	}
	
	private function _setup()
	{
		$this->mPageTitlePrefix = $this->config->item('page_title_prefix');
		$this->mPageTitle = $this->config->item('page_title');
	}
	
	
	public function render()
	{
		$this->load->view('templates/header');
		$this->load->view($this->page,$this->data);
		$this->load->view('templates/footer');
	}
	
}
