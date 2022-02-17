<?php
class User_model extends CI_Model
{
 

  var $table = 'tbl_user';
  var $t_user_detail = 'tbl_user_detail';
  var $role_table = 'tbl_role';

  var $t_role = 'tbl_role';
    var $t_crteate_by = 'tbl_create_by';
    
function get_role_id($name)
    {
         $this->db->select('id');
            $this->db->from($this->t_role);
            $this->db->where('name',$name);
//            $this->db->where("usertype","admin");
             $query=$this->db->get();
            return $query->result_array();
    }


    function get_role()
    {
       $this->db->select("*");
        $this->db->from($this->t_role);
        $query = $this->db->get();
        return $query->result();
    }
    
function get_create_by_id($name)
    {
         $this->db->select('id');
            $this->db->from($this->t_crteate_by);
            $this->db->where('name',$name);
//            $this->db->where("usertype","admin");
             $query=$this->db->get();
            return $query->result_array();
    }

    


  function validate($email,$password)
  {
        $this->db->select("*");
        $this->db->from("tbl_user");
        $this->db->where('username',$email);
        $this->db->where('password',$password);
        $result = $this->db->get();
        return $result; 
      
      
//    $this->db->where('user_name',$email);
//    $this->db->where('user_password',$password);
//    $result = $this->db->get('tbl_user');
//    return $result;
      
  }


  	function fetch_user()
    {
        // $query = $this->db->get($this->table);
        // $this->db->order_by('id','desc');
        // return $query->result();
        $this->db->select("*");
        $this->db->from($this->table);
        // $this->db->where('email',$email);
        $this->db->order_by('id','desc');
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result();
    }
    
    

    function add_user($data)
    {
        // $query="insert into tbl_user values('','$name','$email','$phone','$username','$password','$role',NOW(),'$create_by',NOW(),'$last_update_by',NOW(),'$status','','','')";
        // $query="insert into tbl_user values('','$name','$email','$username','$en_password','$role','$create_at','$create_by','$status')";
         // $this->db->query($query);
        $query = $this->db->insert($this->table,$data);
        $insert_id = $this->db->insert_id();
        // $query_user = $this->add_user_detils($insert_id);

        return $insert_id;

    }

    function change_pwd($id,$pwd)
    {

      $this->db->set('password', $pwd);

      $this->db->where('id', $id);
        $query =$this->db->update($this->table);

        return $query;
        // $this->db->set('last_login', $last_login);
        // $this->db->set('pay_req_id', $pay_req_id);
        // $this->db->set('pay_id', $pay_id);
        // $this->db->set('fees', $fees);
        // $this->db->set('inst_type', $inst_type);
        // $this->db->set('bank_status', $bank_status);
        // $this->db->set('modified_at', $modified_at);

        

    }





    function add_user_detils($user_data)
    {
        // $user_data = array('user_id' => $user_id,);
        // $query1 = $this->db->insert($this->t_user_detail,$user_data);

        $query = $this->db->insert($this->t_user_detail,$user_data);
        // $insert_id = $this->db->insert_id();
        // $query_user = $this->add_user_detils($insert_id);

        return $query;
    }
    
    
    function username_check($username)
    {
    	$this->db->where('username',$username);
            $query = $this->db->get($this->table);
           return $query->row();

    }
    
    
    function delete($id,$data)
    {
      $this -> db -> where('id', $id);
      $this -> db -> update($this->table,$data);

  }
    
    
        function user_email($email)
    {
            $this->db->where('email',$email);
            $query = $this->db->get($this->table);
           return $query->result();
    }

       function user_phone($phone)
    {
            $this->db->where('phone',$phone);
            $query = $this->db->get($this->table);
            return $query->result();
    }

    function user_role_name($role_id)
    {

        $this->db->select('name');
           // $this->db->select('created_at');
            $this->db->from($this->role_table);
            $this->db->where('id',$role_id);
            // $this->db->where('email',$email);
            // $this->db->where('amount',$amount);
            // $this->db->where('purpose',$purpose);
            // $this->db->where('status',$status);
//            $this->db->where("usertype","admin");
             $query = $this->db->get();
            return $query->row();

    }


    function user_detail($id)
    {
                $this->db->where('id',$id);
                $query = $this->db->get($this->table);
                return $query->row();


    }

    function user_profile_detail($id)
    {
                $this->db->where('user_id',$id);
                $query = $this->db->get($this->t_user_detail);
                return $query->row();


    }


    function profile_details($id)
    {

              
              // // $this->db->where('email',$email);
              // $this->db->order_by('id','desc');
              // // $this->db->where('password',$password);
              // $query = $this->db->get();
              // return $query->result();

                $this->db->select("*");
                $this->db->from($this->t_user_detail);
                $this->db->where('user_id',$id);
                $query = $this->db->get();
                return $query->result();
    }

    function profile_update($id,$phone,$gender,$matrial_status,$designation,$bday,$address,$place,$country)
    {
      
      $this->db->set('phone', $phone);
        $this->db->set('gender', $gender);
        $this->db->set('matrial_status', $matrial_status);
        $this->db->set('designation', $designation);
        $this->db->set('dob', $bday);
        $this->db->set('address', $address);
        $this->db->set('place', $place);
        $this->db->set('country', $country);

        $this->db->where('id', $id);
        $query =$this->db->update($this->t_user_detail);

        return $query;

    }
 
    function login_update($id,$last_login,$last_update)
    {
        $this->db->set('last_update', $last_update);
        $this->db->set('last_login', $last_login);
        // $this->db->set('pay_req_id', $pay_req_id);
        // $this->db->set('pay_id', $pay_id);
        // $this->db->set('fees', $fees);
        // $this->db->set('inst_type', $inst_type);
        // $this->db->set('bank_status', $bank_status);
        // $this->db->set('modified_at', $modified_at);

        $this->db->where('id', $id);
        $query =$this->db->update($this->table);

        return $query;

    }

    function user_create($name,$email,$username,$en_password,$role_id,$create_by,$last_update_by,$status)
    {

        
      
    }

/* New donor as creating new user */

    function create_user($spon_name,$spon_email,$spon_phone,$spon_place,$spon_country)
    {

//            $this->load->model('User_model');
           $donor_name = $spon_name;
            $donor_email = $spon_email;
            $donor_phone = $spon_phone;
            $role_name = "donor";
            $create_name = "donation_page";
            $status =1;
            $en_password = md5($donor_phone);
        
                  $user_email = $this->user_email($donor_email);

                  // print_r($user_email);
//                  $user_phone = $this->User_model->user_phone($donor_phone);
                  

                if(empty($user_email))
                {
                  $role_value = $this->get_role_id($role_name);
                  $role = $role_value[0]['id'];
                  $create_value = $this->get_create_by_id($create_name);
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
                                            'last_login' =>$created_at,
                                            'status' =>$status,
                                           );
                    
                      $user_reg_id = $this->add_user($user);

                      $u_detail = array(    'user_id' =>$user_reg_id,
                                            'phone' =>$donor_phone,
                                            'updated_by' =>$create_by,
                                            'updated_at' =>$created_at,
                                            'place' =>$spon_place,
                                            'country' =>$spon_country,
                                           );

                        $re_user =$this->add_user_detils($u_detail);

                      // echo $user_reg_message;

                      if ($user_reg_id> 0)
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


   /* New Email notification for creating new user login details  */


    function reg_email($name,$email,$phone)
   {


      $to = $email;
      $subject = 'Donor Login Details';

      $message = "<h1>Donor Details</h1>";
                $message .= "<hr>";
                // $message .= '<p><b>ID:</b> '.$miss_data->id.'</p>';
                $message .= '<p><b>Name:</b> '.$name.'</p>';
                $message .= '<p><b>User ID :</b> '.$email.'</p>';
                $message .= '<p><b>Password :</b> '.$phone.'</p>';
                       
                $message .= "<hr>";  
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                // $headers[] = 'Cc: dharmar@gemsbihar.org';
                // send email
                $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

                return $email_status;
                      
   }    

/* New Email notification for creating new user login details  */




    // // Zone
    // function fetch_value_zone()
        
    // {
    //     $query = $this->db->query('SELECT `zone_name` FROM `tbl_zone`');
    //    //print_r($query->result());
        
    //     //echo"hi";
    //     $output ='<option value=""> Select </option>';
    //     foreach($query->result() as $row)
    //     {
    //         $output .='<option value="'.$row->zone_name.'">'.$row->zone_name.'</option>';
    //     }
    //     return $output;
         
    // }
    
    // // Regional 
    // function fetch_value_reg()    
    // {
    //     $query = $this->db->query('SELECT `reg_name` FROM `tbl_region`');
    //    //print_r($query->result());
        
    //     //echo"hi";
    //     $output ='<option value=""> Select </option>';
    //     foreach($query->result() as $row)
    //     {
    //         $output .='<option value="'.$row->reg_name.'">'.$row->reg_name.'</option>';
    //     }
    //     return $output;
         
    // }
    // // Ad Office
    // function fetch_value_ad()    
    // {
    //     $query = $this->db->query('SELECT `office_name` FROM `tbl_office`');
    //    //print_r($query->result());
        
    //     //echo"hi";
    //     $output ='<option value=""> Select </option>';
    //     foreach($query->result() as $row)
    //     {
    //         $output .='<option value="'.$row->office_name.'">'.$row->office_name.'</option>';
    //     }
    //     return $output;
         
    // }
    // // Department
    // function fetch_value_department()    
    // {
    //     $query = $this->db->query('SELECT `department` FROM `tbl_deparment`');
    //    //print_r($query->result());
        
    //     //echo"hi";
    //     $output ='<option value=""> Select </option>';
    //     foreach($query->result() as $row)
    //     {
    //         $output .='<option value="'.$row->department.'">'.$row->department.'</option>';
    //     }
    //     return $output;
         
    // }
    
    
}
