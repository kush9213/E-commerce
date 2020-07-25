<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
  
  
    public function basic_info() {
        $id = $this->session->userdata('id'); 
   
        $this->db->from('basic_info');
        $this->db->where('id',$id);
        $query=$this->db->get()->row_array();
        
        return $query;
    }


    function edit_basic_info(){
      
        $basic_info_id=$this->input->post('basic_info_id');
        extract($this->input->post());
        $this->db->where('basic_info_id', $basic_info_id);
		$formArray = array(
                          
                            'email' => $email,
                            'location' => $location,
                            'company_name' => $company_name,
                            'owner' => $owner,
                            'mobile' => $mobile,
                            'gst' => $gst,
                            'description' => $description
                        );
                   
            return $result = $this->db->update('basic_info', $formArray);
    }
    
     function edit_images($data){
                        $id = $this->session->userdata('id'); 
                        extract($this->input->post());
        $this->db->where('id', $id);
                     
                                 $formArray = array( 
                                  'id' => $id,
                                  'landing_image'=>$data['landing_image'],
                                  'pics'=>$data['pics'],
                            );
                        //   print_r($formArray);
                        //     die;
      $query = $this->db->update('images', $formArray);
      return $query->result;
    }



    function gallery($gallery_images){
        $id = $this->session->userdata('id'); 
        // print_r($data);die;
         extract($this->input->post());
        $this->db->where('id', $id);
                     
                                 $formArray = array( 
                                  'gallery_images' => $gallery_images,
                                 'id' => $id
                            );
                         
      $query = $this->db->insert('gallery_images', $formArray);
      return $query->result;
    }

    
	 function view_gallery_images(){
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('gallery_images');
        $this->db->where('id', $id);

        $query=$this->db->get();
        // print_r($query);die;
	    return $query->result();

        }
        function view_images(){
            $id = $this->session->userdata('id');
            $this->db->select('*');
            $this->db->from('images');
            $this->db->where('id', $id);
    
            $query=$this->db->get();
            return $query->result();
    
            }
     
        function delete_gallery_images(){
            $gallery_images_id=$this->input->get('gallery_images_id');
            $this->db->where('gallery_images_id',$gallery_images_id);
            $this->db->delete('gallery_images');
        }

    public function view_advertisement() {
		$this->db->select('*');
        $this->db->from('advertisement');
        $this->db->join('category','category.category_id  = advertisement.category_id','left');
        $this->db->join('sub_category','sub_category.sub_category_id  = advertisement.sub_category_id','left');
        $query=$this->db->get();
	    return $query->result();
	}

    public function view_category() {
		$this->db->order_by("category_name", "ASC");
		$this->db->from('category');
        $query=$this->db->get();
	    return $query->result();
	}
    public function fetch_sub_category() {
        $category_id=$this->input->post('category_id');
        $this->db->select('*');
        $this->db->order_by("sub_category", "ASC");
        $this->db->from('sub_category');
        $this->db->where('category_id',$category_id);
        $query=$this->db->get();
     
            foreach ($query->result() as $class) {
       

                
                $output = '<option value="'.$class->sub_category_id.'">'.$class->sub_category.'</option>';
                print_r($output);
            }
            die;
            // return $output;
	}
    
    function insert($image)
	{
		$id = $this->session->userdata('id'); 
    	extract($this->input->post());
		$formArray = array(
            'sub_category_id' => $sub_category_id,
            'category_id' => $category_id,
			'id' => $id,
			'image' => $image,
			'name' => $name,
            'description' => $description,
            'date' => $date
			);
		$this->db->insert('advertisement', $formArray);
    }

    function delete_advertisement() {
        $advertisement_id=$this->input->get('advertisement_id');
        // print_r($category_id);
        // die;
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->delete('advertisement');
        }

    public function get_advertisement() {
        $advertisement_id=$this->input->get('advertisement_id');
     
        $this->db->from('advertisement');
        $this->db->where('advertisement_id',$advertisement_id);
        $query=$this->db->get()->row_array();
        return $query;
    }
    
    function edit_advertisement($image){
        
        $advertisement_id=$this->input->get('advertisement_id');
        extract($this->input->post());
        $this->db->where('advertisement_id', $advertisement_id);
        $formArray = array(
            'date' => $date,
               'sub_category_id' => $sub_category_id,
                 'category_id' => $category_id,
                'image' => $image,
			    'name' => $name,
			    'description' => $description
                );
                
        return $result = $this->db->update('advertisement', $formArray);
    }

}