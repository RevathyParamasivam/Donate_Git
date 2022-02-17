<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller
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
                    $this->load->view('admin/donation');
                    $this->load->view('inc/footer');
  }

function categories()
  {

                    $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $email = $this->session->userdata('email');

                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;
                    
                      $result['type'] = $this->Donation_model->donation_type();


                    $this->load->view('inc/header',$data);
                    $this->load->view('admin/donation/categories',$result);
                    $this->load->view('inc/footer');
  }

 function add_categories()
  {
    
                     $purpose    = $this->input->post('purpose',TRUE);
                     $amount = $this->input->post('amount',TRUE);
                     $details = $this->input->post('details',TRUE);
                     
                     $status = '1';

                     $data = array('purpose' =>$purpose ,
                                    'amount_detail' =>$amount,
                                    'details' =>$details,
                                    'status' =>$status,
                                     );
                     $create = $this->Donation_model->create_donation_type($data);

                      if ($create > 0)
                       {
                          $this->session->set_flashdata('success','Sucessfuly Created the Donation categories..!');
                          redirect('admin/donation/categories');

                      }
                      else
                      {
                        $this->session->set_flashdata('fail','Fail to insert the categories');
                        redirect('admin/donation/categories');
                      }



  } 
  function edit_categories($category_id)
  {

                   $username = $this->session->userdata('name');
                    $data['name'] = $username;
                    $user_option = $this->session->userdata('role_id');
                    $role_name = $this->session->userdata('role_name');
                    $data['role_id'] = $user_option;
                    $data['role_name'] = $role_name;
                    $email = $this->session->userdata('email');
                    
                    $id = $this->session->userdata('user_id');



            //          // $result['user'] = $this->User_model->user_detail($id);
                    $result['categories'] = $this->Donation_model->categories_by_id($category_id);
                    

                  

              $this->load->view('inc/header',$data);
            $this->load->view('admin/donation/categories_update',$result);
            $this->load->view('inc/footer');

  }
  function update_categories($id)
  {

                     $purpose    = $this->input->post('purpose',TRUE);
                     $amount_detail = $this->input->post('amount',TRUE);
                     $details = $this->input->post('details',TRUE);

                  

                     $update = $this->Donation_model->update_categories($id,$purpose,$amount_detail,$details);



                      if ($update > 0)
                       {
                          $this->session->set_flashdata('success','Sucessfuly update the Donation categories..!');
                          redirect('admin/donation/categories');

                      }
                      else
                      {
                        $this->session->set_flashdata('fail','Fail to insert the categories');
                        redirect('admin/donation/categories');
                      }

  }
  function Delete_categories($id)
  {

            $deleted = $this->Donation_model->Delete_categories($id);

            if($deleted > 0)
            {
              $this->session->set_flashdata('success','Sucessfuly deleted the Donation categories..!');
                          redirect('admin/donation/categories');

            }
            else
              {
                        $this->session->set_flashdata('fail','Fail to insert the categories');
                        redirect('admin/donation/categories');
                      }

  }

  public function categories_view()
  {

    $id=($this->input->post('id'));

     $data = $this->Donation_model->categories_by_id($id);

     // print_r($data);

    if(empty($data))
    {

      $this->session->set_flashdata('fail','Categories Details not added. First Addd the category');
                        redirect('admin/donation/categories');
    }
    else
    {
        foreach ($data as $result) 
        {
            $data_set[] = array("id"=>$result->id,
                  "purpose"=>$result->purpose,
                  "amount"=>$result->amount_detail,
                  "details"=>$result->details, 
                  );

        }
                
        // print_r($data_set);

      echo json_encode($data_set);
      exit();


    }
    
  } 




 } 
