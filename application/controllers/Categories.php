<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller 
{
	public function index()
	{
	}
	public function registration()
	{
     $this->load->library('form_validation');
     $this->load->view('donations/donar_registration');
	}

}

