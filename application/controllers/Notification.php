<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller 
{


    public function __construct()
	{
		parent::__construct();
		// $this->load->library('instamojo');
		// $this->load->helper('url');
		$this->load->model('Missionary_model');
		$this->load->model('Paymentstatus_model');
		// $this->load->model('User_model');
		// $this->load->model('Common_model');
	}


	public function index()
	{
		$this->load->view('welcome_message');
	}
	

	public function login()
	{
		// // $this->load->view('inc\header');
		// $this->load->view('login');
		// // $this->load->view('inc\footer');
	}

	function email_miss($donation_id,$payment_id)
	{
		

	} 
	/* Email Notification start    */
	function con_message($miss_table_id,$pay_table_id)
	{

			$miss_data = $this->Missionary_model->donor_details($miss_table_id); 
			$payment_data = $this->Paymentstatus_model->payment_details($pay_table_id);

			if ($miss_data->payment_id === $payment_data->id)
			{


				if ($payment_data->bank_status === "Credit")
				 {

				 $to = 'dharmar@gemsbihar.org';
                $subject = ''.$payment_data->purpose.' Details';
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
  
              
                // $headers .= "MIME-Version: 1.0"."\r\n";
                // $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";

                $headers[] = 'MIME-Version: 1.0';
				$headers[] = 'Content-type: text/html; charset=iso-8859-1';
                // send email
                $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

                return $email_status;
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
}
