<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('instamojo');
		$this->load->helper('url');
		$this->load->model('Missionary_model');
		$this->load->model('Paymentstatus_model');
		$this->load->model('User_model');
		$this->load->model('Common_model');

    $this->load->helper('form');
    // $this->load->helper('captcha');
    $this->load->library('form_validation');
        $this->load->model('Common_model');
        $this->load->model('Notification_model');
        $this->load->model('Donation_model');
    
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
      $this->form_validation->set_rules('remarks', 'Remarks', 'required');
      
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

            $purpose = $this->input->post('purpose',TRUE);
            $name = $this->input->post('name',TRUE);
            $email = $this->input->post('email',TRUE);
            $phone = $this->input->post('phone',TRUE);
            $amount = $this->input->post('amount1',TRUE);
            $place = $this->input->post('place',TRUE);
            $country = $this->input->post('country',TRUE);
            $remarks = $this->input->post('remarks',TRUE);
       

            if ($purpose === '0')
             {

               $purpose_data ="General";
               // echo $purpose_data;
               /*User Creation check If iser details exit retur 1 */ 
                             $user_reg = $this->User_model->create_user($name,$email,$phone,$place,$country);
                          if($user_reg > 0)
                          {
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

                              // echo $result;
                                $donation_pay = $this->payment($amount,$purpose_data,$name,$email,$phone);
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
            }
            else
            {
              $data = $this->Donation_model->categories_by_id($purpose);

              foreach ($data as $key)
              {
                if ($key->status ==='1')
                 {
                    $purpose_data = $key->purpose;
                      $user_reg = $this->User_model->create_user($name,$email,$phone,$place,$country);
                          if($user_reg > 0)
                          {
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

                              // echo $result;
                                $donation_pay = $this->payment($amount,$purpose_data,$name,$email,$phone);
                              }
                              else
                              {
                                      $this->session->set_flashdata('fail','Donation amount is higer so email to gems@gemsbihar.org');
                                      redirect('donation');
                              }

                          }
                          else
                          {
                              echo " User Creation check error ";
                          }



                  }
                  else
                  {
                    alert('Error');
                    redirect('donation');
                  }

              }

            }

            

     }

	}


    
    Public function conform_couple()
    {
                $this->load->helper(array('form','url'));
                $this->load->library('form_validation');
              $couple = $this->input->post('couple',TRUE);
        
        if (isset($couple))
           {
            
                    $this->form_validation->set_rules('val-digits', 'Count', 'trim|required|numeric');
                   $this->form_validation->set_rules('val-number', 'Amount', 'trim|required|numeric');
                   $this->form_validation->set_rules('name','Name','trim|required|alpha_numeric_spaces');
                    $this->form_validation->set_rules('address','Address','required|alpha_numeric_spaces');
                   $this->form_validation->set_rules('place','Palce','required|alpha');
                   $this->form_validation->set_rules('country','Country','required|alpha');
                   $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                    $this->form_validation->set_rules('phone','Phone Number','required|numeric');
                    $this->form_validation->set_rules('miss_pre', 'Missionary Pre', 'trim|required');
                   $this->form_validation->set_rules('month_report_pre', 'Monthly Report', 'trim|required');
                   $this->form_validation->set_rules('miss_dedication_pre', 'Missionary Dedication', 'trim|required');
                   $this->form_validation->set_rules('remark','Remark');
               
               if($this->form_validation->run() == FALSE)
               {
                   redirect('Donation/couple');
               }
               else
               {
                    $miss_count = $this->input->post('val-digits',TRUE);
                    
                      $spon_amount    = $this->input->post('val-number',TRUE);
                        $spon_name    = $this->input->post('name',TRUE);
                        $spon_address    = $this->input->post('address',TRUE);
                        $spon_place    = $this->input->post('place',TRUE);
                        $spon_country    = $this->input->post('country',TRUE);
                        $spon_email    = $this->input->post('email',TRUE);
                        $spon_phone    = $this->input->post('phone',TRUE);
                        $spon_option1    =$this->input->post('miss_pre',TRUE);
                        $spon_option2    = $this->input->post('month_report_pre',TRUE);
                        $spon_option3    = $this->input->post('miss_dedication_pre',TRUE);
                        $spon_remarks    = $this->input->post('remark',TRUE);
                
                   /*User Creation check If iser details exit retur 1 */  
                   $user_reg = $this->create_user($spon_name,$spon_email,$spon_phone);
                   
                   if($user_reg === 1)
                    {
                       $final_amount =$spon_amount;
                		
                        			      $payment_id ='';
                                    $couple = $miss_count;
                                    $miss_count =$couple*2;
                        	      		$created_at = date("d-m-Y H:i:s");
                                    $purpose = "Missionary Family Donation" ;
                                    $status_before ="Pending";
 
                         			$data = array(	'payment_id' =>$payment_id,
                                   					'name' =>$spon_name,
                                   					'email' =>$spon_email,
                                   					'phone' =>$spon_phone,
                                   					'address' =>$spon_address,
                                   					'place' =>$spon_place,
                                   					'country' =>$spon_country,
                                   					'miss_count' =>$miss_count,
                                            'couple' => $couple,
                                   					'amount' =>$spon_amount,
                                            'purpose'=>$purpose,
                                   					'miss_pre' =>$spon_option1,
                                   					'mon_rep' =>$spon_option2,
                                   					'miss_dedi' =>$spon_option3,
                                   					'remarks' =>$spon_remarks,
                                   					'created_at'=>$created_at,
                                            'status'=>$status_before,
                                   				 );
                        
                        		            $result = $this->Missionary_model->add_miss_donor($data);
                                            $donation_pay = $this->payment($final_amount,$purpose,$spon_name,$spon_email,$spon_phone);
     
                   }
                   else { }
                   
               }
           }
            else{ redirect('Donation/couple'); }
        
    }

	public function conform_missdonation()
	{
               $this->load->helper(array('form','url'));
                
                $this->load->library('form_validation');
                               
              $miss_support = $this->input->post('miss_form',TRUE);
//            $couple = $this->input->post('couple',TRUE);
          
           if (isset($miss_support))
           {
                    $this->form_validation->set_rules('val-digits', 'Count', 'trim|required|numeric');
                    $this->form_validation->set_rules('purpose', 'Purpose', 'trim|required');
                   $this->form_validation->set_rules('val-number', 'Amount', 'trim|required|numeric');
                   $this->form_validation->set_rules('name','Name','trim|required|alpha_numeric_spaces');
                    $this->form_validation->set_rules('address','Address','required|alpha_numeric_spaces');
                   $this->form_validation->set_rules('place','Palce','required|alpha');
                   $this->form_validation->set_rules('country','Country','required|alpha');
                   $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                    $this->form_validation->set_rules('phone','Phone Number','required|numeric');
                    $this->form_validation->set_rules('miss_pre', 'Missionary Pre', 'trim|required');
                   $this->form_validation->set_rules('month_report_pre', 'Monthly Report', 'trim|required');
                   $this->form_validation->set_rules('miss_dedication_pre', 'Missionary Dedication', 'trim|required');
                   $this->form_validation->set_rules('remark','Remark');
               
                   if($this->form_validation->run() == FALSE)
                   {
                       redirect('Donation');
                   }
                   else
                   {
                        
                        $purpose = $this->input->post('purpose',TRUE);
                            $miss_count = $this->input->post('val-digits',TRUE);
                             $spon_amount    = $this->input->post('val-number',TRUE);
                            $spon_name    = $this->input->post('name',TRUE);
                            $spon_address    = $this->input->post('address',TRUE);
                            $spon_place    = $this->input->post('place',TRUE);
                            $spon_country    = $this->input->post('country',TRUE);
                            $spon_email    = $this->input->post('email',TRUE);
                            $spon_phone    = $this->input->post('phone',TRUE);
                            $spon_option1    =$this->input->post('miss_pre',TRUE);
                            $spon_option2    = $this->input->post('month_report_pre',TRUE);
                            $spon_option3    = $this->input->post('miss_dedication_pre',TRUE);
                            $spon_remarks    = $this->input->post('remark',TRUE);

                      if ($purpose === "Single Miaaionry")
                       {

                          // echo "Single Miaaionry";
                          /*User Creation check If iser details exit retur 1 */ 
                              $user_reg = $this->create_user($spon_name,$spon_email,$spon_phone);
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
                             
                              $data = array(  'name' =>$spon_name,
                                            'email' =>$spon_email,
                                            'phone' =>$spon_phone,
                                            'address' =>$spon_address,
                                            'place' =>$spon_place,
                                            'country' =>$spon_country,
                                            'miss_count' =>$miss_count,
                                            'amount' =>$spon_amount,
                                            'purpose'=>$purpose,
                                            'miss_pre' =>$spon_option1,
                                            'mon_rep' =>$spon_option2,
                                            'miss_dedi' =>$spon_option3,
                                            'remarks' =>$spon_remarks,
                                            'created_at'=>$created_at,
                                            'status'=>$status_before,
                                           );         

                              $result = $this->Missionary_model->add_miss_donor($data);

                              // echo $result;
                             $donation_pay = $this->payment($final_amount,$purpose,$spon_name,$spon_email,$spon_phone);

                          }
                          else
                          {
                              echo " Single Missionary Donation conformation error ";
                          }
                           # code...
                      }
                        elseif ($purpose === "Missionary Family")
                        {
                            // echo "Missionry family";
                                    /*User Creation check If iser details exit retur 1 */  
                             $user_reg = $this->create_user($spon_name,$spon_email,$spon_phone);
                             
                             if($user_reg === 1)
                              {
                                 $final_amount =$spon_amount;
                              
                                              // $payment_id ='';
                                              $couple = $miss_count;
                                              $miss_count =$couple*2;
                                              $created_at = date("d-m-Y H:i:s");
                                              $purpose = "Missionary Family Donation" ;
                                              $status_before ="Pending";
           
                                        $data = array( 'name' =>$spon_name,
                                                      'email' =>$spon_email,
                                                      'phone' =>$spon_phone,
                                                      'address' =>$spon_address,
                                                      'place' =>$spon_place,
                                                      'country' =>$spon_country,
                                                      'miss_count' =>$miss_count,
                                                      'couple' => $couple,
                                                      'amount' =>$spon_amount,
                                                      'purpose'=>$purpose,
                                                      'miss_pre' =>$spon_option1,
                                                      'mon_rep' =>$spon_option2,
                                                      'miss_dedi' =>$spon_option3,
                                                      'remarks' =>$spon_remarks,
                                                      'created_at'=>$created_at,
                                                      'status'=>$status_before,
                                                     );
                                  
                                                  $result = $this->Missionary_model->add_miss_donor($data);
                                                      $donation_pay = $this->payment($final_amount,$purpose,$spon_name,$spon_email,$spon_phone);
               
                             }
                             else 
                             {
                                echo " Missionary Family Donation conformation error "; 
                             }
                                      # code...
                          }// Missionary family donation
                          else
                          {

                          }
                }// form validation else loop end
         } // if loop isseet
           else
           {
                redirect('Donation');
           } 
        
	}

    
/*  Donation page formr call pages in views */
    
	public function convenience_fee()
	{


		if($don_amount = $this->input->post('amount',TRUE))
		{

			$fee = 3+($don_amount*0.02);
			// $tax = $fee * .15;
			$final_amount = $fee + $don_amount;

			echo " Bank Fee :(Rs:3 + 2% of Donation Amount). Final Amount = $final_amount";
		}

	}
    
    /* New donor as creating new user */
    
private function create_user($spon_name,$spon_email,$spon_phone)
    {
//            $this->load->model('User_model');
           $donor_name = $spon_name;
            $donor_email = $spon_email;
            $donor_phone = $spon_phone;
            $role_name = "donor";
            $create_name = "donation_page";
            $status =1;
            $en_password = md5($donor_phone);
        
                  $user_email = $this->User_model->user_email($donor_email);
//                  $user_phone = $this->User_model->user_phone($donor_phone);
                  

                if(empty($user_email))
                {
                  $role_value = $this->Common_model->get_role_id($role_name);
                  $role = $role_value[0]['id'];
                  $create_value = $this->Common_model->get_create_by_id($create_name);
                  $create_by = $create_value[0]['id'];
                    $last_update_by = $create_by;
                    $username = $donor_email;
                    $created_at = date("Y-m-d H:i:s");
                    $banned_by = '';
                    $banned_reason = '';
                    $banned_date = '';
                    


                        $user = array(     'name' =>$donor_name,
                                            'email' =>$donor_email,
                                            'username' =>$username,
                                            'password' =>$en_password,
                                            'role' =>$role,
                                            'created_at' =>$created_at,
                                            'created_by' =>$create_by,
                                            'last_update' =>$created_at,
                                            'last_updated_by' =>$last_update_by,
                                            'last_' =>$created_at,
                                            'status' =>$status,
                                           );
                    
                      $user_reg_message = $this->User_model->add_user($user);

                      // echo $user_reg_message;

                      if ($user_reg_message > 0)
                       {

                          $reg_mail = $this->reg_email($donor_name,$donor_email,$donor_phone);
                          if ($reg_mail > 0)
                          {

                            return $user_reg_message = 1;
                            
                          }
                          else
                          {
                            echo "Email notification error";
                          }
                      }
                      else
                      {
                        echo "error from user creation time ";
                      }                     
                    
                }
                else
                {
                    

                    
                 return $reg_message = 1;
                    
                }
                
    
        
    }
    /* New donor as creating new user */
    
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




   function reg_email($name,$email,$phone)
   {


      $to = $email;
      $subject = 'Donor  Details';
      $message = '<!doctype html>
        <html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
    /* -------------------------------------
        INLINED WITH htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
      .btn-primary table td:hover {
        background-color: #34495e !important;
      }
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    </style>
  </head>
  <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
    <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
      <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
          <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text. Some clients will show this text as a preview.</span>
            <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                    <tr>
                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px; align:center">  Details</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">
                          Name : '.$name.' </p>

                          <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">
                          User ID : '.$email.' </p>
                        
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">
                         Password : '.$phone.'.</p>
                        
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">
                        Good luck! </p>

            <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                          <tbody>
                            <tr>
                              <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                  <tbody>
                                    <tr>
                                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;"> <a href="http://partner.gemsbihar.org/index.php/user" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Click here to </a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
            </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                <tr>
                  <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                    <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">GEMS Bihar </span>
                  </td>
                </tr>
                <tr>
                  
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
      ';
                      $headers[] = 'MIME-Version: 1.0';
                      $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                      // $headers[] = 'Cc: dharmar@gemsbihar.org';
                              // send email
                              $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

                              return $email_status;
                      




   }


}