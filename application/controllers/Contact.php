<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->helper("url");
		$this->load->helper('form');
		$this->load->helper('captcha');
		$this->load->library('form_validation');
	    $this->load->model('Donation_model');
	    $this->load->model('Notification_model');
	}

	public function index()
	{

		     
	//validating form fields
    
    
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email Address', 'required');
    $this->form_validation->set_rules('phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('purpose', 'Purpose', 'required');
    $this->form_validation->set_rules('remarks', 'Prayer Request', 'required');
    $this->form_validation->set_rules('userCaptcha', 'Captcha', 'required|callback_check_captcha');
    $userCaptcha = $this->input->post('userCaptcha');
	
	 if ($this->form_validation->run() == false)
     {
      // numeric random number for captcha
      $random_number = substr(number_format(time() * rand(),0,'',''),0,6);
      // setting up captcha config
      $vals = array(
             'word' => $random_number,
             'img_path' => './assets/captcha_images/',
             'img_url' => base_url().'/assets/captcha_images/',
             'img_width' => 140,
             'img_height' => 32,
             'expiration' => 7200
            );
      $data['captcha'] = create_captcha($vals);
      $this->session->set_userdata('captchaWord',$data['captcha']['word']);
      // $this->load->view();
      // $this->load->view('index', $data);

          $this->load->view('don_inc/donation_header');
          $this->load->view('donations/contact', $data);
          $this->load->view('don_inc/footer');
    }       
    else 
         {
      // do your stuff here.
            // echo 'I m here clered all validations';
            $name = $this->input->post('name',TRUE);
            $email = $this->input->post('email',TRUE);
            $phone = $this->input->post('phone',TRUE);
            $purpose = $this->input->post('purpose',TRUE);
            $remarks = $this->input->post('remarks',TRUE);
            $status = "Need Information";

            $created_at = date("Y-m-d H:i:s");

            // $data = array('name' =>$name = $this->input->post('name',TRUE),
            //               'email' =>$email = $this->input->post('email',TRUE),
            //               'phone' =>$email = $this->input->post('phone',TRUE),
            //               'request' =>$email = $this->input->post('request',TRUE),
            //               'created_at'=>$created_at
            //               );

              $data = array('name' =>$name,
                            'email' =>$email,
                            'phone' =>$phone,
                            'purpose' =>$purpose,
                            'remarks' =>$remarks,
                            'status' =>$status,
                            'created_at'=>$created_at
                             );

            // print_r($data);
             $result = $this->Donation_model->add_miss_donor($data);

             if (!empty($result))
             {
                      $not_status=$this->Notification_model->details_request($name,$email,$phone,$purpose,$remarks);

                       if ($not_status == '1')
                      {
                         // echo"Thank You";

                      	$this->session->set_flashdata('success','Thank You we will contact You Soon');

                         redirect('donation');
                       }
                       else
                       {
                         echo "Email not send";
                       }

             }
             else
             {
               echo "Data insert Error";
             }



          }
	}
	 
	public function check_captcha($str)
   {
    $word = $this->session->userdata('captchaWord');
    if(strcmp(strtoupper($str),strtoupper($word)) == 0){
      return true;
    }
    else{
      $this->form_validation->set_message('check_captcha', 'Please enter correct words!');
      return false;
    }
	}
	

}	
