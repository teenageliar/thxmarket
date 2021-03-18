<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {
   function __construct()
   {
   		parent::__construct();
		check_not_login();
		check_admin();
   		$this->load->model('M_show');
   		$this->load->library('form_validation');
   }

	public function index()
	{
		$this->load->model('M_show');
		$data['row'] = $this->M_show->get();
		$this->template->load('template','Show/show_data',$data);
	}
	public function tambah()
    {   
        $data = array(
				'page' => 'add',
				'row' => $show
 			);
        $this->template->load('template','Show/form_show', $data);
    }
	public function add()
    {
        
            $this->M_show->save();//memanggil fungsi untuk insert database show di M_model
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        redirect('Show');//jika semua script diatas yang ada di fungsi ini maka diarahkan ke controller show dengan funhgsi show_;ist
    }	
    public function del()
	{
		$id = $this->input->post('id_show');
		$this->M_show->del($id);

		if($this->db->affected_rows() > 0)
			{
				echo"<script>alert('Data terhapus');</script>";
			}
				echo "<script>window.location='".base_url('show')."';</script>";

	}
	public function edit($id)
	{
		$query = $this->M_show->get($id);
		if($query->num_rows() > 0)
		{
			$show = $query->row();
			$data = array(
					'page' => 'edit',
					'row' => $show 
				);
				$this->template->load('template','Show/form_show', $data);
		}else{
			echo"<script>alert('Data tidak ditemukan');";
			echo "window.location='".base_url('show')."';</script>";
		}
	}
}

		


