<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payments extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('instamojo');
		$this->load->helper('url');
		// $this->load->model('Missionary_model');
		$this->load->model('Donation_model');
		$this->load->model('Paymentstatus_model');
		$this->_ci =& get_instance();

		// $this->load->model('User_model');
		// $this->load->model('Common_model');
	}
    
    
    public function status()
	{
		  /*  Geting the payment request id    */
			$payment_request_id = $_GET["payment_request_id"];

          /* Payment status call */
		   $status     = $this->instamojo->status($payment_request_id);
   			
   			/* Payment details  to send conformation message */
   			        $d_id = $this->session->userdata('don_id');
                    $p_id = $this->session->userdata('pay_id');

   			$result = array(
   							'name' => $status['payments'][0]['buyer_name'],
           				 'email' => $status['payments'][0]['buyer_email'],
           				 'phone' => $status['payments'][0]['buyer_phone'],
           				 'purpose' =>$status['purpose'],
           				 'amount' => $status['payments'][0]['amount'],
           				 'currency' => $status['payments'][0]['currency'],
           				 'status' => $status['status'],
		  	             'pay_req_id' =>$status['id'],
           				 'pay_Id' => $status['payments'][0]['payment_id'],
					  	 'bank_status' => $status['payments'][0]['status'],
					  	 'fees' => $status['payments'][0]['fees'],
					  	 'inst_type' => $status['payments'][0]['instrument_type'],
					  	 'created_at' => $status['payments'][0]['created_at'],
					  	);

                   $bank_status = $status['payments'][0]['status'];

   				// print_r($result);


                   	             $status_1 = $status['status'];
								 $currency = $status['payments'][0]['currency'];
								 $pay_req_id = $status['id'];
								 $pay_id = $status['payments'][0]['payment_id'];
								 $fees = $status['payments'][0]['fees'];
								 $inst_type = $status['payments'][0]['instrument_type'];
								 // $bank_status = $status['payments'][0]['status'];
								 $modified_at = $status['payments'][0]['created_at'];

				   				$purpose =$status['purpose'];
				   				$name = $status['payments'][0]['buyer_name'];
				   				$email = $status['payments'][0]['buyer_email'];
				   				$amount = $status['payments'][0]['amount'];
				   				$status_tb ="Pending";


                      if ($bank_status === "Failed")
                       {

                       			
									   					if (!empty($d_id) && !empty($p_id))
									   					 {
									   					 		// echo "go forward";
									   			$result_query = $this->Donation_model->update_payment_id($d_id,$p_id,$bank_status);
									   				 	    // echo $result_query;
									   			$result_query_1 = $this->Paymentstatus_model->payment_update($p_id,$status_1,$currency,$pay_req_id,$pay_id,$fees,$inst_type,$bank_status,$modified_at);

									   					 if($this->session->userdata('logged_in') !== TRUE)
																	    {
																	      $this->load->view('don_inc/donation_header');
						          										  $this->load->view('donations/status/faile',$result);
						          										  $this->load->view('don_inc/footer');
						          										  $this->session->sess_destroy();
																	    }
																	    else
																	    {
																	    	$username = $this->session->userdata('name');
														                    $data['name'] = $username;
														                    $user_option = $this->session->userdata('role_id');
														                    $role_name = $this->session->userdata('role_name');
														                    $email = $this->session->userdata('email');

														                    $data['role_id'] = $user_option;
														                    $data['role_name'] = $role_name;

																	       $this->load->view('inc/header',$data);
						          										  $this->load->view('donations/status/user_fail',$result);
						          										  $this->load->view('inc/footer');

																	    }
									   					}
									   					else
									   					{
									   						    $this->load->view('don_inc/donation_header');
			          											$this->load->view('donations/Error_page');
			          											$this->load->view('don_inc/footer');
									   					}
                      	
                      }
                      else
                      {

									   					if (!empty($d_id) && !empty($p_id))
									   					 {

									   					 	
								$result_query = $this->Donation_model->update_payment_id($d_id,$p_id,$bank_status);
									   					 	    // echo $pay_table_id;


									 $result_query_1 = $this->Paymentstatus_model->payment_update($p_id,$status_1,$currency,$pay_req_id,$pay_id,$fees,$inst_type,$bank_status,$modified_at);

									   					    	// $noti = new Notification();
             												   
									   					    $email_con = $this->con_message($d_id,$p_id);
									   					    if ($email_con == 1)
									   					     {  
									   					     	  if($this->session->userdata('logged_in') !== TRUE)
																	    {
																	      $this->load->view('don_inc/donation_header');
						          										  $this->load->view('donations/status/sucess',$result);
						          										  $this->load->view('don_inc/footer');
						          										  $this->session->sess_destroy();
																	    }
																	    else
																	    {
																	    	$username = $this->session->userdata('name');
														                    $data['name'] = $username;
														                    $user_option = $this->session->userdata('role_id');
														                    $role_name = $this->session->userdata('role_name');
														                    $email = $this->session->userdata('email');

														                    $data['role_id'] = $user_option;
														                    $data['role_name'] = $role_name;

																	       $this->load->view('inc/header',$data);
						          										  $this->load->view('donations/status/user_succes',$result);
						          										  $this->load->view('inc/footer');

																	    }

									   					    	 
									   					    }
									   					    elseif ($email_con === "data not match")
									   					     {
									   					     	$message_error = "Donor data and Payment data Miss match. If you get the Paid message through Email Kindly update the Payment ID, amount, Paid for details";
									   					     	$error_message = array('message'=>$message_error,);
									   					    	$this->load->view('don_inc/donation_header');
			          											$this->load->view('donations/Error_page',$error_message);
			          											$this->load->view('don_inc/footer');
									   					    }
									   					    else
									   					    {
									   					    	$message_error = "Email not send. If you get the Paid message through Email Kindly update us with the Payment ID, amount, Paid for details";
									   					     	$error_message = array('message'=> $message_error,);
									   					    	$this->load->view('don_inc/donation_header');
			          											$this->load->view('donations/Error_page',$error_message);
			          											$this->load->view('don_inc/footer');
									   					    		
									   					    }
									   					 	   
									   					}
									   					else
									   					{
									   							$message_error = "Miss match in data donor and payment status details .If you get the Paid message through Email Kindly update the Payment ID, amount, Paid for details";
									   					     	$error_message = array('message'=>$message_error,);
									   						    $this->load->view('don_inc/donation_header');
			          											$this->load->view('donations/Error_page',$error_message);
			          											$this->load->view('don_inc/footer');

									   					}

                      


							} /*End of else */
	}/*End of status completed */

  /* Email Notification start    */
	private function con_message($miss_table_id,$pay_table_id)
	{

			$miss_data = $this->Donation_model->donor_details($miss_table_id); 
			$payment_data = $this->Paymentstatus_model->payment_details($pay_table_id);

			if ($miss_data->payment_id === $payment_data->id)
			{


				if ($payment_data->bank_status === "Credit")
				 {

				 	if ($payment_data->purpose === "Single Missionary" || $payment_data->purpose === "Missionary Couple" )
				 	{
									 		$to = 'dharmar@gemsbihar.org';
					                $subject = ''.$payment_data->purpose.' Donation Details';
					                $message = "<h1>Donor Details</h1>";
					                $message .= "<hr>";
					                // $message .= '<p><b>ID:</b> '.$miss_data->id.'</p>';
					                $message .= '<p><b>Name:</b> '.$miss_data->name.'</p>';
					                $message .= '<p><b>Email id:</b> '.$miss_data->email.'</p>';
					                $message .= '<p><b>Phone:</b> '.$miss_data->phone.'</p>';
					                $message .= '<p><b>Address:</b> '.$miss_data->address.'</p>';
					                $message .= '<p><b>Place:</b> '.$miss_data->place.'</p>';
					                $message .= '<p><b>Country:</b> '.$miss_data->country.'</p>';
					                $message .= '<p><b>Amounr:</b> '.$miss_data->amount.'</p>';
					                $message .= '<p><b>No of Missionary:</b> '.$miss_data->miss_count.'</p>';
					                $message .= '<p><b>Missionary Preference:</b> '.$miss_data->miss_pre.'</p>';
					                $message .= '<p><b>Monthly Report Language Preference :</b> '.$miss_data->mon_rep.'</p>';
					                $message .= '<p><b>Do you want the missionary be dedicated at your Church? or Home? :</b> '.$miss_data->miss_dedi.'</p>';
					                $message .= '<p><b>Remarks:</b> '.$miss_data->remarks.'</p>';
					                $message .= "<hr>";
					                $message .= "<h1>Payment Details</h1>";
					                $message .= '<p><b>Name:</b> '.$payment_data->buyer_name.'</p>';
					                $message .= '<p><b>Email:</b> '.$payment_data->email.'</p>';
					                $message .= '<p><b>Phone:</b> '.$payment_data->phone.'</p>';
					                $message .= '<p><b>Payment status:</b> '.$payment_data->status.'</p>';
					                $message .= '<p><b>Payment currency:</b> '.$payment_data->currency.'</p>';
					                $message .= '<p><b>Payment Request ID:</b> '.$payment_data->pay_req_id.'</p>';
					                $message .= '<p><b>Payment ID</b> '.$payment_data->pay_id.'</p>';
					                $message .= '<p><b>instrument_type :</b> '.$payment_data->inst_type.'</p>';
					                $message .= '<p><b>Bank status:</b> '.$payment_data->bank_status.'</p>';
					                $message .= "<hr>";
					              
					                // $headers .= "MIME-Version: 1.0"."\r\n";
					                // $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";

					                $headers[] = 'MIME-Version: 1.0';
									$headers[] = 'Content-type: text/html; charset=iso-8859-1';

									// $headers[] = 'Cc: dharmar@gemsbihar.org';
					                // send email
					                $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

					                return $email_status;	

				 		# code...
				 	}
				 	else
				 	{    
				 			$to = 'dharmar@gemsbihar.org';
				                $subject = ''.$payment_data->purpose.' Donation Details';
				                $message = "<h1>Donor Details</h1>";
				                $message .= "<hr>";
				                // $message .= '<p><b>ID:</b> '.$miss_data->id.'</p>';
				                $message .= '<p><b>Name:</b> '.$miss_data->name.'</p>';
				                $message .= '<p><b>Email id:</b> '.$miss_data->email.'</p>';
				                $message .= '<p><b>Phone:</b> '.$miss_data->phone.'</p>';
				                $message .= '<p><b>Address:</b> '.$miss_data->address.'</p>';
				                $message .= '<p><b>Place:</b> '.$miss_data->place.'</p>';
				                $message .= '<p><b>Country:</b> '.$miss_data->country.'</p>';
				                $message .= '<p><b>Amounr:</b> '.$miss_data->amount.'</p>';
				                
				                $message .= '<p><b>Remarks:</b> '.$miss_data->remarks.'</p>';
				                $message .= "<hr>";
				                $message .= "<h1>Payment Details</h1>";
				                $message .= '<p><b>Name:</b> '.$payment_data->buyer_name.'</p>';
				                $message .= '<p><b>Email:</b> '.$payment_data->email.'</p>';
				                $message .= '<p><b>Phone:</b> '.$payment_data->phone.'</p>';
				                $message .= '<p><b>Payment status:</b> '.$payment_data->status.'</p>';
				                $message .= '<p><b>Payment currency:</b> '.$payment_data->currency.'</p>';
				                $message .= '<p><b>Payment Request ID:</b> '.$payment_data->pay_req_id.'</p>';
				                $message .= '<p><b>Payment ID</b> '.$payment_data->pay_id.'</p>';
				                $message .= '<p><b>instrument_type :</b> '.$payment_data->inst_type.'</p>';
				                $message .= '<p><b>Bank status:</b> '.$payment_data->bank_status.'</p>';
				                $message .= "<hr>";
				              
				                // $headers .= "MIME-Version: 1.0"."\r\n";
				                // $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";

				                $headers[] = 'MIME-Version: 1.0';
								$headers[] = 'Content-type: text/html; charset=iso-8859-1';

								// $headers[] = 'Cc: dharmar@gemsbihar.org';
				                // send email
				                $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

				                return $email_status;

				 	}

				 }
				else
				{
					return $email_status = "failed";
					// echo "payment failed";
				}

			}
			else
			{
				return $email_status = "data not match";
				// echo "error";
			}

	}/* Email Notification End  */


	public function webhook_detail()
	{
		$this->load->model('Paymentstatus_model');

		$api_salt = $this->_ci->config->item('mojo_salt');

			 $data = $_POST;
				$mac_provided = $data['mac'];  // Get the MAC from the POST data
				unset($data['mac']);  // Remove the MAC key from the data.
				$ver = explode('.', phpversion());
				$major = (int) $ver[0];
				$minor = (int) $ver[1];
				if($major >= 5 and $minor >= 4)
				{
				     ksort($data, SORT_STRING | SORT_FLAG_CASE);
				}
				else
				{
				     uksort($data, 'strcasecmp');
				}
				// code only to send data to webhook data from here 



				// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
				// Pass the 'salt' without <>
				$mac_calculated = hash_hmac("sha1", implode("|", $data), $api_salt);

				if($mac_provided == $mac_calculated)
				{
				    if($data['status'] == "Credit")
				    {
				    			$to_email_id ="dharmar@gemsbihar.org";

				                $to = $to_email_id;
				                $subject = 'Payment Details from WebHook |' .$data['purpose'].' |' .$data['buyer_name'].'';
				                $message = "<h1>Payment Details</h1>";
				                $message .= "<hr>";
				                $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
				                $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
				                $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';
				                $message .= "<hr>";
				                
				                $message .= '<p><b>purpose:</b> '.$data['purpose'].'</p>';
				                $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
				                $message .= '<p><b>Currency:</b> '.$data['currency'].'</p>';
				                $message .= '<p><b>Fees Amount:</b> '.$data['fees'].'</p>';
				                $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
				                $message .= '<p><b>Payment Long URL:</b> '.$data['longurl'].'</p>';
				                $message .= '<p><b>Payment payment Request id:</b> '.$data['payment_request_id'].'</p>';
				                $message .= '<p><b>Payment payment Status:</b> '.$data['status'].'</p>';

				                $message .= '<p><b>Payment Mac:</b> '.$data['mac'].'</p>';
				                
				                $message .= "<hr>";

				              
				                $headers .= "MIME-Version: 1.0\r\n";
				                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				                // send email
				                mail($to, $subject, $message, $headers);
				    }
				    else
				    {
				        // Payment was unsuccessful, mark it as failed in your database.
				        // You can acess payment_request_id, purpose etc here.
				        $to_email_id ="mhstestglobal@gmail.com";

				                $to = $to_email_id;
				                $subject = 'Payment Details from WebHook |' .$data['purpose'].' |' .$data['buyer_name'].'';
				                $message = "<h1>Payment Details</h1>";
				                $message .= "<hr>";
				                $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
				                $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
				                $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';
				                $message .= "<hr>";
				                
				                $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
				                $message .= '<p><b>Currency:</b> '.$data['currency'].'</p>';
				                $message .= '<p><b>Fees Amount:</b> '.$data['fees'].'</p>';
				                $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
				                $message .= '<p><b>Payment Long URL:</b> '.$data['longurl'].'</p>';
				                $message .= '<p><b>Payment payment Request id:</b> '.$data['payment_request_id'].'</p>';
				                $message .= '<p><b>Payment payment Status:</b> '.$data['status'].'</p>';

				                $message .= '<p><b>Payment Mac:</b> '.$data['mac'].'</p>';
				                
				                $message .= "<hr>";

				              
				                $headers .= "MIME-Version: 1.0\r\n";
				                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				                // send email
				                mail($to, $subject, $message, $headers);
				    	  

				    }
				}
				else{
				    echo "MAC mismatch";
				}
		
	}


   			



}