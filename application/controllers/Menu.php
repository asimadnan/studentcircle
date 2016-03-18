<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller { 


 public function index()
     {
     	 $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('MessMenu');
        $this->load->view('templates/footer'); 
     		}
}

