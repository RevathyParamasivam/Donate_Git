<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Children extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('instamojo');
		$this->load->helper('url');
		// $this->load->model('Missionary_model');
    $this->load->model('Donation_model');
		$this->load->model('Paymentstatus_model');
		$this->load->model('User_model');
		$this->load->model('Common_model');
	}

	public function index()
	{

		  $this->load->view('don_inc/header');
          $this->load->view('donations/children/index');
          $this->load->view('don_inc/footer');

	}

	public function lp()
	{

		  $this->load->view('don_inc/header');
          $this->load->view('donations/children/children_lp');
          $this->load->view('don_inc/footer');		
	}

	public function opp()
	{
		  $this->load->view('don_inc/header');
          $this->load->view('donations/children/children_opp');
          $this->load->view('don_inc/footer');
	}

	public function mc()
	{
		  $this->load->view('don_inc/header');
          $this->load->view('donations/children/children_mc');
          $this->load->view('don_inc/footer');
	}

	public function mch()
	{
		  $this->load->view('don_inc/header');
          $this->load->view('donations/children/children_mche');
          $this->load->view('don_inc/footer');
	}

	public function donation($form_id)
	{

              // echo $form_id;
		if ($form_id ==="children_ls")
		{
				
              $data['message'] ="Single Child Rs.1200/ month. If the Number of Child 2 means 1200*2 = 2400/ month";
              $data['type'] ="Less Privileged Children Support";

              	$this->load->library('form_validation');
              	$this->load->view('don_inc/header');
          		$this->load->view('donations/children/donation',$data);
          		$this->load->view('don_inc/footer');

		}
		elseif($form_id ==="children_opp")
		{
			$data['message'] ="Our People Project RS.60,000 / Moth / Project";
              $data['type'] ="Our People Project / Village Adoption";

              	$this->load->library('form_validation');
              	$this->load->view('don_inc/header');
          		$this->load->view('donations/children/donation',$data);
          		$this->load->view('don_inc/footer');
		}
		elseif ($form_id ==="children_mc")
		{
					$data['message'] ="Single Child Rs.1500/ month. If the Number of Child 2 means 1500*2 = 3000/ month";
                  $data['type'] ="Missionary Child Support";

              	$this->load->library('form_validation');
              	$this->load->view('don_inc/header');
          		$this->load->view('donations/children/donation',$data);
          		$this->load->view('don_inc/footer');
			
		}
		elseif ($form_id ==="children_mche") 
		{

			$data['message'] ="1) Regular UG/PG Courses : Rs. 50,000 /Year/Student.2) Professional Courses : Rs 5,00,000/Courses. 3) High End Special Courses: Rs 10,00,000/Courses ";
                  $data['type'] ="Missionary Child Higher Education Support";

              	$this->load->library('form_validation');
                
              	$this->load->view('don_inc/header');
          		$this->load->view('donations/children/donation',$data);
          		$this->load->view('don_inc/footer');
		}
		else
		{           
	     }

}
	public function donation_opp()
	{        
               $this->load->helper(array('form','url'));
                
                $this->load->library('form_validation');
                               
              $support = $this->input->post('children',TRUE);

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

                    $this->form_validation->set_rules('cfrom', 'Chrildren From', 'required');
                    $this->form_validation->set_rules('cto', 'Chrildren To', 'required');
                    $this->form_validation->set_rules('bday', 'Birth Day');
                    $this->form_validation->set_rules('wday', 'Wedding Day');

                   // $this->form_validation->set_rules('month_report_pre', 'Monthly Report', 'trim|required');
                   // $this->form_validation->set_rules('miss_dedication_pre', 'Missionary Dedication', 'trim|required');
                   $this->form_validation->set_rules('special_occ','Special Occasion');
                   $this->form_validation->set_rules('remark','Remark');
               
                   if($this->form_validation->run() == FALSE)
                   {
                        if ($support ==="Less Privileged Children Support")
                         {
                         
                                $data['message'] ="Single Child Rs.1200/ month. If the Number of Child 2 means 1200*2 = 2400/ month";
                                $data['type'] ="Less Privileged Children Support";

                                  $this->load->library('form_validation');
                                  $this->load->view('don_inc/header');
                                 $this->load->view('donations/children/donation',$data);
                                 $this->load->view('don_inc/footer');
                        }
                        elseif ($support ==="Our People Project / Village Adoption")
                        {
                                          $data['message'] ="Our People Project RS.60,000 / Moth / Project";
                            $data['type'] ="Our People Project / Village Adoption";

                              $this->load->library('form_validation');
                              $this->load->view('don_inc/header');
                            $this->load->view('donations/children/donation',$data);
                            $this->load->view('don_inc/footer');

                          # code...
                        }
                        elseif ($support ==="Missionary Child Support")
                         {
                                  $data['message'] ="Single Child Rs.1500/ month. If the Number of Child 2 means 1500*2 = 3000/ month";
                          $data['type'] ="Missionary Child Support";

                        $this->load->library('form_validation');
                        $this->load->view('don_inc/header');
                      $this->load->view('donations/children/donation',$data);
                      $this->load->view('don_inc/footer');
                          # code...
                        }
                        else
                        {
                                      $data['message'] ="1) Regular UG/PG Courses : Rs. 50,000 /Year/Student.2) Professional Courses : Rs 5,00,000/Courses. 3) High End Special Courses: Rs 10,00,000/Courses ";
                              $data['type'] ="Missionary Child Higher Education Support";

                            $this->load->library('form_validation');
                            
                            $this->load->view('don_inc/header');
                          $this->load->view('donations/children/donation',$data);
                          $this->load->view('don_inc/footer');

                        }
                          
                   }
                   else
                   {
                        // echo "you are here";

                           $purpose = $support;
                            // $miss_count = $this->input->post('val-digits',TRUE);
                            $spon_amount    = $this->input->post('val-number',TRUE);
                            $spon_name    = $this->input->post('name',TRUE);
                            $spon_address    = $this->input->post('address',TRUE);
                            $spon_place    = $this->input->post('place',TRUE);
                            $spon_country    = $this->input->post('country',TRUE);
                            $spon_email    = $this->input->post('email',TRUE);
                            $spon_phone    = $this->input->post('phone',TRUE);
                            $spon_cfrom    =$this->input->post('cfrom',TRUE);
                            $spon_cto    = $this->input->post('cto',TRUE);
                            $spon_bday    = $this->input->post('bday',TRUE);
                            $spon_wday    = $this->input->post('wday',TRUE);
                            $spon_special_occ    = $this->input->post('special_occ',TRUE);
                            $spon_remarks    = $this->input->post('remark',TRUE);

                            // echo "$purpose";
                      if ($purpose === "Less Privileged Children Support" || $purpose === "Our People Project / Village Adoption" || $purpose === "Missionary Child Support" || $purpose === "Missionary Child Higher Education Support")
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
                                            'cfrom' =>$spon_cfrom,
                                            'ctill' =>$spon_cto,
                                            'birth' =>$spon_bday,
                                            'wedding' =>$spon_wday,
                                            'special' =>$spon_special_occ,
                                            'created_at'=>$created_at,
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
