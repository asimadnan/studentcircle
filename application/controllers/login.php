<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('login_model');
     }

          public function index()
     {


           if($this->session->userdata("username"))//If already logged in
        {
            redirect(base_url());//redirect to the blog page
        }
        $data['error'] = 0;
        if($this->input->post())//data inputed for login
        {
           $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");
            
            $user = $this->login_model->login($username, $password);
            if(!$user){ $data['error'] = 1;}//when user doesn't exist
            else //when user exist
            {
                $sessiondata = array(
                              'username' => $username,
                              'userid' => $this->login_model->getuserid($username),
                              'loginuser' => TRUE
                         );
               $this->session->set_userdata($sessiondata);
               redirect("welcome");
            }
        }

        $this->load->view('login_page',$data);
      












          // //get the posted values
          // $username = $this->input->post("txt_username");
          // $password = $this->input->post("txt_password");

          // //set validations
          // $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          // $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          // if ($this->form_validation->run() == FALSE )
          // {
          //      if(!($this->session->userdata('username') != "")){
                  
          //           $this->load->view('login_page');
          
          //      }
          //      else{


          //           $userid = $this->login_model->getuserid($username);
          //           $data = $this->login_model->gethomepagedata($userid);
          //           $this->load->view('Homepage',$data);
          //      }
          //      //validation fails
               

          // }
          // else
          // {
          //      //validation succeeds
          //      if ($this->input->post('btn_login') == "Login")
          //      {
          //           //check if username and password is correct
          //           $usr_result = $this->login_model->get_user($username, $password);
          //           if ($usr_result > 0) //active user record is present
          //           {
          //                //set the session variables
          //                $sessiondata = array(
          //                     'username' => $username,
          //                     'userid' => $this->login_model->getuserid($username),
          //                     'loginuser' => TRUE
          //                );
          //                $this->session->set_userdata($sessiondata);
          //                redirect("welcome");
          //           }
          //           else
          //           {
          //                 $this->load->view('login_page');
          //           }
          //      }
          //      else
          //      {
          //            $this->load->view('login_page');
          //      }
          // }
     }

     public function loadRegView(){
          $this->load->view('Registration_view');
     }
}
