<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function admin()
	{
        $email=$this->input->post('email');
		$password=$this->input->post('password');
		
		$this->db->select('*');
		$this->db->from('signup_admin');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get();
		$login=$query->row();
		// print_r($login->position);
		// die;
		if($login->position){
			$this->session->set_userdata('name',$login->name);
			$this->session->set_userdata('email',$login->email);
			$this->session->set_userdata('id',$login->id);
		
			return 1;
		} else {
			return 0;
		}
	}

	
}
