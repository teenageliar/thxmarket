<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 function __construct()
   {
   		parent::__construct();
		check_not_login();
		check_admin();
   		$this->load->model('M_pesan');
   		$this->load->model('M_pengunjung');
   		$this->load->library('form_validation');
   }

	public function index()
	{
	    $this->db->from('pemesanan');
	    $data['totalpesan'] = $this->db->count_all_results();
	    $this->db->from('pemesanan');
	    $this->db->where('status_pemesanan = "3" ');
	    $data['ditolak'] = $this->db->count_all_results();
	    $data['tiketterjual'] = $this->M_pesan->sum_tiket();
	    $data['duit'] = $this->M_pesan->sum_duit();
		$this->template->load('template','admin', $data);
		
	}


	public function veri($id)	
	{
		/*$id = $this->input->post('id_maaf');*/
		
        $pow = $this->M_pesan->get($id);
         foreach($pow->result_array() as $row){
             $no_in =$row['no_identitas'];
             $stat = $row['status_pemesanan'];
         }
        if($stat == 1){
            $this->M_pesan->perip($id);
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE

		$config['cacheable']	= true; //boolean, the default is true
		$config['cachedir']		= './upload/'; //string, the default is application/cache/
		$config['errorlog']		= './upload/'; //string, the default is application/logs/
		$config['imagedir']		= './upload/bc_user/'; //direktori penyimpanan qr code
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$image_name=$no_in.'.png'; //buat name dari qr code sesuai dengan nim

		$params['data'] = $no_in; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

		$core = $this->M_pesan->bc($id,$image_name); 
        redirect("admin/generatecrgate/".$id);
        }
        else
           { 
                echo"<script>alert('Data sudah terverifikasi');</script>";
               echo "<script>window.location='".base_url('admin')."';</script>";
            }
	}
    public function generatecrgate($id)
     {
    /*$id = $this->input->post('id_maaf');*/
		
        $pow = $this->M_pesan->get($id);
         foreach($pow->result_array() as $row){
             $no_in =$row['no_identitas'];
             $stat = $row['status_pemesanan'];
         }
            if($stat == 1){
        $this->M_pesan->perip_2($id);
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE
		$config['cacheable']	= true; //boolean, the default is true
		$config['cachedir']		= './upload/'; //string, the default is application/cache/
		$config['errorlog']		= './upload/'; //string, the default is application/logs/
		$config['imagedir']		= './upload/bc_gate/'; //direktori penyimpanan qr code
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);
		$image_name="Gateway".$no_in.'.png'; //buat name dari qr code sesuai dengan nim
		$params['data'] = $image_name; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
        $this->auto_email($id);
		$core = $this->M_pesan->save_gate($image_name); 
                echo"<script>alert('Berhasil fren');</script>";
               echo "<script>window.location='".site_url('admin')."';</script>";
        }
      
        }
	public function del()
	{
	    $idpeng = $this->input->post('id_pengunjung');
	    $idpem = $this->input->post('id_pemesanan');
	    $this->M_pengunjung->del($idpeng);
	    $this->M_pesan->del($idpem);
		
	    

		if($this->db->affected_rows() > 0)
			{
			    echo"<script>alert('Data terhapus');</script>";
			}
			    
				echo "<script>window.location='".base_url('pemesanan/pemegang')."';</script>";

	}
}
