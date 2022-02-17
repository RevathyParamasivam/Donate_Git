<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sponser extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
     
	 */
	
    function __construct()
    {
            parent::__construct();

            $this->load->model('login_model');
            $this->load->model('notification_model');
            $this->load->model('user_model');
            $this->load->helper("url");
            $this->load->helper('form');
            // $this->load->helper('captcha');
            $this->load->library('form_validation');
            // $this->load->model('region_model');



    }
    public function index()
	{

    $this->load->library('form_validation');
		$this->load->view('login/index');

	}
    
//    public function dashboard()
//    {
//        $this->load->view('inc/header');
////       $this->load->view('inc/side_nav');
//         $this->load->view('dashboard');
//         $this->load->view('inc/footer');
//    }
    public function auth()
    {
//        $this->load->view('login');
       
                    $this->form_validation->set_rules('username', 'Email Address', 'required');
                    $this->form_validation->set_rules('password', 'Password', 'required');

                  if ($this->form_validation->run() == false)
                    
                    {
                        $this->load->library('form_validation');
                     $this->load->view('login/index');

                    }
                    else
                    {
                      $username    = $this->input->post('username',TRUE);
                     $password = md5($this->input->post('password',TRUE));
                  
//                    echo"$email";
//                    echo"$password";
        
                    $validate = $this->login_model->validate($username,$password);
                //    print_r($validate);

//                 console.log($validate);
                    if($validate->num_rows() > 0)
                    {
                        $data  = $validate->row_array();
                        $user_id = $data['id'];
                        $name  = $data['name'];
                        $email = $data['email'];
                        $user_role = $data['role'];
                           $role_name = $this->user_model->user_role_name($user_role);

                        //$user_option = $data['user_option'];
                        $sesdata = array(
                            'user_id'  => $user_id,
                            'name'  => $name,
                            'email' => $email,
                            'role_id' => $user_role,
                            'role_name' => $role_name->name,
                            'logged_in' => TRUE
                        );

                        $this->session->set_userdata($sesdata);
                        // access login for admin
                        if($user_role === '1')
                        {
                            redirect('admin/home');

                        // access login for staff
                        }
                        elseif($user_role === '2')
                        {
                            redirect('members/home/finance');

                        // access login for author
                        }
                        elseif($user_role === '3')
                        {
                            redirect('members/home/donor');
                        }
                        else
                        {
                          $this->load->view('error_page');
                        }
                    }
                    else
                    {
                             $this->session->set_flashdata('login_fail','Username or Password is Wrong');
                             
                            
                           redirect('user');
                    }
                    }
                    
        
        
    
    }
    
    public function create_user()
    {
                        
                        $pwd = $this->input->post('pwd',TRUE);
                        $cpwd = $this->input->post('cpwd',TRUE);
                      
                       
                            if($pwd != $cpwd)
                            {
                                $this->session->set_flashdata('password_missmatch','password not matched');
                                redirect('admin/home/user');
//                                echo " ";
                            }
                            else
                            {

                                $create_by = $this->session->userdata('user_id');
                              $create_at =date('Y-m-d H:i:s');
                              $name    = $this->input->post('name',TRUE);
                              $role_id    = $this->input->post('role',TRUE);
                              $username = $this->input->post('user_name',TRUE);
                              $email = $this->input->post('email',TRUE);

                               $status =1;

                                $en_password =md5($pwd); 
                               
                                 $last_update_by = $create_by;
                                

                                $this->user_model->user_create($name,$email,$username,$en_password,$role_id,$create_by,$last_update_by,$status);	
                                $this->session->set_flashdata('Add','Sucessfully create the user');
                                redirect('User/view_user');
                            }
                            
                 
    }
    
    public function view_user()
    {
            if($this->session->userdata('logged_in') !== TRUE)
            {
                    redirect('user');
            }
           $data['username'] = $this->session->userdata('username');
             $data['user_role'] = $this->session->userdata('user_role');
             $data['user_id'] = $this->session->userdata('user_id');
             
           $result['user_role'] = $this->session->userdata('user_role');
            
            
            // $result['res'] = $this->form_model->fetch_categories();
            // $result['director'] = $this->form_model->fetch_director();
            // $result['zone'] = $this->form_model->fetch_zone();
            $result['reg'] = $this->user_model->fetch_user();
          // $result['reg_data'] = $this->region_model->fetch_reg();
            // $result['department'] = $this->form_model->fetch_department();
            // $result['user_option']=$user_option;
            
                  
            
            $this->load->view('inc/header',$data);
            $this->load->view('user/create_user',$result);
            $this->load->view('inc/footer');
        
    }

    public function update()
    {
        echo "<center>";
        echo "your are in update method";
        echo "</br>";
        echo "we come back soon";
        echo "</center>";
    }

    

    public function delete($id)
    {
         
         if ($id === '1')
          {
            // echo "admin";
             $this->session->set_flashdata('Delete','Sorry You can not Delete the Admin');
                  redirect('admin/home/users');
           
           }
           else
           {
                 $data = array('status'=>'0');
                  $reg_result = $this->user_model->delete($id,$data);
                  $this->session->set_flashdata('Delete','Sucessfully Delete the user');
                  redirect('admin/home/users');

           }
                    
        
    }
    

    public function username_check()
    {
         if($this->input->post('username'))
                   {
                       $result = $this->user_model->username_check($this->input->post('username'));
                        
                       if(isset($result))
                       {
                            echo "<span style='color: red' class='status-not-available'> Username Not Available.</span>";
                       }
                       else
                       {
                        echo "<span style='color: green' class='status-available'> Username Available.</span>";
                       }

                    }
    }

    public function useremail_check()
    {
         if($this->input->post('email'))
                   {
                       $result = $this->user_model->user_email($this->input->post('email'));
                        
                       if(isset($result))
                       {
                            echo "<span style='color: red' class='status-not-available'> Username Not Available.</span>";
                       }
                       else
                       {
                        echo "<span style='color: green' class='status-available'> Username Available.</span>";
                       }

                    }
    }




    public function pwd_change($id)
    {

                        $pwd    = $this->input->post('pwd',TRUE);
                        $password_new = $this->input->post('pwd1',TRUE);

                        $create_at =date('d-m-y H:i:s');

                        $user_data = $this->user_model->user_detail($id); 
                        $email=$user_data->email;

                        if ($pwd === $password_new)
                         {

                          $new_pwd = md5($pwd);

                          // echo $new_pwd;

                          $result = $this->user_model->change_pwd($id,$new_pwd);

                          if ($result>0)
                           {

                            
                               $email_info = $this->notification_model->pwd_change($email,$create_at);
                                   if($email_info > 0)
                                    {
                                      $this->session->set_flashdata('sucess','Password update');
                                       redirect('members/home/profile');
                                     
                                     }
                                     else
                                     {
                                      $this->session->set_flashdata('fail','Password Changed But Email not sent to User');
                                        redirect('members/home/profile');

                                     }

                          }
                          else
                          {
                            $this->session->set_flashdata('fail','Query Error');
                            redirect('members/home/profile');
                          }
                          
                          // echo $result;
                          
                        }
                        else
                        {
                          $this->session->set_flashdata('fail','Password Miss Matched');
                          redirect('members/home/profile');
                        }
      

    }
    function change_pwd()
    {

                        $id    = $this->input->post('userId',TRUE);
                        $pwd    = $this->input->post('pwd',TRUE);
                        $pwd_new = $this->input->post('pwd1',TRUE);   

                        $user_data = $this->user_model->user_detail($id); 
                        $email=$user_data->email;
                          
                              $create_at =date('d-m-y H:i:s');
                        
                        if ($pwd === $pwd_new)
                         {
                              $new_pwd = md5($pwd);
                              $result = $this->user_model->change_pwd($id,$new_pwd);

                              if ($result>0)
                               {
                                   $email_info = $this->notification_model->pwd_change($email,$create_at);
                                   if($email_info > 0)
                                    {
                                      $this->session->set_flashdata('Add','Password update Sucessfully');
                                       redirect('admin/home/users');
                                     
                                     }
                                     else
                                     {
                                      $this->session->set_flashdata('Delete','Password Changed But Email not sent to User');
                                        redirect('admin/home/users');

                                     }
                               }
                              else
                              {
                                $this->session->set_flashdata('Delete','Query Error');
                                redirect('admin/home/users');
                              }
                        }
                        else
                        {
                          $this->session->set_flashdata('Delete','Password Miss Matched');
                          redirect('admin/home/users');
                        }
    }
    

    
    public function logout()
     {
         $this->session->sess_destroy();
         redirect('user');
    }
}
