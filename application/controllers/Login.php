<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}
	public function index()
	{
		$this->load->view('admin/login');
	}
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_dosen=$this->M_login->auth_user($username,$password);
						$data=$cek_dosen->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['status']=='superadmin'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['username']);
		        redirect("Beranda" );
		         }else if($data['status']=='admintiket'){ //akses dosen
		            $this->session->set_userdata('akses','2');
		            $this->session->set_userdata('ses_nama',$data['username']);
		           redirect("Beranda" );
		         }else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}

        

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}
