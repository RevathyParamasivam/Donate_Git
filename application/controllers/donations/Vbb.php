<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vbb extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('instamojo');
		$this->load->helper('url');
		$this->load->model('Missionary_model');
    $this->load->model('Donation_model');
		$this->load->model('Paymentstatus_model');
		$this->load->model('User_model');
		$this->load->model('Common_model');
	}

	public function index()
	{

		     $this->load->library('form_validation');
            $this->load->view('don_inc/header');
            $this->load->view('donations/vbb/donation');
            $this->load->view('don_inc/footer');

	}

	public function donation()
	{
               $this->load->helper(array('form','url'));
                
                $this->load->library('form_validation');
                               
              $miss_support = $this->input->post('vbb',TRUE);
//            $couple = $this->input->post('couple',TRUE);
          
           if (isset($miss_support))
           {
                    $this->form_validation->set_rules('val-digits', 'Count', 'trim|required|numeric');
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
                      $this->load->library('form_validation');
                      $this->load->view('don_inc/header');
                      $this->load->view('donations/vbb/donation');
                      $this->load->view('don_inc/footer');
                   }
                   else
                   {
                        
                         // $purpose = $this->input->post('purpose',TRUE);
                            $miss_count = $this->input->post('val-digits',TRUE);
                            $spon_amount    = $this->input->post('val-number',TRUE);
                            $spon_name    = $this->input->post('name',TRUE);
                            $spon_address    = $this->input->post('address',TRUE);
                            $spon_place    = $this->input->post('place',TRUE);
                            $spon_country    = $this->input->post('country',TRUE);
                            $spon_email    = $this->input->post('email',TRUE);
                            $spon_phone    = $this->input->post('phone',TRUE);
                            // $spon_option1    =$this->input->post('miss_pre',TRUE);
                            // $spon_option2    = $this->input->post('month_report_pre',TRUE);
                            // $spon_option3    = $this->input->post('miss_dedication_pre',TRUE);
                            $spon_remarks    = $this->input->post('remark',TRUE);


                         // echo "Single Miaaionry";
                          /*User Creation check If iser details exit retur 1 */ 
                              $user_reg = $this->User_model->create_user($spon_name,$spon_email,$spon_phone,$spon_address,$spon_place,$spon_country);
                          if($user_reg > 0)
                          {
                                    // $fee = 3+($spon_amount*0.02);
                                    // $tax = $fee * .15;
                          	$purpose = "Village Pastor, Bible Men /Women";
                              $final_amount =$spon_amount;                
                              // $payment_id ='';
                              // $couple = '';
                              $created_at = date("Y-m-d H:i:s");
                              // $purpose = "Missionary Donation";
                              $status_before ="Pending"; 
                             
                              $data = array(  'name' =>$spon_name,
                                            'email' =>$spon_email,
                                            'phone' =>$spon_phone,
                                            'address' =>$spon_address,
                                            'place' =>$spon_place,
                                            'country' =>$spon_country,
                                            'miss_count' =>$miss_count,
                                            'amount' =>$spon_amount,
                                            'purpose'=>$purpose,
                                            'remarks' =>$spon_remarks,
                                            'created_at'=>$created_at,
                                            'status'=>$status_before,
                                           );         

                              $result = $this->Donation_model->add_miss_donor($data);

                                $this->session->set_userdata('don_id',$result);


                              // echo $result;
                             $donation_pay = $this->payment($final_amount,$purpose,$spon_name,$spon_email,$spon_phone);

                          }
                          else
                          {
                              echo " Donation conformation error ";
                          }
                           # code...
                      
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
