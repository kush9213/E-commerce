<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function login_check()
	{	
		$id=$this->input->get('id');
		$data['all_category'] = $this->Admin_model->fetch_add($id);
		$data['view_category'] = $this->Admin_model->category();
		$data['category'] = $this->Admin_model->sub_category();
		
		$data['gallery_imagess'] = $this->Admin_model->view_gallery_images($id);

		$data['fetch_basic_data'] = $this->Admin_model->fetch_basic_data($id);
        $data['fetch_images'] = $this->Admin_model->fetch_images($id);

		// print_r($data);
		// die;
		$this->load->view('include/login_header', $data);
		$this->load->view('admin', $data);
      
	}


	

}