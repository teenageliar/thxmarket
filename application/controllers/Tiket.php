
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {

function __construct(){
		parent::__construct();
        $this->load->model("M_tiket");
         $this->load->model("M_pengunjung");
        $this->load->model("M_pesan");
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
	}
   public function add($id_show)
	{
    $data['tiket'] = $this->M_tiket->getnamashow($id_show);
    $data['id_show'] = $id_show;
	$this->load->view('admin/tiket/form_tiket', $data);//memanggil form tambah di menu show
	}
    public function tiket_list($id){
        $data["tiket"] = $this->M_tiket->getByIdshow($id);
        $data["show"] = $this->M_tiket->getnamashow($id);
        $data["bank"] = $this->M_tiket->bank();
        $this->load->view('tiket/lihat_jenis', $data);
        //load view dengan memanggil data array multidimensi
    }
    public function pilih_tiket($id,$id_jenis){
        $data["tiket"] = $this->M_tiket->getByIdjenis($id_jenis);
        $data["show"] = $this->M_tiket->getnamashow($id);
        $data["bank"] = $this->M_tiket->bank();
        $this->load->view('tiket/pesan_tiket', $data);
        //load view dengan memanggil data array multidimensi
    }
    public function upload_bukti($kode_unik){
        $data["pesanan"] = $this->M_pesan->cari_pesanan($kode_unik);
        /*$tanggalp = $this->M_pesan->getTanggal();*/
        $pow = $this->M_pesan->cari_pesanan($kode_unik);
         foreach($pow->result_array() as $row){
             $tanggalp = $row['tanggal_pesan'];
         }

        /*$tp = date("2020-02-19 h:i");// database store*/

        $now = date("y-m-d H:i");
        $tglex = date('Y-m-d H:i', strtotime('+1 days', strtotime($tanggalp))); //db store

        echo "tanggal pemesanan : ".$tanggalp."<br>";
        echo "Tanggal expired :".$tglex."<br>"; 
        echo "tanggal sekarang : ".$now."<br>";//print tanggal

        //halaman pembayaran
        $tanggalsek = strtotime($now);
        $tanggalexp = strtotime($tglex);
        if($tanggalsek > $tanggalexp){
        $this->session->set_flashdata('success', '<?php echo "tanggal pemesanan : ".$tanggalp."<br>"; ?>');
        
        echo"<script>alert('Pemesanan sudah tidak berlaku, karna sudah melampaui waktu bayar!');</script>";
        	echo "<script>window.location='".base_url('index.php/show')."';</script>";        
        }else {
        $this->load->view('pemesanan/bukti',$data);
        }
    }

    public function kirim_bukti()
    {
       
            $this->M_pesan->simpan_bukti();//memanggil fungsi untuk insert database show di M_model
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        redirect('Show');
    }

    public function beli(){
         $this->load->library('form_validation');
        global $kode;
        $kodebayar = $kode;
        
        $post = $this->input->post();
        //$data["pemesanan"] = $this->M_pesan->getPesan();
        $data["datu"] = $post["total_bayar"];
        $data["dati"] = $post["jumlah_pesanan"];
        $data["kodebayar"] = $kode;
        
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('email','email','required|is_unique[pengunjung.email]');
        $this->form_validation->set_rules('no_hp','no_hp','required');
        
        

        $this->form_validation->set_message('required','{field} masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length','{field} minimal 3 karakter');
        $this->form_validation->set_message('is_unique','{field} ini sudah terpakai, silahkan coba yang lain');
        
        if($this->form_validation->run() == FALSE){
            
            echo"<script>alert('Pastikan data yang anda masukkan benar!! </br> Pastikan juga data diri yang anda inputkan belum pernah digunakan sebelumnya');</script>";
            echo "<script>window.history.back();</script>";

            
        }else{
            $this->add_pengunjung();
            if($this->db->affected_rows() > 0)
            {
                echo"<script>alert('Terima kasih, silakan tunggu untuk mendapatkan e-mail konfirmasi pembayaran!');</script>";
            }
                echo "<script>window.location='".base_url('index.php/show')."';</script>";
        }

        
    }    

    public function add_all(){
        $this->load->library('form_validation');
        global $kode;
        $kodebayar = $kode;
        
        $post = $this->input->post();
        //$data["pemesanan"] = $this->M_pesan->getPesan();
        $data["datu"] = $post["total_bayar"];
        $data["dati"] = $post["jumlah_pesanan"];
        $data["kodebayar"] = $kode;
        
        $this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('no_identitas','no_identitas','required|min_length[3]|is_unique[pengunjung.no_identitas]');
		$this->form_validation->set_rules('email','email','required|is_unique[pengunjung.email]');
		$this->form_validation->set_rules('no_hp','no_hp','required');
		
		

		$this->form_validation->set_message('required','{field} masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length','{field} minimal 3 karakter');
		$this->form_validation->set_message('is_unique','{field} ini sudah terpakai, silahkan coba yang lain');
		
		if($this->form_validation->run() == FALSE){
		    
		    echo"<script>alert('Pastikan data yang anda masukkan benar!!                                            Pastikan juga data diri yang anda inputkan belum pernah digunakan sebelumnya');</script>";
			echo "<script>window.history.back();</script>";

			
		}else{
			$this->add_pengunjung();
			if($this->db->affected_rows() > 0)
			{
				echo"<script>alert('Terima kasih, silakan tunggu untuk mendapatkan e-mail konfirmasi pembayaran!');</script>";
			}
				echo "<script>window.location='".base_url('index.php/show')."';</script>";
		}

    }
    public function auto_email($id)
        {  
        $pow = $this->M_pesan->getjo($id);
         foreach($pow->result_array() as $row){
             $nama = $row['nama'];
             $totalbayar = $row['totalbayar'];
             $email = $row['email'];
         }
        $url = "https://musikologifest.com/asset/image/kontent/";
        $to = $email;
        $subject = "Pembayaran Tiket Tour Musikologi ".$nama;
        $message = "
        <html>
        <head>
        <title>Pembayaran Tiket Tour Musikologi ".$nama."</title>
        </head>
        <body>
        <p>
        <h3>Pembayaran Tiket Tour Musikologi</h3><br><br>
        <img src='".$url."logo-musik.png' width='300' height='90'>
        <h3>Total Pembayaran: Rp.".$totalbayar."</h3>
        <b>Hai,".$nama."</b><br>
       <ol start='1'>
        <l1>1. Gunakan ATM/iBanking/mBanking/SMS Banking/setor tunai/E-wallet untuk transfer ke rekening Musikologi: <br>
            <ul>
            <li> Mandiri a/n Alvin Wahyu Pangestu Sudrajat 1570005141560</l1>
            <li>BNI a/n Sholihah Asri 0398661955</l1>
            <li>BCA a/n Rahma Ismi Novia 6090396151 </l1>
            <li>BRI a/n Erianto Limbong 331601002552506</l1>
            <li>DANA a/n Zulfani Tri Setyabudi 0851 5622 5704</l1>
            <li>Go-Pay a/n Sholihah Asri 0812 8338 3269</l1>
            <li>Ovo a/n Ergita Purnama 0812 9897 0612</l1>
            <li>Shopeepay a/n sholihaasri</l1>
            </ul>
        </l1>
         <l1>
        Setelah melakukan pembayaran, silahkan    
        <a href='https://musikologifest.com/index.php/tiket/upload_bukti/".$id."'>KLIK LINK DISINI</a> untuk upload bukti pembayaran (BUKAN MEMBALAS EMAIL INI). ukuran gambar maksimal 2 mb, dengan format JPG/JPEG/PNG.<br>
        2. Pastikan yang diupload bukti transfer, bukan pap chat uwu kamu dengan kekasih:(<br>
        3. Mohon untuk tidak memberikan bukti atau konfirmasi pembayaran ke siapapun, selain untuk Musikologi.
         </l1>
         </ol>
        </p>
        </body>
        </html>
        ";
        /*echo $nama;*/
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <initiketnya@musikologifest.com>' . "\r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to,$subject,$message,$headers);
    }

    public function add_pengunjung(){
        global $kode;
        $post = $this->input->post();
        $nama = $post["nama"];
        $no_hp = $post["no_hp"];
        $email = $post["email"];
        
        
        
       $this->M_pengunjung->save_pengunjung();//memanggil fungsi untuk insert database show di M_model

        $id_tiket = $post["id_tiket"];
        $jumlah_pesanan = $post["jumlah_pesanan"];
        $totalbayar = $post["total_bayar"];
        $status_pemesanan = "1";
        $data["idn"] = $this->M_pengunjung->getBynik($no_identitas);
        
        $idpengunjung = $data["idn"]->id_pengunjung;
        
        $pow = $this->M_pesan->getmax();
         foreach($pow->result_array() as $row){
			 $max =$row['maxKode'];
		 }
            $j = $max + 1;
            $char = "PM";
            $kode= $char.$j;
         $this->M_pesan->save($idpengunjung, $kode);
       
             $this->auto_email($kode);
       
       
        
    }
    public function call_noidn($no_identitas){
      
    }
        public function add_tiket()
    {
        $post = $this->input->post();
        $id_show = $post["id_show"];
        $validation = $this->form_validation;//valiasi awal 
        $validation->set_rules($this->M_tiket->rules());//memanggil model M_show dengan fungsi rules
        if ($validation->run()) {
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
            $this->M_tiket->save();//memanggil fungsi untuk insert database show di M_model
        redirect('tiket/tiket_list/'.$id_show);//jika semua script diatas yang ada di fungsi ini maka diarahkan ke controller show dengan funhgsi show_;ist
    }
     public function edit($id = null)
    {
        $product = $this->M_tiket;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
         $data["product"] = $product->getById($id);
        $this->load->view("admin/tiket/edit_form", $data);
    }
     public function edit_act()
    {
         $post = $this->input->post();
        $id_show = $post["id_show"];
         //fungsi untuk query edit
        $validation = $this->form_validation;
        $validation->set_rules($this->M_tiket->rules());
        if ($validation->run()) {
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
         $this->M_tiket->update();
         redirect('tiket/tiket_list/'.$id_show);
    }
         public function delete($id=null, $id_show)
    {
        $id_show1 = $id_show;
         //delete
        if (!isset($id)) show_404();
        if ($this->M_tiket->delete($id)) {
            redirect(site_url('tiket/tiket_list/'.$id_show1));
        }
    }
  
}


