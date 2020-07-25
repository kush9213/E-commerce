<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

	public function index()
	{

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() ==false){
			$this->session->set_flashdata('fail', 'Error In Signed Up');
			return redirect(base_url().'index.php/sign_up/first_page');

		}else{

			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$password = $this->input->post('password');
			$position = $this->input->post('check');
			
			$this->Login_model->sign_up();
			if($position==1){

				$sin = $this->Login_model->send_id($email, $name, $password);
			
				$this->Login_model->send($sin);
			}
		
			$this->session->set_flashdata('done', 'Successfully Signed Up');
			return redirect(base_url().'index.php/sign_up/first_page');
		}
	}


	public function individual(){
		$resutl=$this->Login_model->admin();
		if($resutl) {
			$this->session->set_flashdata('done', 'Successfully Logged In');

			redirect(base_url().'index.php/sign_up/first_page');


	   } else {
		   $this->session->set_flashdata('error', 'Invalid Details');

		   redirect(base_url().'index.php/sign_up/first_page');
	   }

	}

	public function logout(){
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
        $this->session->unset_userdata('id');
		redirect(base_url().'index.php/sign_up/first_page');
	}
	public function first_page(){
		
		$data['category'] = $this->Admin_model->sub_category();
		$data['view_category'] = $this->Admin_model->category();
		
		$this->load->view('include/login_header', $data);
			$this->load->view('first_page');
	}
	public function view(){
		
		$data['all_category'] = $this->Admin_model->view_advertisement();
		$data['view_category'] = $this->Admin_model->category();
		$data['category'] = $this->Admin_model->sub_category();
	
		$this->load->view('include/login_header', $data);
			$this->load->view('display_add');
	}
	
	public function category()
	{	

		$data['all_category'] = $this->Admin_model->view_advertisement_by_category();
		$data['view_category'] = $this->Admin_model->category();
		$data['category'] = $this->Admin_model->sub_category();
		// print_r($data);
		// die;
		$this->load->view('include/login_header', $data);
		$this->load->view('display_add', $data);
      
	}
	
	public function sub_category()
	{	
		$data['all_category'] = $this->Admin_model->view_advertisement_by_sub_category();
		$data['view_category'] = $this->Admin_model->category();
		$data['category'] = $this->Admin_model->sub_category();
		
		$this->load->view('include/login_header', $data);
		$this->load->view('display_add', $data);
		
	}

	public function search(){
		$data['all_category'] = $this->Admin_model->search();
		$data['view_category'] = $this->Admin_model->category();
		$data['category'] = $this->Admin_model->sub_category();
		
		$this->load->view('include/login_header', $data);
		$this->load->view('display_add', $data);

	}
			

}
