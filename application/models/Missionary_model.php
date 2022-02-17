<?php
class Missionary_model extends CI_Model
{
	var $table = 'tbl_donation';


	function add_miss_donor($data)
    {
        // $query="insert into tbl_user values('','$name','$email','$username','$en_password','$role',NOW(),'$create_by',NOW(),'$last_update_by',NOW(),'$status','','','')";
        // $query="insert into tbl_user values('','$name','$email','$username','$en_password','$role','$create_at','$create_by','$status')";
        $this->db->insert($this->table,$data);
        $insert_id = $this->db->insert_id();

        return $insert_id;

    }


    function find_miss($name,$email,$amount,$purpose,$status)
    {

    	   $this->db->select('id');
    	   $this->db->select('created_at');
            $this->db->from($this->table);
            $this->db->where('purpose',$purpose);
            $this->db->where('name',$name);
            $this->db->where('email',$email);
            $this->db->where('amount',$amount);
            $this->db->where('status',$status);
//            $this->db->where("usertype","admin");
             $query=$this->db->get();
            return $query->result_array();

    }

    function update_payment_id($id,$payment_id,$bank_status)
    {
    	if ($bank_status === "Failed")
    	 {
    	 		$status = "Failed";
		    	$this->db->set('payment_id', $payment_id);
		    	$this->db->set('status', $status);
		    	$this->db->where('id', $id);
		        $query =$this->db->update($this->table);

		        return $query;

    		# code...
    	}
    	else
    	{
    			$status = "Completed";
		    	$this->db->set('payment_id', $payment_id);
		    	$this->db->set('status', $status);
		    	$this->db->where('id', $id);
		        $query =$this->db->update($this->table);

		        return $query;

    	}
    	
    }


    function donor_details($id)
    {
    			$this->db->where('id',$id);
            	$query = $this->db->get($this->table);
           		return $query->row();

    }

    function donation_details($email)
    {
    	$this->db->select("*");
        $this->db->from($this->table);
        $this->db->where('email',$email);
        $this->db->order_by('id','desc');
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result();
    }

    function alldonation()
    {
        $this->db->select("*");
        $this->db->from($this->table);
        // $this->db->where('email',$email);
        $this->db->order_by('created_at','desc');
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result();
    }


    

    

 

 }
