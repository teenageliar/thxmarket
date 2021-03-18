<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_show extends CI_Model 

{
    private $_table = "roadshow";

    public $nama;
    public $lokasi;
    public $tanggal;
    public $keterangan;
    public $foto = "default.jpg";
    
	public function get($id = null)
	{
		$this->db->from('roadshow');
		if($id !=null){
			$this->db->where('id_show', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function save()
    {
        $post = $this->input->post();
      
        /*field di database*/  $this->nama = $post["nama"]; //post nama form
        /*field di database*/ $this->kota = $post["kota"]; //post nama form
		$this->lokasi = $post["lokasi"];
		$this->tanggal = $post["tanggal"];
		$this->foto = $this->_uploadImage();
        $this->keterangan = $post["keterangan"];
        $this->keseluruhan_tiket = $post["keseluruhan_tiket"];
        $this->db->insert($this->_table, $this);
    }
	private function _uploadImage()
	{

		$config['upload_path']          = './upload/show/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = 'musikologi'.$nama;
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

	private function _deleteImage($id)
	{
		$product = $this->getById($id);
		if ($product->image != "default.jpg") {
			$filename = explode(".", $product->image)[0];
			return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
		}
	}
		public function edit($post)
	{
		$params =[ 
			'nama' => $post['nama'],
			'kota' => $post['kota'],
			'lokasi' => $post['lokasi'],
			'tanggal' => $post['tanggal'],
			'foto' => $post['foto'],
			'keterangan' => $post['keterangan'],
			'keseluruhan_tiket' => $post['keseluruhan_tiket'],

		];
		$this->db->where('id_show', $post['id']);
		$this->db->update('roadshow', $params);
	}
	public function del($id)
	{
		$this->db->where('id_show', $id);
		$this->db->delete('roadshow');
	}
}
  