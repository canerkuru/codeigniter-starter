<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todos extends MY_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('todo_model');
		$this->mPageTitle = 'Todos';
	}

	public function index()
	{
		$this->data['todos'] = $this->todo_model->get_todos();
		$this->page="pages/todos/index";
		$this->render();
	}
	
	public function view()
	{
		$id = $this->uri->segment(3);
		if (empty($id))
		{
		show_404();
		}
		$this->data['todo'] = $this->todo_model->get_todos($id);
				$this->page="pages/todos/view";
				$this->render();
	}

	public function create()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if ($this->form_validation->run() === FALSE)
		{
				$this->page="pages/todos/create";
				$this->render();				
		}
		else
		{
			$this->todo_model->set_todos(); 	
			redirect(base_url('/todos'));		
		}
	}	
	
	public function edit()
	{
		$id = $this->uri->segment(3);
		if (empty($id))
		{
		show_404();
		}
		$this->data['todo'] = $this->todo_model->get_todos($id);
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->page="pages/todos/edit";
			$this->render();
		}
	}
	
	public function completed()
	{
		$id = $this->uri->segment(3);
		if (empty($id))
		{
		show_404();
		}
		$this->todo_model->completed($id);
		redirect(base_url('/todos'));
	}

}



