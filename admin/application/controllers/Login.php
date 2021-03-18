<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function log()
	{
		check_already_login();
		$this->load->view('form_login');
	}
	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login']))
		{
			$this->load->model('M_login');
			$query = $this->M_login->login($post);
			if($query->num_rows() > 0 )
			{
				$row = $query->row();
				$params = array(
						'id_user'=> $row->id_user,
						'status' => $row->status
					);
				$this->session->set_userdata($params);
				echo "<script>alert('Selamat, Login berhasil');
						window.location='".site_url('admin')."';
						</script>";
				}else{
				echo "<script>alert('Login gagal!');
						window.location='".site_url('login/log')."';
						</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id_user','status');
		$this->session->unset_userdata($params);
		redirect('Login/log');
	}
}
?>
