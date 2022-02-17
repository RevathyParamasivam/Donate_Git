<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
  {
    parent::__construct();
      /*$this->load->model('location_model');
       $this->load->model('Area_model');
       $this->load->model('zone_model');
       $this->load->model('region_model');*/
       $this->load->helper('form');
       $this->load->model('Missionary_model');
       $this->load->model('Donation_model');
       $this->load->model('User_model');
       $this->load->model('Paymentstatus_model');
       
    if($this->session->userdata('logged_in') !== TRUE)
    {
      redirect('user');
    }
  }

	
	public function index()
	{

          			    $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $email = $this->session->userdata('email');

                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;
                    

                		$this->load->view('inc/header',$data);
                		$this->load->view('admin/dashboard');
                		$this->load->view('inc/footer');
	}

  function payments()
  {
                    $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                     $email = $this->session->userdata('email');
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;

                    $data['donation1'] = $this->Missionary_model->alldonation();  
                    $data['payment'] = $this->Paymentstatus_model->allpayments();  
                    $result['pay_sum'] = $this->Paymentstatus_model->all_payments_sum(); 
                   
   
                    $this->load->view('inc/header',$data);
                    $this->load->view('admin/allpayment',$result);
                    $this->load->view('inc/footer');
  }

function donation()
  {
                    $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                     $email = $this->session->userdata('email');
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;

                    // $data['donation1'] = $this->Missionary_model->alldonation();  
                    $data['donation'] = $this->Donation_model->all_donation();  
                    $result['sum'] = $this->Donation_model->all_donation_sum(); 
                   
   
                    $this->load->view('inc/header',$data);
                    $this->load->view('admin/donation',$result);
                    $this->load->view('inc/footer');
  }

   function users()
  {
                    $username = $this->session->userdata('name');
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $data['name'] = $username;
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;

                    // $data['donation1'] = $this->Missionary_model->alldonation();  
                    $data['users'] = $this->User_model->fetch_user();  
                    $result['role'] = $this->User_model->get_role(); 
                   
   
                    $this->load->view('inc/header',$data);
                    $this->load->view('admin/user/create_user',$result);
                    $this->load->view('inc/footer');
  }  

function update_user($id)
{
  

                    $username = $this->session->userdata('name');
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $data['name'] = $username;
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;

                    // $data['donation1'] = $this->Missionary_model->alldonation();  
                    // $data['users'] = $this->User_model->fetch_user();  
                    $result['role'] = $this->User_model->get_role(); 
                    $result['users'] = $this->User_model->user_detail($id); 
                   
   
                    $this->load->view('inc/header',$data);
                    $this->load->view('admin/user/update',$result);
                    $this->load->view('inc/footer');



}
  





	
	

	// public function login()
	// {
	// 	// $this->load->view('inc\header');
	// 	$this->load->view('login');
	// 	// $this->load->view('inc\footer');
	// }
}
