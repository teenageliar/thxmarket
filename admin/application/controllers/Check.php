<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {
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
		$this->load->view('cekin/input_cekin');
	}
    public function gatein()
	{
		$this->load->view('gatein/input_gatein');
    }
    public function gateout()
	{
		$this->load->view('gatein/out_gate');
	}
	public function cekin_12()
	{
        
            error_reporting(0);
           $id = $this->input->post("bc");
           $pow = $this->M_pesan->cekin($id);
         foreach($pow->result_array() as $row){
             $id_pemesanan = $row['id_pemesanan'];
             $status = $row['status_pemesanan'];
             $jumlah = $row['jumlah_pesanan'];
         }
        
        if($status == 5){
              $data['msg'] = 'Barcode Dikenali,Tapi Sudah terpakai';
            }
        else if($status == 4){
           $powi = $this->M_pesan->perip_2($id_pemesanan);
           $data['msg'] = 'Barcode Dikenali, Silahkan berikan gelang tiket dengan jumlah : '.$jumlah;  
            }
    else{
         $data['msg'] = 'Data Tidak di Kenali';
         }
         $this->load->view('cekin/input_cekin', $data);
       
    }
    public function cekin_2()
	{
        error_reporting(0);  
           $id = $this->input->post("bc");
           $pow = $this->M_pesan->cekin_gw($id);
         foreach($pow->result_array() as $row){
             $token_kode = $row['token_kode'];
             $status = $row['status'];
         }
        if($status == null){
            $data['msg'] = 'Data Tidak di Kenali';}
        else if($status == 1){
            $data['msg'] = 'Barcode sudah digunakan untuk masuk !!';
            }
        else if($status == 0){
           $powi = $this->M_pesan->perip_4($token_kode);
           $data['msg'] = 'Barcode Dikenali, Silahkan masuk';  
            }
         $this->load->view('gatein/input_gatein',$data);
       
        }
        public function cekin_3()
        {
            error_reporting(0);  
               $id = $this->input->post("bc");
               $pow = $this->M_pesan->cekin_gw($id);
             foreach($pow->result_array() as $row){
                 $token_kode = $row['token_kode'];
                 $status = $row['status'];
             }
            if($status == null){
                $data['msg'] = 'Data Tidak di Kenali';}
            else if($status == 0){
                $data['msg'] = 'Barcode belum digunakan untuk masuk !!';
                }
            else if($status == 1){
               $powi = $this->M_pesan->perip_5($token_kode);
               $data['msg'] = 'Silahkan Keluar, Terimakasih !!';  
                }
             $this->load->view('gatein/out_gate',$data);
           
            }
	}