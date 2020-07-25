<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin_model extends CI_Model {
  
  
    public function view_category() {
		$this->db->select('*');
		$this->db->from('category');
        $query=$this->db->get();
	    return $query->result();
	}

        function add_category(){
              
		extract($this->input->post());
		$formArray = array(
                        'category_name' => $category_name,
							          'date' => $date
                       );
                           
		$this->db->insert('category', $formArray);
        }

         function delete_category() {
            $category_id=$this->input->get('category_id');
            // print_r($category_id);
            // die;
            $this->db->where('category_id',$category_id);
            $this->db->delete('category');
            
        }


        public function get_category() {
            $category_id=$this->input->get('category_id');
         
            $this->db->from('category');
            $this->db->where('category_id',$category_id);
            $query=$this->db->get()->row_array();
           
            return $query;
        }
        
        function edit_category(){
            
            $category_id=$this->input->get('category_id');
            extract($this->input->post());
            $this->db->where('category_id', $category_id);
            $formArray = array(
                                'category_name' => $category_name,
                                'date' => $date,
                             
                                );
            return $result = $this->db->update('category', $formArray);
        }
        


        public function view_sub_category() {
            $this->db->select('sub_category.*,category.category_name');
            $this->db->from('sub_category');
            $this->db->join('category','category.category_id  = sub_category.category_id','left');
            $query=$this->db->get();
            return $query->result();
        }
    
        function add_sub_category(){
              
            extract($this->input->post());
            $formArray = array(
                            'sub_category' => $sub_category,
                            'category_id' => $category_id,
                             'date' => $date
                           );
                               
            $this->db->insert('sub_category', $formArray);
            }


            function delete_sub_category() {
                $sub_category_id=$this->input->get('sub_category_id');
                // print_r($category_id);
                // die;
                $this->db->where('sub_category_id',$sub_category_id);
                $this->db->delete('sub_category');
                
            }

            public function get_sub_category() {
                $sub_category_id=$this->input->get('sub_category_id');
             
                $this->db->from('sub_category');
                $this->db->where('sub_category_id',$sub_category_id);


                $query=$this->db->get()->row_array();
         
                return $query;
            }
            
            function edit_sub_category(){
                
                $sub_category_id=$this->input->get('sub_category_id');
                extract($this->input->post());
                $this->db->where('sub_category_id', $sub_category_id);
                $formArray = array(
                                    'category_id' => $category_id,
                                    'sub_category' => $sub_category,
                                    'date' => $date
                                 
                                    );
                return $result = $this->db->update('category', $formArray);
            }

}
    