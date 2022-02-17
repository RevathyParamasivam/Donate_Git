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
       $this->load->model('Common_model');

    if($this->session->userdata('logged_in') !== TRUE)
    {
      redirect('user');
    }
  }

	
	public function index()
	{
		// $this->load->view('inc/header');
		// $this->load->view('admin/dashboard');
		// $this->load->view('inc/footer');
		redirect('user');
	}
    
    function finance()
  {
    //Allowing akses to staff only
    if($this->session->userdata('user_role') ==='2')
    {
     
        $username = $this->session->userdata('username');
        $data['username']=$username;
        $user_option = $this->session->userdata('user_role');
            $data['user_option']=$user_option;
            $this->load->view('inc/header',$data);
            $this->load->view('dashboard');
            $this->load->view('inc/footer');
        
    }
      else
      {
        echo "Access Denied";
    }
  }

  function donor()
  {

    // Allowing akses to staff only
    if($this->session->userdata('role_id') === '3' || $this->session->userdata('role_id') === '1')
    {
     
     			           $user_id = $this->session->userdata('user_id');
                     $last_login = date("d-m-Y H:i:s");
                     $last_update = date("d-m-Y H:i:s");

                     $login_status = $this->User_model->login_update($user_id,$last_update,$last_login);

                     

          			$username = $this->session->userdata('name');
          			
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;
                     $email = $this->session->userdata('email');
                     $data['donation'] = $this->Donation_model->donation_details($email);

                     $result['sum'] = $this->Paymentstatus_model->donation_sum($email); 

                     // print_r($sum);

            //          $result['sum'] = $sum;

            $this->load->view('inc/header',$data);
            $this->load->view('members/dashboard',$result);
            $this->load->view('inc/footer');
        
    }
      else
      {
        echo "Access Denied";
    }
  }


function payment_detail()
  {

  	$id=($this->input->post('id'));

     $result = $this->Missionary_model->donor_details($id);

     $pay_id = $result->payment_id;
    
     if (empty($pay_id) || $pay_id === '0')
      {

      		$message = "failed";
      		$mess = array("message" => $message);
     	
      		echo json_encode($mess);
   			exit();
     }
     else
     {


     	$data = $this->Paymentstatus_model->payment_details($pay_id);

     		$data_set[] = array("pay_id"=>$data->pay_id,
     							"pay_req_id"=>$data->pay_req_id,
     							"purpose"=>$data->purpose,
     							"amount"=>$data->amount,
     							"currency"=>$data->currency, 
     							"inst_type"=>$data->inst_type, 
     							"bank_status"=>$data->bank_status);

   		echo json_encode($data_set);
   		exit();
     
     }


  }	






  function profile()
  {

  		             $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;
                    $email = $this->session->userdata('email');
                    
                    $id = $this->session->userdata('user_id');


                     $result['login'] = $this->User_model->user_detail($id);
                     $result['profile'] = $this->User_model->profile_details($id);
                     $result['matrial'] = $this->Common_model->get_matrial();
                     $result['gender'] = $this->Common_model->get_gender();

            $this->load->view('inc/header',$data);
            $this->load->view('members/profile',$result);
            $this->load->view('inc/footer');




  }
	 function profile_update($u_id)
  {

    // echo $id;
                   $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;
                    $email = $this->session->userdata('email');
                    
                    $id = $this->session->userdata('user_id');


                     // $result['user'] = $this->User_model->user_detail($id);
                    $result['profile'] = $this->User_model->profile_details($u_id);
                    $result['gender'] = $this->Common_model->get_gender();
                    $result['matrial'] = $this->Common_model->get_matrial();

                  

              $this->load->view('inc/header',$data);
            $this->load->view('members/profile_update',$result);
            $this->load->view('inc/footer');


  }



function profile_detail_update($id)
{

                     $phone    = $this->input->post('phone',TRUE);
                     $gender = $this->input->post('gender_id',TRUE);
                     $matrial_status = $this->input->post('matrial_id',TRUE);
                     $designation = $this->input->post('designation',TRUE);
                     $bday = $this->input->post('bday',TRUE);
                    
                     $address = $this->input->post('address',TRUE);
                     $place = $this->input->post('place',TRUE);
                     $country = $this->input->post('country',TRUE);

                    

                        $result = $this->User_model->profile_update($id,$phone,$gender,$matrial_status,$designation,$bday,$address,$place,$country);
                        if ($result > 0)
                         {

                             $this->session->set_flashdata('sucess','Profile Updated sucessfull ..!');
                             redirect('members/home/profile');
                        }
                        else
                        {
                               $this->session->set_flashdata('fail','Some issue have in a querry');
                        }
}


 function donation()
 {

                    $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;
                    $email = $this->session->userdata('email');
                    
                    $data['userId'] = $this->session->userdata('user_id');


                     // $result['login'] = $this->User_model->user_detail($id);
                     // $result['profile'] = $this->User_model->profile_details($id);
              $result['type'] = $this->Donation_model->donation_type();

       
            $this->load->library('form_validation');
            $this->load->view('inc/header',$data);
            // $this->load->view('members/profile');
            $this->load->view('members/donation',$result);
            $this->load->view('inc/footer');

 }



	// public function login()
	// {
	// 	// $this->load->view('inc\header');
	// 	$this->load->view('login');
	// 	// $this->load->view('inc\footer');
	// }
}
