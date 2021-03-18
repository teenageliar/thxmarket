<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_tiket extends CI_Model
{
    private $_table = "jenis_tiket";

    public $id_show;
    public $jenis;
    public $tanggal_mulai;
    public $tanggal_selesai;
    public $harga;
    public $jumlah_tiket;

    public function rules()
    {
        return [
            ['field' => 'id_show',
            'label' => 'id_show',
            'rules' => 'required'],

            ['field' => 'jenis',
            'label' => 'jenis',
            'rules' => 'required'], 
            
            ['field' => 'tanggal_mulai',
            'label' => 'tanggal_mulai',
            'rules' => 'required'], 
            
            ['field' => 'tanggal_selesai',
            'label' => 'tanggal_selesai',
            'rules' => 'required'], 
            
            ['field' => 'harga',
            'label' => 'harga',
            'rules' => 'required'],

            ['field' => 'totalbayar',
            'label' => 'total_bayar',
            'rules' => 'required'],
            
            ['field' => 'jumlah_tiket',
            'label' => 'jumlah_tiket',
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
        return $this->db->get_where($this->_table, ["id_jenis" => $id])->row();
    }
    
      public function getByIdshow($id)
    {
        return $this->db->get_where($this->_table, ["id_show" => $id]);
    }
       public function getByIdjenis($id_jenis)
    {
        return $this->db->get_where($this->_table, ["id_jenis" => $id_jenis]);
    }
       public function getnamashow($id)
    {
        return $this->db->get_where("roadshow", ["id_show" => $id])->row();
    }
      public function bank()
    {
        return $this->db->get('bank');
    }
      public function atasnama()
    {
        $post = $this->input->post();
        $bank= $post["bank"];
        return $this->db->get_where("bank", ["nama_bank" => $bank]);
    }

      public function get_nominal()
    {
        $post = $this->input->post();
        $totalbayar= $post["total_bayar"];
        $this->db->select('id_pemesanan');
        $query = $this->db->get_where("pemesanan", ["totalbayar" => $totalbayar]);
        return $query;
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id_show = $post["id_show"];
		$this->jenis = $post["jenis_tiket"];
		$this->tanggal_mulai = $post["tanggal_mulai"];
		$this->tanggal_selesai = $post["tanggal_selesai"];
        $this->harga = $post["harga"];
        $rand = random_string('numeric',3);
        $this->totalbayar = $post["total_bayar"];
        $this->jumlah_tiket = $post["jumlah_tiket"];
        $this->db->insert($this->_table, $this);
    }

        public function save_pengunjung()
    {
        $post = $this->input->post();
        $this->nama =  $post["nama"];
        $this->no_identitas = $post["no_identitas"];
        $this->no_hp = $post["no_hp"];
        $this->email = $post["email"];
        
        $this->db->insert("pengunjung", $this);
    }

    public function update()
    {
     $post = $this->input->post();
        $this->id_show = $post["id_show"];
		$this->jenis = $post["jenis_tiket"];
		$this->tanggal_mulai = $post["tanggal_mulai"];
		$this->tanggal_selesai = $post["tanggal_selesai"];
        $this->harga = $post["harga"];
        $this->jumlah_tiket = $post["jumlah_tiket"];
        $this->db->update($this->_table, $this, array('id_jenis' => $post['id_jenis']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_jenis" => $id));
	}
	
	private function _uploadImage()
	{

		$config['upload_path']          = './upload/show/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->nama;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
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
    