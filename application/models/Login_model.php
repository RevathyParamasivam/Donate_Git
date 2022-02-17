<?php
class Login_model extends CI_Model
{
 
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
    // Zone
    function fetch_value_zone()
        
    {
        $query = $this->db->query('SELECT `zone_name` FROM `tbl_zone`');
       //print_r($query->result());
        
        //echo"hi";
        $output ='<option value=""> Select </option>';
        foreach($query->result() as $row)
        {
            $output .='<option value="'.$row->zone_name.'">'.$row->zone_name.'</option>';
        }
        return $output;
         
    }
    
    // Regional 
    function fetch_value_reg()    
    {
        $query = $this->db->query('SELECT `reg_name` FROM `tbl_region`');
       //print_r($query->result());
        
        //echo"hi";
        $output ='<option value=""> Select </option>';
        foreach($query->result() as $row)
        {
            $output .='<option value="'.$row->reg_name.'">'.$row->reg_name.'</option>';
        }
        return $output;
         
    }
    // Ad Office
    function fetch_value_ad()    
    {
        $query = $this->db->query('SELECT `office_name` FROM `tbl_office`');
       //print_r($query->result());
        
        //echo"hi";
        $output ='<option value=""> Select </option>';
        foreach($query->result() as $row)
        {
            $output .='<option value="'.$row->office_name.'">'.$row->office_name.'</option>';
        }
        return $output;
         
    }
    // Department
    function fetch_value_department()    
    {
        $query = $this->db->query('SELECT `department` FROM `tbl_deparment`');
       //print_r($query->result());
        
        //echo"hi";
        $output ='<option value=""> Select </option>';
        foreach($query->result() as $row)
        {
            $output .='<option value="'.$row->department.'">'.$row->department.'</option>';
        }
        return $output;
         
    }
    
    function add_user($name,$username,$en_password,$role,$option)
    {
        $query="insert into tbl_user values('','$name','$username','$en_password','$role','$option')";
        $this->db->query($query);
    }
    
    
    
    
        
 
}
 