<?php

class EventsManagerController extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('EventsManagerModel');
		$this->load->view('EventsManagerView');
	}
		
	
	public function view()
	{
	
		echo 'blah';
	
	}
	
	public function post()
	{
		echo 'blah post';
		echo $this->input->post('submit');
		if ($this->input->post('submit')==true) 
		{
			echo 'blah post';
			$data['value']=$this->input->post('username');
			$this->load->view('result',$data);
		}
	}
}