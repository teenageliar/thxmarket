<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_event extends CI_Model 
{
	public function get($id = null)
	{
		$this->db->from('roadshow');
		if($id !=null){
			$this->db->where('id_show', $id);
		}
		$query = $this->db->get();
		return $query;
	}
		public function getdetail($id = null)
	{
		$this->db->from('roadshow','jenis_tiket');
		$this->db->join('jenis_tiket', 'jenis_tiket.id_show = roadshow.id_show');
		if($id !=null){
			$this->db->where('id_jenis', $id);
		}
		$query = $this->db->get();
		return $query;
	}

}