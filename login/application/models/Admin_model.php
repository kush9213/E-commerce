<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    
	public function fetch_basic_data($id)
	{
        $this->db->select('*');
        $this->db->from('basic_info');
        $this->db->where('id', $id);
        
        $query=$this->db->get()->row_array();
        return $query;
    }
    function view_gallery_images($id){
       
        $this->db->select('*');
        $this->db->from('gallery_images');
        $this->db->where('id', $id);

        $query=$this->db->get();
	    return $query->result();

        }
	public function fetch_images($id)
	{
        $this->db->select('*');
        $this->db->from('images');
        $this->db->where('id', $id);
        
        $query=$this->db->get()->row_array();
        return $query;
    }

    public function fetch_add($id)
	{
        $this->db->select('*');
        $this->db->from('advertisement');
        $this->db->where('id', $id);
        
        $query=$this->db->get()->row_array();
        return $query;
    }

    public function view_advertisement() {
		$this->db->select('*');
        $this->db->from('advertisement');
        $this->db->join('category','category.category_id  = advertisement.category_id','left');
        $this->db->join('sub_category','sub_category.sub_category_id  = advertisement.sub_category_id','left');
    
        $query=$this->db->get();
	    return $query->result();
    }

 
    public function category() {
		$this->db->select('*');
        $this->db->from('category');

        $query=$this->db->get();
	    return $query->result();
    }

      public function sub_category() {
		$this->db->select('*');
        $this->db->from('sub_category');
        $this->db->join('category','category.category_id  = sub_category.category_id','left');

        $query=$this->db->get();
	    return $query->result();
    }

    public function view_advertisement_by_category() {
        $category_id=$this->input->get('category_id');
     
		$this->db->select('*');
        $this->db->from('advertisement');
        $this->db->where('category_id', $category_id);
      
        $query=$this->db->get();
	    return $query->result();
    }
    

    public function view_advertisement_by_sub_category() {
        $sub_category_id=$this->input->get('sub_category_id');
        $category_id=$this->input->get('category_id');
    
		$this->db->select('*');
        $this->db->from('advertisement');
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->where('category_id', $category_id);
     
        $query=$this->db->get();
	    return $query->result();
    }

    public function search(){
        $search = $this->input->get('search');

        $this->db->select('*');
        $this->db->from('advertisement');
        $this->db->where('name', $search);

        $query=$this->db->get();
        return $query->result();
    }
}