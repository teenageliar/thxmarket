<?php 
class Token extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_token'); //pemanggilan model mahasiswa
	}

	function index(){
        $data["total"] = $this->m_token->hitung();
		$this->template->load('template','Token/token', $data);
	}

	function simpan($last){
        $j = $last;
        $x = $last + 999;
        for($i=$last;$i<=$x;$i++){
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE
		$config['cacheable']	= true; //boolean, the default is true
		$config['cachedir']		= './token_s/'; //string, the default is application/cache/
		$config['errorlog']		= './toke_s/'; //string, the default is application/logs/
		$config['imagedir']		= './token_s/qr/'; //direktori penyimpanan qr code
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$image_name="token_".$i.'.png'; //buat name dari qr code sesuai dengan nim
        $gg = "token_".$i;
		$params['data'] = "token_".$i; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
		$this->m_token->save_gate($gg,$image_name); //simpan ke database
		 //redirect ke mahasiswa usai simpan data
        }
        redirect('token');
    }
}