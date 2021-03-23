<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model
{
    private $_table = "pemesanan";


    public $id_tiket;
    public $totalbayar;
    public $status_pemesanan;
    public $jumlah_pesanan;
    public $tanggal_pesan;
    public $tanggal_exp;
    public $tanggal_bayar;
    public $tanggal_approve;
    public $kode_unik;
    public $tanggal_penukaran;
    public $atas_nama;
    public $bukti_bayar = "default.jpg";
    

    public function rules()
    {
        return 
        [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],
            
            ['field' => 'id_pemesanan',
            'label' => 'id_pemesanan',
            'rules' => 'required'], 
            
            ['field' => 'jumlah_pesanan',
            'label' => 'jumlah_pesanan',
            'rules' => 'required'], 
 
            ['field' => 'tanggal_pesan',
            'label' => 'tanggal_pesan',
            'rules' => 'required'], 
            
            ['field' => 'status_pemesanan',
            'label' => 'status_pemesanan',
            'rules' => 'required'],

             ['field' => 'totalbayar',
            'label' => 'total_bayar',
            'rules' => 'required'],

            
        ];
    }

    public function getAll($limit,$start)
    {
        $query = $this->db->get($this->_table, $limit, $start);
       $query = $this->db->query("SELECT pemesanan.id_pemesanan,pemesanan.jumlah_pesanan,pemesanan.tanggal_pesan,pemesanan.status_pemesanan,pengunjung.nama FROM pemesanan INNER JOIN pengunjung ON pemesanan.id_pengunjung = pengunjung.id_pengunjung");
        return $query;
    } 
       public function getmax()
    {
       $this->db->select_max('id_pemesanan', 'maxKode');
        $query = $this->db->get('pemesanan');
        return $query;
    } 
     public function cari_pesanan($kode_unik)
    {

        $query = $this->db->get_where($this->_table, ["kode_unik" => $kode_unik]);
        $query = $this->db->query("SELECT pemesanan.id_pemesanan,pemesanan.kode_unik,pemesanan.jumlah_pesanan,pemesanan.totalbayar,pemesanan.tanggal_pesan,pemesanan.tanggal_exp,pemesanan.status_pemesanan,pengunjung.nama FROM pemesanan INNER JOIN pengunjung ON pemesanan.id_pengunjung = pengunjung.id_pengunjung where kode_unik = '$kode_unik'");
        return $query;
    }
    public function get($id)
    {
        $this->db->from('pemesanan');
        $this->db->join('jenis_tiket', 'jenis_tiket.id_jenis = pemesanan.id_tiket');
        $this->db->join('roadshow', 'jenis_tiket.id_show = roadshow.id_show');
        $this->db->join('pengunjung', 'pengunjung.id_pengunjung = pemesanan.id_pengunjung');
        if($id !=null){
            $this->db->where('id_pemesanan', $id);
        }
        $query = $this->db->get();
        return $query;
    }  
  /*   public function getTanggal()
    {
        $post = $this->input->post();
        $kodebayar = $post["kode_bayar"];
        $this->db->select('tanggal_pesan');
        return $this->db->get_where($this->_table, ["kode_unik" => $kodebayar]);
    }  */ 
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_show" => $id])->row();
    }
    public function getjo($id)
	{
		$this->db->from('roadshow');
		$this->db->join('jenis_tiket', 'roadshow.id_show = jenis_tiket.id_show ');
		$this->db->join('pemesanan', 'jenis_tiket.id_jenis = pemesanan.id_tiket');
		$this->db->join('pengunjung', 'pemesanan.id_pengunjung = pengunjung.id_pengunjung');
		if($id !=null){
			$this->db->where('pemesanan.kode_unik', $id);
		}
		$query = $this->db->get();
		return $query;
	}
    public function save($idpengunjung,$kode)
    {
        $post = $this->input->post();
        ini_set('date.timezone', 'Asia/Jakarta');
        $tglpesanan = date("y-m-d H:i:s");
        
        $kodeb = random_string('numeric',3);
        $totals = "15000";
        $tglex = date('Y-m-d H:i:s', strtotime('+1 days', strtotime($tglpesanan))); //db store
        $this->id_tiket = $post["id_tiket"];
        $this->jumlah_pesanan = "1";
        $this->id_pengunjung = $idpengunjung;
        $this->status_pemesanan = "1";
        $this->totalbayar = $totals + $kodeb;
        $this->tanggal_pesan = $tglpesanan;
        $this->tanggal_exp = $tglex;
        $this->kode_unik = $kode;
        $this->db->insert($this->_table, $this);
    }

    public function simpan_bukti()
    
    {ini_set('date.timezone', 'Asia/Jakarta');
        /*field di database*/ $this->kode_unik = $_POST["kode_unik"]; //post nama form
                              $tglbayar = date("y-m-d h:i:s");
                              $atasnama = $_POST["atasnama"];
                              $norek = $_POST["rek_pengirim"];
      
        /*field di database*/ $this->totalbayar = $_POST["totalbangsat"]; //post nama form
                              $this->bukti_bayar = $this->_uploadImage();
                              $this->tanggal_bayar = $tglbayar;
                              $this->atas_nama = $atasnama .' / '. $norek;

                              $this->db->set('bukti_bayar',$this->bukti_bayar);
                              $this->db->set('totalbayar',$this->totalbayar);
                              $this->db->set('tanggal_bayar',$this->tanggal_bayar);
                              $this->db->set('atas_nama',$this->atas_nama);
                              $this->db->set('status_pemesanan','2');
                              $this->db->where('kode_unik', $_POST["kode_unik"]);
                              $this->db->update($this->_table);
    }

    private function _uploadImage()
    {

    $config['upload_path']          = './upload/bukti/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $_POST["kode_unik"];
		$config['overwrite']			= true;
		$config['max_size']             = 12024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('_uploadimage')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
        
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_show = $post["id_show"];
        $this->nama = $post["nama"];
        $this->kota = $post["kota"];
		$this->lokasi = $post["lokasi"];
		$this->tanggal = $post["tanggal"];
        $this->keterangan = $post["keterangan"];
        $this->keseluruhan_tiket = $post["keseluruhan_tiket"];
		if ($post["edit"] == 'Ya') {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
		}

        $this->db->update($this->_table, $this, array('id_show' => $post['id_show']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_show" => $id));
	}

}
