<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		
		$this->load->view('login');
	}
	public function super_admin_login()
	{
		$resutl=$this->Login_model->super_admin();
		if($resutl) {
		
			redirect(base_url().'index.php/view_super_admin');


	   } else {
		   $this->session->set_flashdata('error', 'Invalid Details');

		   redirect(base_url());
	   }
	  
   }

   public function logout(){

	$this->session->unset_userdata('username');
	$this->session->unset_userdata('name');
	$this->session->unset_userdata('super_admin_id');
	redirect(base_url());

}

}