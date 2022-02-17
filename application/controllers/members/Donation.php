<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('instamojo');
		$this->load->helper('url');
		$this->load->model('Missionary_model');
		$this->load->model('Paymentstatus_model');
		$this->load->model('User_model');
    $this->load->helper('form');
    // $this->load->helper('captcha');
    $this->load->library('form_validation');
        $this->load->model('Common_model');
        $this->load->model('Notification_model');
        $this->load->model('Donation_model');
	}

 function index()
	{

		  $this->form_validation->set_rules('purpose', 'Purpose', 'required');
      $this->form_validation->set_rules('amount1', 'Amount', 'required');
      $this->form_validation->set_rules('remarks', 'Remarks');
      
      if ($this->form_validation->run() == false)
     {
                    $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;
                    $email = $this->session->userdata('email');
                    
                    $data['userId'] = $this->session->userdata('user_id');
                    $result['type'] = $this->Donation_model->donation_type();
                    $this->load->library('form_validation');
                    $this->load->view('inc/header',$data);
                    $this->load->view('members/donation',$result);
                    $this->load->view('inc/footer');

     }  
     else
     { // Form validation sucses start
            
                      $id = $this->input->post('userId',TRUE);
                      $purpose = $this->input->post('purpose',TRUE);
                      $amount = $this->input->post('amount1',TRUE);
                      $remarks = $this->input->post('remarks',TRUE);
                      $data_set =$this->User_model->user_detail($id);
                      $data_set_prifile =$this->User_model->user_profile_detail($id);
                        $name =$data_set->name;
                        $email = $data_set->email;
                        $phone = $data_set->phone;
                        $place = $data_set_prifile->phone;
                        $country = $data_set_prifile->phone;
            
            if ($purpose === '0')
             {
               $purpose_data ="General";
               $created_at = date("Y-m-d H:i:s");
                              // $purpose = "Missionary Donation";
                              $status_before ="Pending"; 
                             
                                $data = array( 'name' =>$name,'email' =>$email,'phone' =>$phone,'place' =>$place,'country' =>$country,'amount' =>$amount,'purpose'=>$purpose_data,'remarks' =>$remarks,'created_at'=>$created_at,
                                            'status'=>$status_before,
                                           );         
                              if ($amount <= 100000)
                               {
                                $result = $this->Donation_model->add_miss_donor($data);
                                $this->session->set_userdata('don_id',$result);
                                $donation_pay = $this->payment($amount,$purpose_data,$name,$email,$phone);
                              }
                              else
                              {
                                      $this->session->set_flashdata('fail','Donation amount is higer so email to gems@gemsbihar.org');
                                            redirect('members/donation');
                              }
             }
             else
             {  // Other purpose start
 
                    $data = $this->Donation_model->categories_by_id($purpose);

                    foreach ($data as $key)
                    {
                      if ($key->status ==='1')
                             {
                                  $purpose_data = $key->purpose;
                                    $created_at = date("Y-m-d H:i:s");
                                    // $purpose = "Missionary Donation";
                                    $status_before ="Pending"; 
                                   
                                    $data = array( 'name' =>$name,
                                                  'email' =>$email,
                                                  'phone' =>$phone,
                                                  'place' =>$place,
                                                  'country' =>$country,
                                                  'amount' =>$amount,
                                                  'purpose'=>$purpose_data,
                                                  'remarks' =>$remarks,
                                                  'created_at'=>$created_at,
                                                  'status'=>$status_before,
                                                 );         
                                    if ($amount <= 100000)
                                     {

                                      $result = $this->Donation_model->add_miss_donor($data);
                                      $this->session->set_userdata('don_id',$result);
                                      $donation_pay = $this->payment($amount,$purpose_data,$name,$email,$phone);
                                    }
                                    else
                                    {
                                      $this->session->set_flashdata('fail','Donation amount is higer so email to gems@gemsbihar.org');
                                            redirect('members/donation');
                                    }

                            }
                             else
                           {

                            }   
                      } // foreach loop end
	              }// Other purpose End
        }// Form validation sucses end

}
    
/*  Donation page formr call pages in views */
    
	 function convenience_fee()
	{


		if($don_amount = $this->input->post('amount',TRUE))
		{

			$fee = 3+($don_amount*0.02);
			// $tax = $fee * .15;
			$final_amount = $fee + $don_amount;

			echo " Bank Fee :(Rs:3 + 2% of Donation Amount). Final Amount = $final_amount";
		}

	}

    /* Payment call */
  function payment($amount,$purpose,$name,$email,$phone)
    {
         $this->load->library('instamojo');
        
        	$pay = $this->instamojo->pay_request(
                        						$amount = $amount , 
                        						$purpose = $purpose , 
                        						$buyer_name = $name , 
                        						$email = $email, 
                        						$phone = $phone ,
                        		     			$send_email = 'TRUE' , 
                        		     			$send_sms = 'TRUE' , 
                        		     			$repeated = 'FALSE'
                        
                        		     		);
                        
                                 $pay_url = $pay['longurl'];
                        		redirect($pay_url,'refresh') ;
        
    }
    
    
    /* Payment call End */

}