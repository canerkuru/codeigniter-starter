<?php
class News extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'News';
		$this->load->model('news_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['news'] = $this->news_model->get_news();
		$this->form_validation->set_rules('title', 'Title', 'required',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('slug', 'Slug', 'required',array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('text', 'Text', 'required',array('required' => 'You must provide a %s.'));
		
		if ($this->form_validation->run() == TRUE)
		{
			$this->news_model->insert_entry();
			$this->data['news'] = $this->news_model->get_news();
		}
		
		$this->page="pages/news";
		$this->render();
	}

	public function view($slug = NULL)
	{
		$this->data['news_item'] = $this->news_model->get_news($slug);
		
		if (empty($this->data['news_item']))
		{
				show_404();
		}
		
		$this->mPageTitle = $this->data['news_item']['title'];
		$this->page="pages/news/view";
		$this->render();
	}
}