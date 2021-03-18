<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
   function __construct()
   {
   		parent::__construct();
		check_not_login();
		check_admin();
   		$this->load->model('M_order');
   		$this->load->library('form_validation');
   }

	public function index()
	{
		$data['row'] = $this->M_order->get();
		$this->template->load('template','Order/lorder',$data);
	}
	public function lorder($id)
	{
		$query = $this->M_order->get($id);

		if($query->num_rows() > 0)
		{
			$jenis = $this->M_order->getje($id);
			$harga = $this->M_order->getharga($id);

			$show = $query->row();
			$data = array(
					'page' => 'order',
					'row' => $show,
					'jenis'=>$jenis,
					'harga'=>$harga

					
				);
				$this->template->load('template','Pemesanan/form_order', $data);
		}else{
			echo"<script>alert('Data tidak ditemukan');";
			echo "window.location='".base_url('show')."';</script>";
		}
	}
	public function getharga()
	{
		if($this->input->post('id_jenis')){
			echo $this->M_order->getharga($this->input->post('id_jenis'));
		}


	}

}
