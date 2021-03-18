<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_token extends CI_Model 
{

	public function hitung()
	{
        $this->db->select(' COUNT("id") as total');
        $hasil = $this->db->get('token');
        return $hasil;
	}
    public function save_gate($tk,$namegate){
        $this->token_kode = $tk;
        $this->barcode = $namegate;
        $this->status = "0";
        $this->db->insert("token", $this);
        }
}