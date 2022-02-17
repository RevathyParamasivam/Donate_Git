<?php
class Paymentstatus_model extends CI_Model
{
	var $table = 'tbl_payments';
    var $webhook_table = 'tbl_webhook';


	function payment_status($data)
    {
        // $query="insert into tbl_user values('','$name','$email','$username','$en_password','$role',NOW(),'$create_by',NOW(),'$last_update_by',NOW(),'$status','','','')";
        // $query="insert into tbl_user values('','$name','$email','$username','$en_password','$role','$create_at','$create_by','$status')";
        $this->db->insert($this->table,$data);

        $insert_id = $this->db->insert_id();

        return $insert_id;

    }
    

    function find_Payment($name,$email,$amount,$purpose,$status)
    {

    	   $this->db->select('id');
    	   $this->db->select('created_at');
            $this->db->from($this->table);
            $this->db->where('email',$email);
            $this->db->where('buyer_name',$name);
            $this->db->where('amount',$amount);
            $this->db->where('purpose',$purpose);
            $this->db->where('status',$status);
//            $this->db->where("usertype","admin");
             $query=$this->db->get();
            return $query->result_array();

    }
    function payment_update($id,$status_1,$currency,$pay_req_id,$pay_id,$fees,$inst_type,$bank_status,$modified_at)
    {
    	// $this->db->set($data);
    	$this->db->set('status', $status_1);
        $this->db->set('expires_at', $modified_at);
    	$this->db->set('currency', $currency);
    	$this->db->set('pay_req_id', $pay_req_id);
    	$this->db->set('pay_id', $pay_id);
    	$this->db->set('fees', $fees);
    	$this->db->set('inst_type', $inst_type);
    	$this->db->set('bank_status', $bank_status);
    	$this->db->set('modified_at', $modified_at);

    	$this->db->where('id', $id);
        $query =$this->db->update($this->table);

        return $query;

    }

    function payment_details($id)
    {
    			$this->db->where('id',$id);
            	$query = $this->db->get($this->table);
           		return $query->row();

    }

    function donation_sum($email)
    {
        $status = "Completed";
        $this->db->select_sum('amount');
        $this->db->from($this->table);
        $this->db->where('email',$email);
        $this->db->where('status',$status);
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result();

    }

    function allpayments()
    {
        $this->db->select("*");
        $this->db->from($this->table);
        // $this->db->where('email',$email);
        $this->db->order_by('id','desc');
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result();
    }

    function all_payments_sum()
    {

        $status = "Completed";
        $this->db->select_sum('amount');
        $this->db->from($this->table);
        // $this->db->where('email',$email);
        $this->db->where('status',$status);
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result();

    }

    function add_webhook($data_wh)
    {
        // $query="insert into tbl_user values('','$name','$email','$username','$en_password','$role',NOW(),'$create_by',NOW(),'$last_update_by',NOW(),'$status','','','')";
        // $query="insert into tbl_user values('','$name','$email','$username','$en_password','$role','$create_at','$create_by','$status')";
        $this->db->insert($this->webhook_table,$data_wh);

    }



 

 }
