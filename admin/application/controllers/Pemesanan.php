<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
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
		$this->template->load('template','Pemesanan/pemesanan_data',$data);
	}
	public function jakarta()
	{
		$data['row'] = $this->M_pesan->get();
		$this->template->load('template','Pemesanan/pemesanan_jakarta',$data);
	}
		public function bandung()
	{
		$data['row'] = $this->M_pesan->get();
		$this->template->load('template','Pemesanan/pemesanan_bandung',$data);
	}
		public function jogja()
	{
		$data['row'] = $this->M_pesan->get();
		$this->template->load('template','Pemesanan/pemesanan_jogja',$data);
	}
		public function solo()
	{
		$data['row'] = $this->M_pesan->get();
		$this->template->load('template','Pemesanan/pemesanan_solo',$data);
	}
		public function malang()
	{
		$data['row'] = $this->M_pesan->get();
		$this->template->load('template','Pemesanan/pemesanan_malang',$data);
	}
	public function pemegang()
	{
		$data['row'] = $this->M_pesan->get();
		$this->template->load('template','Pemesanan/data_pemegang_tiket',$data);
	}
	public function cekin($id)
	{
		$this->db->from('pemesanan');
		if($id !=null){
			$this->db->where('id_pemesanan', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function veri_tol($id)	
	{
		/*$id = $this->input->post('id_maaf');*/
        $pow = $this->M_pesan->getone($id);
         foreach($pow->result_array() as $row){
			 $no_in =$row['id_pemesanan'];
			 $id_tik =$row['id_tiket'];
             $stat = $row['status_pemesanan'];
		 }
		 if($stat == 2 or $stat == 1)
		 	{
				$core = $this->M_pesan->perip1($id); 
				$this->auto_emailT($no_in);
				echo"<script>alert('Data Tertolak');</script>";
				echo "<script>window.history.back();</script>";
			}
	}
	public function veri($id)	
	{
		/*$id = $this->input->post('id_maaf');*/
        $pow = $this->M_pesan->getone($id);
         foreach($pow->result_array() as $row){
			 $no_in =$row['id_pemesanan'];
			 $id_tik =$row['id_tiket'];
             $stat = $row['status_pemesanan'];
         }
        if($stat == 2){
		$dir_op = './upload/bc_user/'.$id_tik.'/';
        //$this->M_pesan->perip1($id);
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE
		$config['cacheable']	= true; //boolean, the default is true
		$config['cachedir']		= './upload/'; //string, the default is application/cache/
		$config['errorlog']		= './upload/'; //string, the default is application/logs/
		//$config['imagedir']		= './upload/bc_user/'; //direktori penyimpanan qr code
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		if((file_exists($dir_op))&&(is_dir($dir_op))) 
		{ 
			$config['imagedir']		= './upload/bc_user/'.$id_tik.'/';
		} 
		else 
		{ 
		//memasukan fungsi mkdir 
		$fd = mkdir ($dir_op); 
		$config['imagedir']		= './upload/bc_user/'.$id_tik.'/';
		} 
		$image_name=$no_in.'.png'; //buat name dari qr code sesuai dengan nim
		$params['data'] = $no_in; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

		$core = $this->M_pesan->bc($id,$image_name); 
        //redirect("pemesanan");
        }
		$this->auto_email($no_in,$id_tik);
               echo"<script>alert('Data sudah terverifikasi');</script>";
               echo "<script>window.location='".base_url('pemesanan')."';</script>";
	}

	public function auto_email($no_in,$id_tik)
	{  
	$pow = $this->M_pesan->getjo($no_in);
	 foreach($pow->result_array() as $row){
		 $nama = $row['nama'];
		 $totalbayar = $row['totalbayar'];
		 $email = $row['email'];
		 $jenis_tiket = $row['jenis'];
		 $kota = $row['kota'];
		 $barcode = $row['barcode'];
		 $jumlah_pesanan = $row['jumlah_pesanan'];
	 }
	$url = base_url("./upload/bc_user/".$id_tik."/");
	$to = $email;
	$subject = "E-Ticket Konser Terima Kasih Tuhan dan Hujan Tour Musikologi : ".$kota;
	$message = "
	<html>
	<head>
	<title>E-Ticket Konser Terima Kasih Tuhan dan Hujan Tour Musikologi : ".$kota."</title>
	</head>
	<body>
	<p>
	<h3>Asik, kita akan jumpa di Konser Terima Kasih Tuhan dan Hujan Tour Musikologi!</h3><br><br>
	<b>Hai,".$nama."</b><br>
	Detail pesanan:<br>
		Jenis Tiket:<br>
		".$jenis_tiket." ".$kota." dengan jumlah pesanan sebanyak : ".$jumlah_pesanan."
	<br>
	<br>
	<h3>Tunjukkan kode ini untuk ditukarkan menjadi gelang di hari H. Sampai jumpa!</h3><br><br>
	<img src='".$url.$barcode."'>
	</p>
	</body>
	</html>
	";
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <initiketnya@musikologifest.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	mail($to,$subject,$message,$headers);
}
public function auto_emailT($no_in)
	{  
	$pow = $this->M_pesan->getjo($no_in);
	 foreach($pow->result_array() as $row){
		 $nama = $row['nama'];
		 $totalbayar = $row['totalbayar'];
		 $email = $row['email'];
		 $jenis_tiket = $row['jenis'];
		 $kota = $row['kota'];
		 $barcode = $row['barcode'];
	 }
	$to = $email;
	$subject = "Tour Terimakasih Tuhan & Hujan : ".$kota;
	$message = "
	<html>
	<head>
	<title>Tour Terimakasih Tuhan & Hujan : ".$kota."</title>
	</head>
	<body>
	<p>
	<h3> HEY ".$nama."</h3><br>
	<h3>Yah, kamu belum bayar ya?:( </h3><br>
	Jangan khawatir, masih bisa isi ulang formnya loh biar kita bisa nyanyi bareng 
	Nosstress di Konser Terima Kasih Tuhan dan Hujan Tour Musikologi.<br>
	<a href='https://musikologifest.com'>Musikologi Festival 2020</a>
	</p>
	</body>
	</html>
	";
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <initiketnya@musikologifest.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	mail($to,$subject,$message,$headers);
}
}
