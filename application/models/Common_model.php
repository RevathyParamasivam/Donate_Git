<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model 
{
    var $t_role = 'tbl_role';
    var $prayer = 'tbl_prayer';
    var $t_crteate_by = 'tbl_create_by';
    var $t_gender = 'tbl_gender';
    var $t_matrial = 'tbl_matrial_status';

    
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
    
    /*Prayer Request */
      function add_request($data)
    {
        $this->db->insert($this->prayer,$data);

    }

  function get_gender()
  {
        $this->db->select("*");
        $this->db->from($this->t_gender);
        $query = $this->db->get();
        return $query->result();
  }
    
    function get_matrial()
  {
        $this->db->select("*");
        $this->db->from($this->t_matrial);
        $query = $this->db->get();
        return $query->result();
  }
    
    
}