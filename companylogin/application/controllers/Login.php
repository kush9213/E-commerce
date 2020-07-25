<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}


	public function admin_login()
	{
		$resutl=$this->Login_model->admin();
		if($resutl) {
			// $this->Admin_model->add_id();
			redirect(base_url().'index.php/view_admin');


	   } else {
		   $this->session->set_flashdata('error', 'Invalid Details');

		   redirect(base_url());
	   }
	  
   }
   public function logout(){

	$this->session->unset_userdata('email');
	$this->session->unset_userdata('name');
	$this->session->unset_userdata('id');
	redirect(base_url());

}


}
