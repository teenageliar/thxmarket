<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model 
{
	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$post['username']);
		$this->db->where('password',md5($post['password']));
		$query = $this->db->get();
		return $query;

	}

	public function get($id = null)
	{
		$this->db->from('user');
		if($id !=null){
			$this->db->where('id_user', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function add($post)
	{
		$params['nama'] = $post['nama'];
		$params['username'] = $post['username'];
		$params['password'] = md5($post['password']);
		$params['status'] = $post['status'];
		$this->db->insert('user', $params);
	}
	public function edit($post)
	{
		$params['nama'] = $post['nama'];
		$params['username'] = $post['username'];
		if(!empty($post['password']))
		{
			$params['password'] = md5($post['password']);
		}
		
		$params['status'] = $post['status'];
		$this->db->where('id_user', $post['id_user']);
		$this->db->update('user', $params);

	}
	public function del($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}
}
  