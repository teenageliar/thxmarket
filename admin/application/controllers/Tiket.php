
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('M_login');//load model login
            if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
              //$this->load->view('login');
            }else{
              echo "Anda tidak berhak mengakses halaman ini";
                }
        $this->load->model("M_tiket");
        $this->load->library('form_validation');
	}
   public function add($id_show)
	{
       	$data['tiket'] = $this->M_tiket->getnamashow($id_show);
        $data['id_show'] = $id_show;
	$this->template->load('template','tiket/form_tiket', $data);//memanggil form tambah di menu show
	}
    public function tiket_list($id){
        $data["tiket"] = $this->M_tiket->getByIdshow($id);
        $data["show"] = $this->M_tiket->getnamashow($id);
        $this->template->load('template','tiket/lihat_jenis',$data);
        //load view dengan memanggil data array multidimensi
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
        $this->load->view("tiket/edit_form", $data);
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


