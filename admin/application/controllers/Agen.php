<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller {
   function __construct()
   {
   		parent::__construct();
		check_not_login();
		check_admin();
   		$this->load->model('M_login');
   		$this->load->library('form_validation');
   }

	public function index()
	{
		$this->load->model('M_login');
		$data['row'] = $this->M_login->get();
		$this->template->load('template','Agen/agen_data',$data);
	}
	public function add()
	{
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('username','username','required|min_length[3]|is_unique[user.username]');
		$this->form_validation->set_rules('password','password','required|min_length[3]');
		$this->form_validation->set_rules('passconf','Konfirmasi Password','required|matches[password]',array('matches' => '%s Konfirmasi password tidak singkron'));
		$this->form_validation->set_rules('status','status','required');

		$this->form_validation->set_message('required','{field} masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length','{field} minimal 3 karakter');
		$this->form_validation->set_message('is_unique','{field} ini sudah terpakai, silahkan coba yang lain');

		if($this->form_validation->run() == FALSE){
			$this->template->load('template','agen/tambah_agen');
		}else{
			$post= $this->input->post(null, TRUE);
			$this->M_login->add($post);
			if($this->db->affected_rows() > 0)
			{
				echo"<script>alert('Data tersimpan');</script>";
			}
				echo "<script>window.location='".base_url('agen')."';</script>";
		}

		
	}
	public function del()
	{
		$id = $this->input->post('id_user');
		$this->M_login->del($id);

		if($this->db->affected_rows() > 0)
			{
				echo"<script>alert('Data terhapus');</script>";
			}
				echo "<script>window.location='".base_url('agen')."';</script>";

	}
	function username_check()
	{
		$post= $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND id_user !='$post[id_user]'");
		if ($query->num_rows() >0)
		{
			$this->form_validation->set_message('username_check','{field} ini sudah digunakan, silahkan ganti');
			return FALSE;
		}else{
			return TRUE;
		}
	}
	public function edit($id)
	{

		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('username','username','required|min_length[3]');
		if($this->input->post('password')){
		$this->form_validation->set_rules('password','password','required|min_length[3]');
		$this->form_validation->set_rules('passconf','Konfirmasi Password','required|matches[password]',array('matches' => '%s Konfirmasi password tidak singkron'));
		}
		if($this->input->post('passconf')){
		$this->form_validation->set_rules('passconf','Konfirmasi Password','required|matches[password]',array('matches' => '%s Konfirmasi password tidak singkron'));
		}
		$this->form_validation->set_rules('status','status','required');

		$this->form_validation->set_message('required','{field} masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length','{field} minimal 3 karakter');
		$this->form_validation->set_message('is_unique','{field} ini sudah terpakai, silahkan coba yang lain');

		if($this->form_validation->run() == FALSE){
			$query = $this->M_login->get($id);
			if($query->num_rows() > 0 ){
			$data['row'] = $query->row();
			$this->template->load('template','agen/edit_agen', $data);
		}else{
				echo"<script>alert('Data tidak ditemukan');";
				echo "window.location='".base_url('agen')."';</script>";
				}
		}else{
			$post= $this->input->post(null, TRUE);
			$this->M_login->edit($post);
			if($this->db->affected_rows() > 0)
			{
				echo"<script>alert('Data tersimpan');</script>";
			}
				echo "<script>window.location='".base_url('agen')."';</script>";
		}

		
	}

}
