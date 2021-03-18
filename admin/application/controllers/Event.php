<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
   function __construct()
   {
   		parent::__construct();
   		$this->load->model('M_show');
   		$this->load->model('M_event');
   }

	public function index()
	{
		$data['row'] = $this->M_show->get();
		$this->template->load('template','Event/Halaman_event', $data);
	}
	public function detail($id)
	{
		$data['row'] = $this->M_event->getdetail($id);
		$this->template->load('template','Event/Event_detail', $data);
	}

}