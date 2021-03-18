<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maaf extends CI_Controller {
   function __construct()
   {
   		parent::__construct();
		check_not_login();
		check_admin();
   		$this->load->model('M_maaf');
   		$this->load->library('form_validation');
   }

	public function index()
	{
		$data['row'] = $this->M_maaf->get();
		$this->template->load('template','Maaf/data_maaf',$data);
	}

	public function veri($id)
	{
		$id = $this->input->post('id_maaf');
		$this->M_maaf->perip($id);

		if($this->db->affected_rows() > 0)
			{
				echo"<script>alert('Status berhasil dirubah');</script>";
			}
				echo "<script>window.location='".base_url('maaf')."';</script>";

	}
	public function del()
	{
		$id = $this->input->post('id_maaf');
		$this->M_maaf->del($id);

		if($this->db->affected_rows() > 0)
			{
				echo"<script>alert('Data terhapus');</script>";
			}
				echo "<script>window.location='".base_url('maaf')."';</script>";

	}
}