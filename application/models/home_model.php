<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
  

  	public function checklogin(){  
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('users');
        //$this->db->where('email', $this->input->post('email'));
        //$query = $this->db->get('recipes');

       // $this->output->set_output($query);

        if ($query->num_rows()==1){
          
          return $query->row();   
        }else{ 
        	return false;  
        }  
  	} 
    function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
      

        if ($query->num_rows()==1){
          
          return $query->row();   
        }else{
          return false;  
        } 
    }
    public function update_user()
    {
       $data = array('username'=>$this->input->post('username'),
                      'email'=>$this->input->post('email'),
                      'FirstName'=>$this->input->post('firstname'),
                      'LastName'=>$this->input->post('lastname'),
                      'company'=>$this->input->post('company'),
                      'website'=>$this->input->post('website'),
                      'speciality'=>$this->input->post('speciality'),
                      'username'=>$this->input->post('username'),
                   );

       if($this->input->post('password'))
       {
        $data['password'] = md5($this->input->post('password'));
       }
        $this->db->set($data);
        $query=$this->db->update('users');
       
        if($query){
          return true;
        }else {
          return false;
        }
    } 
    public function register(){
    
        $data = array('username'=>$this->input->post('username'),
                      'email'=>$this->input->post('email'),
                      'firstName'=>$this->input->post('firstname'),
                      'lastName'=>$this->input->post('lastname'),
                      'company'=>$this->input->post('company'),
                      'website'=>$this->input->post('website'),
                      'speciality'=>$this->input->post('speciality'),
                      'username'=>$this->input->post('username'),
                      'password'=>($this->input->post('password')),
                      'confpass'=>($this->input->post('confpass')));
        $query=$this->db->insert('users', $data);
        
        if($query){ 
          return true;
        }else {
          return false;
        }

    } 


    public function cancel_account($id)
    {
      $this->db->where("id", $id);
      return $this->db->delete("users");
    }
        
        
        
    
        
        
       
        
            
}

    
        

    
    
        
    
                
            


    
    
    	

  