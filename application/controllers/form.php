<?php 
ini_set('display_errors', 1);  
    class Form extends CI_Controller {

      public function __Construct()
      {
        parent::__construct();
        $this->load->model('products_model');
      }
        
        public function index(){
           $this->load->helper('html');
           $this->load->view('header1');
           $this->load->view('home');
           $this->load->view('footer');

           

        }
        public function login_open(){
           
           $this->load->helper('html');
           $this->load->view('header2','', 'true');
           $this->load->view('login','', 'true');
           $this->load->view('footer');
          

        }
         public function about_open(){
           $this->load->helper('html');
           $this->load->view('header1');
           $this->load->view('aboutus');
           $this->load->view('footer');
          

        }
        public function login(){
           $this->load->library('session'); 
           if(!$this->session->userdata('user'))
              {
                
                $this->load->helper('security');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'Email','required|md5|callback_validation_login');
                $this->form_validation->set_rules('password', 'Password', 'required|md5');
                $this->form_validation->set_rules('username', 'username');
                
                              
 
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->helper('html');
                        $this->load->view('header1');
                        $this->load->view('login');
                        $this->load->view('footer');
                          
                }
                else  
                {  
                        
                        $key = md5(uniqid());
                        $data['user'] = $this->session->userdata('user');
                        $this->load->helper('html');
                        $this->load->library('email');
                        $this->load->view('header2');
                        $this->load->view('adm', $data);
                        $this->load->view('footer');
                }
              }
              
        }

        public function validation_login(){
                $this->load->model('home_model');
                $query=$this->home_model->checklogin();
                if($query){
                    $data = array(
                          'email'=>$this->input->post('email'),
                          'is_logged_in'=>true, 
                          'user' => $query
                        );
                    $this->session->set_userdata($data);
                    //redirect('form/user');


                }else{
                        $this->form_validation->set_message('validation_login','Incorrect email or password');
                        return false;
                }
        }

        public function logout(){
               $this->session->sess_destroy();
               $this->load->helper('html');
               $this->load->view('header1');
               $this->load->view('home');
               $this->load->view('footer');
        }
        public function signup_open(){
           $this->load->helper('html');
           $this->load->view('header2');
           $this->load->view('signup');
           $this->load->view('footer');

        }
        public function signup(){
                $this->load->library('session'); 
                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
                $this->form_validation->set_rules('password', 'Password', 'required|md5');
                $this->form_validation->set_rules('confpass', 'Password', 'required|md5|matches[password]');

               if ($this->form_validation->run() == TRUE) 
                {
                        $this->load->model('home_model'); 

                        if($this->home_model->register()){
                          $data['success_msg'] = "You are registered Successfully.";
                                $this->load->helper('html');
                                $this->load->view('header1');
                                $this->load->view('home', $data);
                                $this->load->view('footer');
                        }
                        
                        
                }
                else
                {   
                        $this->load->helper('html');
                        $this->load->view('header1');
                        $this->load->view('signup');
                        $this->load->view('footer');
                }

        }
         

        public function user(){

                //$is_logged_in=$this->session->userdata('is_logged_in');
                //if(!isset($is_logged_in) || $is_logged_in != true){
                    $this->load->helper('html');
                    $this->load->view('header3');
                    $this->load->view('adm'); // from users table.
                    $this->load->view('footer');
                    //die();
                }//else{
                    //$this->load->helper('html');
                    //$this->load->view('header1');
                    //$this->load->view('home');
                    //$this->load->view('footer');
                //}
               
                
        //}

        public function results(){
          //search result from products table. 
          if($this->input->post('s'))
          {
            $s = $this->input->post('s');

              $data['products'] = $this->products_model->search_products($s);
             $this->load->helper('html');
             $this->load->view('header1');
             $this->load->view('results', $data);
             $this->load->view('footer');
           }
           else
           {
             echo "No input was provided. Please try again...";
           }

        }
         public function details($id=""){
           if($id)
          {
             $data['product'] = $this->products_model->get_product($id);
             $this->load->helper('html');
             $this->load->view('header1');
             $this->load->view('details', $data);
             $this->load->view('footer');
           }
           else
           {
             echo "No input was provided. Please try again...";
           }

          
        }

        function edit_user($user_id)
        {
          if($this->session->userdata('user')):
            $data['user'] = $this->session->userdata('user'); 
             $this->load->helper('html');
             $this->load->view('header2');
             $this->load->view('edit_user', $data);
             $this->load->view('footer');

            else:

              echo "Your sesion has expired.";

              endif;
        }

        
        

       public function edit_process()
       {
            $this->load->library('session'); 
               

               
                        $this->load->model('home_model');

                        if($this->home_model->update_user()){
                          $user = $this->session->userdata('user');
                          $this->session->set_userdata('user', $this->home_model->get_user($user->id));
                          $data['success_msg'] = "You are updated Successfully.";
                          $data['user'] = $this->session->userdata('user'); 
                                $this->load->helper('html');
                                $this->load->view('header2');
                                $this->load->view('edit_user', $data);
                                $this->load->view('footer');
                        }
                        
              
              

       }

       
        function cancel_account($id)
        {
            $this->load->model('home_model');
            $result = $this->home_model->cancel_account($id);
            if($result)
             {
               $this->session->sess_destroy();
               redirect('./');
             }
        }
    

        
} 


  