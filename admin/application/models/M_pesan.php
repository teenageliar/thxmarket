<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model 
{

	public function getone($id)
	{
		$this->db->from('pemesanan');
		$this->db->join('jenis_tiket', 'jenis_tiket.id_jenis = pemesanan.id_tiket');
		$this->db->join('pengunjung', 'pengunjung.id_pengunjung = pemesanan.id_pengunjung');
		if($id !=null){
			$this->db->where('id_pemesanan', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function perip($id)
	{
		$this->db->set('status', '4',$id);
		$this->db->where('id_pemesanan', $id);
		$this->db->update('pemesanan');
	}
	public function get($id = null)
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
	public function getjo($id)
	{
		$this->db->from('roadshow');
		$this->db->join('jenis_tiket', 'roadshow.id_show = jenis_tiket.id_show ');
		$this->db->join('pemesanan', 'jenis_tiket.id_jenis = pemesanan.id_tiket');
		$this->db->join('pengunjung', 'pemesanan.id_pengunjung = pengunjung.id_pengunjung');
		if($id !=null){
			$this->db->where('pemesanan.id_pemesanan', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function del($id)
	{
		$this->db->where('id_pemesanan', $id);
		$this->db->delete('pemesanan');
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
	public function cekin_gw($id)
	{
		$this->db->from('token');
		if($id !=null){
			$this->db->where('token_kode', $id);
		}
		$query = $this->db->get();
		return $query;
	}

		public function get_l()
	{
		$this->db->from('maaf');
		$query = $this->db->get();
		return $query;
	}
	
	public function perip1($id)
	{
		$this->db->set('status_pemesanan', '3',$id);
		$this->db->where('id_pemesanan', $id);
		$this->db->update('pemesanan');
	}
    	public function perip_2($id)
	{
		ini_set('date.timezone', 'Asia/Jakarta');
		$this->db->set('status_pemesanan', '5',$id);
		$this->db->set('tanggal_penukaran', date('y-m-d H:i:s'),$id);
		$this->db->where('id_pemesanan', $id);
		$this->db->update('pemesanan');
	}   	
    public function perip_3($id)
	{
		$this->db->set('status', '3',$id);
		$this->db->where('no_identitas', $id);
		$this->db->update('maaf');
	} 
	public function cekot($id)
	{
		$this->db->set('status', '2',$id);
		$this->db->where('no_identitas', $id);
		$this->db->update('maaf');
	} 
    public function perip_4($id)
	{ini_set('date.timezone', 'Asia/Jakarta');
		$this->db->set('status', '1',$id);
		$this->db->set('tanggal_masuk', date('y-m-d H:i:s'),$id);
		$this->db->where('token_kode', $id);
		$this->db->update('token');
	}
	public function perip_5($id)
	{	ini_set('date.timezone', 'Asia/Jakarta');
		$this->db->set('status', '0',$id);
		$this->db->set('tanggal_keluar', date('y-m-d H:i:s'),$id);
		$this->db->where('token_kode', $id);
		$this->db->update('token');
	}
    	public function bc($id,$image_name)
	{
		ini_set('date.timezone', 'Asia/Jakarta');
		$this->db->set('barcode', $image_name,$id);
		$this->db->set('tanggal_approve', date('y-m-d H:i:s'),$id);
		$this->db->set('status_pemesanan', '4',$id);
		$this->db->where('id_pemesanan', $id);
		$this->db->update('pemesanan');
	}
    public function save_gate($namegate){
        $this->barcode = $namegate;
        $this->status = "0";
        $this->db->insert("token", $this);
        }
    public function sum_tiket(){
        $sql = "SELECT SUM(jumlah_pesanan) as jumlah_pesanan FROM pemesanan";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_pesanan;
    }
    public function sum_duit(){
        $sql = "SELECT SUM(totalbayar) as totalbayar FROM pemesanan where status_pemesanan = '4'";
        $result = $this->db->query($sql);
        return $result->row()->totalbayar;
    }
}