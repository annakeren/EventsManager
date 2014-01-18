<?php

class Event extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('EventsManagerModel');
		$this->load->view('event_view');
	}
		
	
	public function index()
	{
	
		echo 'blah';
	
	}
	
	public function create()
	{
		var_dump ($this->input->post());
		if ($this->input->post('submit')==true) 
		{
			echo 'blah post';
			$data['value']=$this->input->post('username');
			$this->load->view('result',$data);
		}
	}
}