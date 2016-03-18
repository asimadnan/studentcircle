<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Circle extends CI_Controller {

         public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','security'));
        $this->load->library(array('session', 'form_validation', 'email','upload','pagination'));
        $this->load->database();
        $this->load->model('circle_model');


    }


          public function index($circleid)
     {
        
        // $this->load->view('templates/header');
        // $this->load->view('templates/topbar');
        // $this->load->view('circle');
        // $this->load->view('templates/footer'); 

        $data = $this->circle_model->getcircledata($circleid);
        if (isset($data)){
       

                      //pagination settings
        $config['base_url'] = site_url('Circle/index');
        $config['total_rows'] = $this->circle_model->getNumofPosts($data['c_id']);
        $config['per_page'] = "2";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        //call the model function to get the department data
        $data['deptlist'] = $this->circle_model->getCircleposts($config["per_page"], $data['page'],$data['c_id']);           

        $data['pagination'] = $this->pagination->create_links();




        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('circle',$data);
        $this->load->view('templates/footer'); 


          }
          else {
             $this->load->view('templates/header');
             $this->load->view('templates/topbar');
           //  $this->load->view('not found');
             $this->load->view('templates/footer'); 
          }
          
     }

     public function pagination(){


     }


     

   
}
