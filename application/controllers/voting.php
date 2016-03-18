<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller { 


 public function index()
     {
     	 $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('poll');
        $this->load->view('templates/footer'); 
     		}
}

