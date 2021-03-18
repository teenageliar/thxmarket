<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemegang_tiket extends CI_Controller {

 function __construct()
   {
   		parent::__construct();
		check_not_login();
		check_admin();
   		$this->load->model('M_pesan');
   		$this->load->library('form_validation');
   }

	public function index()
	{
		$data['row'] = $this->M_pesan->get();
		$this->template->load('template','pemesanan/data_pemegang_tiket', $data);
		
	}
}