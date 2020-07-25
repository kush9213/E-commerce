<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {
    
    function __construct()
	{ 
         parent::__construct(); 
		 error_reporting(0);
		
		    if($this->session->userdata('username')) { } else {
			redirect(base_url());
		}
    } 

    
	public function index()
	{
			$data['category'] = $this->Super_admin_model->view_category();

		    $this->load->view('header');
			$this->load->view('super_admin', $data);
			$this->load->view('footer');
    }
    

	public function add_category()
	{
        
		    $this->load->view('header');
			$this->load->view('add_category');
			$this->load->view('footer');
	}
    
    public function check_category(){

        $this->form_validation->set_rules('category_name', 'Category Name', 'required');
	
		if ($this->form_validation->run() ==false){
            $this->load->view('header');
			$this->load->view('add_category');
			$this->load->view('footer');
	
		}else{
        	$this->Super_admin_model->add_category();
			$this->session->set_flashdata('done', 'Added successfully');
			redirect('view_super_admin');
		}
    }

    public function delete_category() {
	    $this->Super_admin_model->delete_category();
        redirect('view_super_admin');
	}

    public function get_category() {
        $data['class'] = $this->Super_admin_model->get_category();
        $this->load->view('header');
        $this->load->view('edit_category', $data);
        $this->load->view('footer');	

	}
    public function edit_category() {
        $this->Super_admin_model->edit_category();
        
		redirect(base_url().'index.php/super_admin');
	}
   


    public function view_sub_category()
	{
			$data['category'] = $this->Super_admin_model->view_sub_category();

		    $this->load->view('header');
			$this->load->view('view_sub_category', $data);
			$this->load->view('footer');
    }

    public function add_sub_category(){
        $this->form_validation->set_rules('category_id', 'Category Name', 'required');

        $this->form_validation->set_rules('sub_category', 'Sub Category Name', 'required');
        $data['fetch_category'] = $this->Super_admin_model->view_category();
     
		if ($this->form_validation->run() ==false){
            $this->load->view('header');
			$this->load->view('add_sub_category', $data);
			$this->load->view('footer');
	
		}else{
        	$this->Super_admin_model->add_sub_category();
			$this->session->set_flashdata('done', 'Added successfully');
			redirect('view_sub_category');
		}
    }


    public function delete_sub_category() {
	    $this->Super_admin_model->delete_sub_category();
        redirect('view_sub_category');
    }
    
    public function get_sub_category() {
        $data['class'] = $this->Super_admin_model->get_sub_category();
        $data['fetch_category'] = $this->Super_admin_model->view_sub_category();

        $this->load->view('header');
        $this->load->view('edit_sub_category', $data);
        $this->load->view('footer');	

	}
    public function edit_sub_category() {
        $this->Super_admin_model->edit_sub_category();
        
		redirect(base_url().'index.php/view_sub_category');
	}

}