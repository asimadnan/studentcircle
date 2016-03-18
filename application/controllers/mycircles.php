<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyCircles extends CI_Controller {


public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','security'));
        $this->load->library(array('session', 'form_validation', 'email','upload'));
        $this->load->database();

    }


	public function index()
	{
		 if(!($this->session->userdata('username') != "")){
		 	redirect('login');

               }
               else{
               	$this->load->view('templates/header');
               	$this->load->view('templates/topbar');
               	$this->load->view('mycircles');
               	$this->load->view('templates/footer');
               }
	}
}