<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welfare extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('instamojo');
		$this->load->helper('url');
		$this->load->model('Donation_model');
		$this->load->model('Paymentstatus_model');
		$this->load->model('User_model');
		$this->load->model('Common_model');
	}

	public function index()
	{

		      $this->load->view('don_inc/header');
          $this->load->view('donations/welfare/index');
          $this->load->view('don_inc/footer');

	}
	public function mss()
	{
		 $this->load->view('don_inc/header');
          $this->load->view('donations/welfare/details_mss');
          $this->load->view('don_inc/footer');
	}
	public function hss()
	{
		 $this->load->view('don_inc/header');
          $this->load->view('donations/welfare/details_hss');
          $this->load->view('don_inc/footer');
	}
	public function donor_detail($form_id)
	{

              // echo $form_id;
		if ($form_id ==="MSS")
		{
				
              $data['message'] ="Motorcycle Subsidy Scheme(MSS) : Rs.65,000/Vehicle";
              $data['type'] ="Motorcycle Subsidy Scheme";

              	$this->load->library('form_validation');
              	$this->load->view('don_inc/header');
          		$this->load->view('donations/welfare/donation',$data);
          		$this->load->view('don_inc/footer');

		}
		elseif($form_id ==="HSS")
		{
			$data['message'] ="Housing Loan Subsidy Scheme(HSS) : Rs.5,00,000/House";
              $data['type'] ="Housing Loan Subsidy Scheme";

              	$this->load->library('form_validation');
              	$this->load->view('don_inc/header');
          		$this->load->view('donations/welfare/donation',$data);
          		$this->load->view('don_inc/footer');
		}
		


              
	}
	public function donation_opp()
	{        
               $this->load->helper(array('form','url'));
                
                $this->load->library('form_validation');
                               
              $support = $this->input->post('Welfare',TRUE);

          // echo $support;

           if (isset($support))
           {
                    // $this->form_validation->set_rules('val-digits', 'Count', 'trim|required|numeric');
                    // $this->form_validation->set_rules('purpose', 'Purpose', 'trim|required');
                   $this->form_validation->set_rules('val-number', 'Amount', 'trim|required|numeric');
                   $this->form_validation->set_rules('name','Name','trim|required|alpha_numeric_spaces');
                    $this->form_validation->set_rules('address','Address','required|alpha_numeric_spaces');
                   $this->form_validation->set_rules('place','Palce','required|alpha');
                   $this->form_validation->set_rules('country','Country','required|alpha');
                   $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                    $this->form_validation->set_rules('phone','Phone Number','required|numeric');
                  
                   $this->form_validation->set_rules('remark','Remark');
               

                   if($this->form_validation->run() == FALSE)
                   {
                   	   if ($support === "Motorcycle Subsidy Scheme")
                   	    {
                   	    	 $data['message'] ="Motorcycle Subsidy Scheme(MSS) : Rs.65,000/Vehicle";
				              $data['type'] ="Motorcycle Subsidy Scheme";

				              	$this->load->library('form_validation');
				              	$this->load->view('don_inc/header');
				          		$this->load->view('donations/welfare/donation',$data);
				          		$this->load->view('don_inc/footer');
                   	   	
                   	   }
                   	   else
                   	   {
                   	   		$data['message'] ="Housing Loan Subsidy Scheme(HSS) : Rs.5,00,000/House";
				              $data['type'] ="Housing Loan Subsidy Scheme";

				              	$this->load->library('form_validation');
				              	$this->load->view('don_inc/header');
				          		$this->load->view('donations/welfare/donation',$data);
				          		$this->load->view('don_inc/footer');
                   	   }
                       
                   }
                   else
                   {
                        // echo "you are here";

                           $purpose = $support;
                           // echo $purpose;
                            // $miss_count = $this->input->post('val-digits',TRUE);
                            $spon_amount    = $this->input->post('val-number',TRUE);
                            $spon_name    = $this->input->post('name',TRUE);
                            $spon_address    = $this->input->post('address',TRUE);
                            $spon_place    = $this->input->post('place',TRUE);
                            $spon_country    = $this->input->post('country',TRUE);
                            $spon_email    = $this->input->post('email',TRUE);
                            $spon_phone    = $this->input->post('phone',TRUE);
                            $spon_remarks    = $this->input->post('remark',TRUE);

                            // echo "$purpose";
                      if ($purpose === "Motorcycle Subsidy Scheme" || $purpose === "Housing Loan Subsidy Scheme")
                       {

                         
                          // echo "$purpose";
                          /*User Creation check If iser details exit retur 1 */ 
                            $user_reg = $this->User_model->create_user($spon_name,$spon_email,$spon_phone,$spon_address,$spon_place,$spon_country);
                          if($user_reg > 0)
                          {
                                    // $fee = 3+($spon_amount*0.02);
                                    // $tax = $fee * .15;
                              $final_amount =$spon_amount;                
                              // $payment_id ='';
                              // $couple = '';
                              $created_at = date("Y-m-d H:i:s");
                              // $purpose = "Missionary Donation";
                              $status_before ="Pending"; 
                             
                              $data = array( 'name' =>$spon_name,
                                            'email' =>$spon_email,
                                            'phone' =>$spon_phone,
                                            'address' =>$spon_address,
                                            'place' =>$spon_place,
                                            'country' =>$spon_country,
                                            'amount' =>$spon_amount,
                                            'purpose'=>$purpose,
                                            'remarks' =>$spon_remarks,
                                            'status'=>$status_before,
                                           );         

                              // print_r($data);

                              if ($final_amount <= 100000)
                               {

                               	// print_r($data);
                                $result = $this->Donation_model->add_miss_donor($data);

                                $this->session->set_userdata('don_id',$result);

                              // echo $result;
                                $donation_pay = $this->payment($final_amount,$purpose,$spon_name,$spon_email,$spon_phone);
                              }
                              else
                              {
                                      $this->load->view('don_inc/header');
                                      $this->load->view('donations/status/intimation',$data);
                                      $this->load->view('don_inc/footer');
                              }

                          }
                          else
                          {
                              echo " User Creation check error ";
                          }
                           # code...
                      }
                        
                          else
                          {
                            echo " purpose is miss match ";

                          }
                }// form validation else loop end
         } // if loop isseet
           else
           {
                redirect('Donation');
           } 
        
	}

	/* Payment call */
    private function payment($amount,$purpose,$name,$email,$phone)
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
