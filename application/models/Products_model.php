<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {
    function search_products($s)
    {
      $this->db->like('product', $s);
      $result = $this->db->get("products")->result();
      return $result;
    }
public function get_product($id)
{
	 $this->db->where('id', $id);
      $result = $this->db->get("products")->row();
      return $result;
}
  	}
        

    
    
        
    
                
            


    
    
    	

  