<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller { 

	public function index()
     {

     		$this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('newsletter');
        $this->load->view('templates/footer'); 

     }

}