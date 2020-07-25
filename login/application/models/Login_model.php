<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function sign_up()
    {
        extract($this->input->post());
        $formArray = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'position' => $check
        );
      
        $this->db->insert('signup_admin', $formArray);
    }

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
		if($login){
            if($login->position){
                return 0;
            }else{
                $this->session->set_userdata('name',$login->name);
                $this->session->set_userdata('email',$login->email);
                $this->session->set_userdata('id',$login->id);
            
                return 1;
            }
			
		} else {
			return 0;
		}
	}

    public function send_id($email, $name, $password){
        $this->db->select('*');
        $this->db->from('signup_admin');
        $this->db->where('email', $email);
        $this->db->where('name', $name);
        $this->db->where('password', $password);
       
        $query=$this->db->get()->row_array();
        return $query;     
    }

  
    public function send($sin){
          
            
            $name = array(
                'id' => $sin['id']																				
            );

            $this->db->insert('basic_info', $name);
         $this->db->insert('images', $name);
           
    }
  
}
