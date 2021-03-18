<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengu extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('M_login');//load model login
            if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
              //$this->load->view('admin/login');
            }else{
              echo "Anda tidak berhak mengakses halaman ini";
                }
//code di atas atas untuk session
    
     $this->load->library('pagination');//load library pagination untuk list 
        $this->load->model("M_pengu");
        $this->load->library('form_validation');
	}
	public function tambah()
	{
		$this->load->view('admin/tambah_pengu');//memanggil form tambah di menu pengu
	}
        public function add()
    {
        $validation = $this->form_validation;//valiasi awal 
        $validation->set_rules($this->M_pengu->rules());//memanggil model M_pengu dengan fungsi rules
        if ($validation->run()) {
            $this->M_pengu->save();//memanggil fungsi untuk insert database pengu di M_model
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        redirect('pengu/pengu_list');//jika semua script diatas yang ada di fungsi ini maka diarahkan ke controller pengu dengan funhgsi pengu_;ist
    }
    public function pengu_list(){
      //konfigurasi pagination
        $config['base_url'] = site_url('pengu/pengu_list'); //site url
        $config['total_rows'] = $this->db->count_all('pengunjung'); //total row
        $config['per_page'] = 5;  //pengu record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination"><nav><ul class="p">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="active" style="background:blue;"><span class="">';
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li ><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class=""><span class="">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->M_pengu->getAll($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        
            $this->load->view('admin/pengunjung/lihat_pengunjung', $data);//load view dengan memanggil data array multidimensi
    }
  public function edit($id = null)
    {
      //fungsi ini adalah untuk memanggil data di form eit
        echo $id;
        if (!isset($id)) 
        redirect('pengu/pengu_list');
        $product = $this->M_pengu;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
      
         $data["product"] = $product->getById($id);
        if (!$data["product"]) pengu_404();
        $this->load->view("admin/edit_pengu", $data);
    }
     public function edit_act()
    {
         //fungsi untuk query edit
        $validation = $this->form_validation;
        $validation->set_rules($this->M_pengu->rules());
        if ($validation->run()) {
            $this->M_pengu->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
         redirect('pengu/pengu_list');
      
    }
     public function delete($id=null)
    {
         
         //delete
        if (!isset($id)) pengu_404();
        
        if ($this->M_pengu->delete($id)) {
            redirect(site_url('pengu/pengu_list'));
        }
    }
    
  
}