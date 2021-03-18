<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_maaf extends CI_Model 
{

	public function get($id = null)
	{
		$this->db->from('maaf');
		if($id !=null){
			$this->db->where('id_maaf', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	public function perip($id)
	{
		$this->db->set('status', 'status',$id);
		$this->db->where('id_maaf', $id);
		$this->db->update('maaf');
	}
	public function del($id)
	{
		$this->db->where('id_maaf', $id);
		$this->db->delete('maaf');
	}
}
  