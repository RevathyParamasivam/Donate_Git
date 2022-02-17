<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Donation extends CI_Controller
 {
  	public function __construct()  
    {
        parent:: __construct();
		$this->load->helper("url");
		$this->load->helper('form');
		// $this->load->helper('captcha');
		$this->load->library('form_validation');
        $this->load->model('Common_model');
        $this->load->model('Notification_model');
        $this->load->model('Donation_model');
		$this->load->helper('url');

    }


     public function index() 
     {

     	$this->form_validation->set_rules('purpose', 'Purpose', 'required');
     	$this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('email', 'Email Address', 'required');
	    $this->form_validation->set_rules('phone', 'Phone Number', 'required');
	    $this->form_validation->set_rules('amount1', 'Amount', 'required');
	    $this->form_validation->set_rules('place', 'place', 'required');
	    $this->form_validation->set_rules('country', 'Country', 'required');
	    $this->form_validation->set_rules('Remarks', 'Remarks', 'required');
	    $this->form_validation->set_rules('request', 'Prayer Request', 'required');

	    if ($this->form_validation->run() == false)
     {

    
	
		 $result['type'] = $this->Donation_model->donation_type();
         $this->load->library('form_validation');
		  $this->load->view('don_inc/donation_header');
          $this->load->view('donations/category',$result);
          $this->load->view('don_inc/footer');
     }	
     else
     {
     	

     }
        
      }



   }