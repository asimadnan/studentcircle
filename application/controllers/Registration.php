<?php
class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','security'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('registration_model');

    }
    
    function index()
    {
        $this->register();
    }

    function register()
    {
        //set validation rules
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[users.emailid]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.u_name]|min_length[4]|max_length[15]');
        $this->form_validation->set_rules('regnum', 'Regnum', 'required|min_length[7]|max_length[7]');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('registration_view');
        }
        else
        {
           // insert the user registration details into database
            $data = array(
                'firstname' => $this->input->post('fname'),
                'lastname' => $this->input->post('lname'),
                'emailId' => $this->input->post('email'),
                'u_name' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                
            );
            
          //  insert form data into database
           if ($this->registration_model->insertUser($data)){

                   
                    $this->load->view('login_page');
            }
            else {
                //error
               $this->load->view('errors/error_db');

            }
              
            
                
            
        }
    }

    
    
}
?>