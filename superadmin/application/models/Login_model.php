<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function super_admin()
	{
        $username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$this->db->select('*');
		$this->db->from('super_admin');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get();
		$login=$query->row();
		
		if($login){
			$this->session->set_userdata('name',$login->name);
			$this->session->set_userdata('username',$login->username);
			$this->session->set_userdata('super_admin_id',$login->super_admin_id);
		
			return 1;
		} else {
			return 0;
		}
	}
	
}
