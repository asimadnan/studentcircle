<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

         public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','security'));
        $this->load->library(array('session', 'form_validation', 'email','upload'));
        $this->load->database();
        $this->load->model('profile_model');


    }


          public function index()
     {
          if(!($this->session->userdata('username') != "")){
                    $this->load->view('login_page');
               }
               else{

                    $userid = $this->session->userdata('userid');
                    $data = $this->profile_model->getuserinfo($userid);

                   

                   $this->load->view('templates/header',$data);
                   $this->load->view('templates/topbar',$data);
                   $this->load->view('profile_view',$data);
                   $this->load->view('templates/footer',$data); 
               }
          
     }

     public function loadChangepass(){
          $this->load->view('changepass');
     }

     public function doupload(){

         // $this->index();

          $config = array(
          'upload_path' => "./uploads/",
          'allowed_types' => "gif|jpg|png|jpeg|pdf",
          'overwrite' => TRUE,
          'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
          'max_height' => "768",
          'max_width' => "1024"
          );

          $this->load->library('upload', $config);
            $this->upload->initialize($config);
          
          if($this->upload->do_upload()){
                $userid = $this->session->userdata('userid');
                $data = $this->profile_model->getuserinfo($userid);
               $data['upload_data'][] =  $this->upload->data();
               $this->load->view('profile_view',$data);
               }
          else{
               $data['error'] = $this->upload->display_errors();
               $this->load->view('profile_view', $data);
          }

     }

   
}
