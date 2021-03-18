<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

function __construct(){
		parent::__construct();
        $this->load->library('pagination');//load library pagination untuk list 
        $this->load->model("M_event");
        $this->load->model("M_tiket");
        $this->load->library('form_validation');
	}
	public function tambah()
	{
		$this->load->view('admin/show/tambah_show');//memanggil form tambah di menu show
	}
        public function add()
    {
        $validation = $this->form_validation;//valiasi awal 
        $validation->set_rules($this->M_event->rules());//memanggil model M_event dengan fungsi rules
        if ($validation->run()) {
            $this->M_event->save();//memanggil fungsi untuk insert database show di M_model
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        redirect('Show/show_list');//jika semua script diatas yang ada di fungsi ini maka diarahkan ke controller show dengan funhgsi show_;ist
    }
    public function tiket_list($id){
        $data["tiket"] = $this->M_tiket->getByIdshow($id);
        $data["show"] = $this->M_tiket->getnamashow($id);
        $this->load->view('admin/event/event_detail', $data);
        //load view dengan memanggil data array multidimensi
    }
    public function event_new(){
      //konfigurasi pagination
        $config['base_url'] = site_url('Event/event_new'); //site url
        $config['total_rows'] = $this->db->count_all('roadshow'); //total row
        $config['per_page'] = 20;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']         = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination"><nav><ul class="pagination paginate_button page-item previous">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="paginate_button"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="paginate_button page-item active" style="background:blue; color:white; width:40px;padding:8px; text-align:center;"><span class="">';
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open']    = '<li class="paginate_button page-item "><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="paginate_button page-item "><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li ><span class="page-link">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li class="paginate_button page-item">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->M_event->getAll($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        
            $this->load->view('admin/Event/event_list', $data);//load view dengan memanggil data array multidimensi
    }
  public function order($id = null)
    {
      //fungsi ini adalah untuk memanggil data di form eit
      
        if (!isset($id)) 
        redirect('event/event_new');
        $product = $this->M_event;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
      
         $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        $this->load->view("admin/event/co_form", $data);
    }
     public function edit_act()
    {
         //fungsi untuk query edit
        $validation = $this->form_validation;
        $validation->set_rules($this->M_event->rules());
        if ($validation->run()) {
            $this->M_event->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
         redirect('show/show_list');
      
    }
     public function delete($id=null)
    {
         
         //delete
        if (!isset($id)) show_404();
        
        if ($this->M_event->delete($id)) {
            redirect(site_url('show/show_list'));
        }
    }
    
  
}
