<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
	{
         parent::__construct(); 
		 error_reporting(0);

		    if($this->session->userdata('id')) { } else {
			redirect(base_url());
		}
}


	public function index()
	{
			$data['basic_info'] = $this->Admin_model->basic_info();
			$data['gallery_imagess'] = $this->Admin_model->view_gallery_images();
			$data['images'] = $this->Admin_model->view_images();


		    $this->load->view('header');
			$this->load->view('admin', $data);
			$this->load->view('footer');
    }

			public function edit_basic_info() {
	
			$this->Admin_model->edit_basic_info();

			$this->session->set_flashdata('done', 'Update Successful');
			redirect(base_url().'index.php/view_admin');
		}

		public function edit_images() {


			$config['upload_path']          = 'uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 200000;

			$this->load->library('upload', $config);
		
			if (!$this->upload->do_upload('landing_image')) {
			$this->session->set_flashdata('error','Uploding Error, Please Try Again');
			return redirect(base_url().'index.php/view_admin');
			} else {

			$dataa =  $this->upload->data();

		
			$config['image_library'] = 'GD2';
			$config['source_image'] = './uploads/'.$dataa['raw_name'].$dataa ['file_ext'];
			$config['maintain_ratio'] = TRUE;
			// $config['quality'] = '23%';
			$config['width']         = 240;
			$config['height']       = 300;
			$data['landing_image'] = $dataa['raw_name'].$dataa['file_ext'];
			}
			
			$this->upload->do_upload('pics');
				$dataa =  $this->upload->data();
				
				$config['image_library'] = 'GD2';
				$config['source_image'] = './uploads/'.$dataa['raw_name'].$dataa ['file_ext'];
				$config['maintain_ratio'] = TRUE;
				// $config['quality'] = '23%';
				$config['width']         = 240;
				$config['height']       = 300;


				$data['pics'] = $dataa['raw_name'].$dataa['file_ext'];
			  
			  	// echo('<pre>');
				// print_r($data);
				// die;
				$this->Admin_model->edit_images( $data);
				
				$this->session->set_flashdata('done','Upload Successful');
				return redirect(base_url().'index.php/view_admin');
	
		}


		public function gallery(){
			$config['upload_path']          = '../login/gallery_images/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 2000000;

			$this->load->library('upload', $config);
	
			if (!$this->upload->do_upload('gallery_images')) {
				 $this->session->set_flashdata('error','Uploding Error, Please Try Again'); 
				return redirect(base_url().'index.php/view_admin');
			} else {
				$data =  $this->upload->data();
				$config['image_library'] = 'GD2';
				$config['source_image'] = './../login/gallery_images/'.$data['raw_name'].$data ['file_ext'];
				$config['maintain_ratio'] = TRUE;
				// $config['quality'] = '23%';
				$config['width']         = 240;
				$config['height']       = 300;
	
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$gallery_images = $data['raw_name'].$data['file_ext'];
	
				$post['gallery_images'] = $gallery_images;
				
				$this->Admin_model->gallery($gallery_images);
				$this->session->set_flashdata('done','Upload Successful'); 
	
				return redirect(base_url().'index.php/view_admin');
			}
		}
		

		public function delete_gallery_images(){

			$this->Admin_model->delete_gallery_images();
			redirect(base_url().'index.php/view_admin');
		}
		

		public function advertisement()
		{
				$data['category'] = $this->Admin_model->view_advertisement();
				// echo('<pre>');
				// print_r($data);
				// die;
				$this->load->view('header');
				$this->load->view('advertisement', $data);
				$this->load->view('footer');
		}


		public function add_advertisement()
		{
			$data['fetch_category'] = $this->Admin_model->view_category();
				$this->load->view('header');
				$this->load->view('add_advertisement', $data);
				$this->load->view('footer');
		}

		public function fetch_sub_category()
		{
			echo $this->Admin_model->fetch_sub_category();
		}
		

		public function do_upload()
		{

			$config['upload_path']          = 'uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 200000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')) {
			$this->session->set_flashdata('error','Uploding Error, Please Try Again');
			return redirect(base_url().'index.php/add_advertisement');
			} else {
			$data =  $this->upload->data();

			$config['image_library'] = 'GD2';
			$config['source_image'] = './uploads/'.$data['raw_name'].$data ['file_ext'];
			// $config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			// $config['quality'] = '23%';
			$config['width']         = 240;
			$config['height']       = 300;

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$image = $data['raw_name'].$data['file_ext'];

			$post['image'] = $image;
			$this->session->set_flashdata('done','Upload Successful');

			$this->Admin_model->insert($image);

			return redirect(base_url().'index.php/advertisement');
		}
	}



	public function delete_advertisement() {
	    $this->Admin_model->delete_advertisement();
        redirect(base_url().'index.php/advertisement');
	}
	

	public function get_advertisement() {
        $data['class'] = $this->Admin_model->get_advertisement();
			$data['fetch_category'] = $this->Admin_model->view_category();
       

        $this->load->view('header');
        $this->load->view('edit_advertisement', $data);
        $this->load->view('footer');	

	}
    public function edit_advertisement() {


		$config['upload_path']          = 'uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 200000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
		$this->session->set_flashdata('error','Uploding Error, Please Try Again');
		return redirect(base_url().'index.php/advertisement');
		} else {
		$data =  $this->upload->data();


			
			$config['image_library'] = 'GD2';
			$config['source_image'] = './uploads/'.$data['raw_name'].$data ['file_ext'];
			// $config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			// $config['quality'] = '23%';
			$config['width']         = 240;
			$config['height']       = 300;

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();


		$image = $data['raw_name'].$data['file_ext'];

		$post['image'] = $image;
		$this->session->set_flashdata('done','Updated Successfully');

		$this->Admin_model->edit_advertisement($image);
		redirect(base_url().'index.php/advertisement');
	}
	 
}
}