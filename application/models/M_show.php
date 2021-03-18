<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_show extends CI_Model
{
    private $_table = "roadshow";

    public $nama;
    public $lokasi;
    public $tanggal;
    public $keterangan;
    public $foto = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],
            
            ['field' => 'kota',
            'label' => 'kota',
            'rules' => 'required'], 
            
            ['field' => 'lokasi',
            'label' => 'lokasi',
            'rules' => 'required'], 
 
            ['field' => 'tanggal',
            'label' => 'tanggal',
            'rules' => 'required'], 
            
            ['field' => 'keterangan',
            'label' => 'keterangan',
            'rules' => 'required'],
            
            ['field' => 'keseluruhan_tiket',
            'label' => 'keseluruhan_tiket',
            'rules' => 'required'],
        ];
    }

    public function getAll($limit,$start)
    {
        $query = $this->db->get($this->_table, $limit, $start);
        return $query;
    }   
    
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_show" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
      
        /*field di database*/ $this->nama = $post["nama"]; //post nama form
        /*field di database*/ $this->kota = $post["kota"]; //post nama form
		$this->lokasi = $post["lokasi"];
		$this->tanggal = $post["tanggal"];
		$this->foto = $this->_uploadImage();
        $this->keterangan = $post["keterangan"];
        $this->keseluruhan_tiket = $post["keseluruhan_tiket"];
        $this->db->insert($this->_table, $this);
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
	
	private function _uploadImage()
	{

		$config['upload_path']          = './upload/show/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->tanggal;
		$config['overwrite']			= true;
		$config['max_size']             = 5000; // 5MB
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

}
