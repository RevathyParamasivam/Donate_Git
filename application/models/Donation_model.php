<?php
class Donation_model extends CI_Model
{
	var $table = 'tbl_donation';
    var $table_type ='tbl_donation_type';


	function all_donation()
    {
        $this->db->select("*");
        $this->db->from($this->table);
        // $this->db->where('email',$email);
        $this->db->order_by('id','desc');
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result();
    }

    function all_donation_sum()
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


    function donation_type()
    {
        $this->db->select("*");
        $this->db->from($this->table_type);
        // $this->db->where('email',$email);
        $this->db->order_by('id','asc');
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->result();
    }
    
    function create_donation_type($data)
    {
        $this->db->insert($this->table_type,$data);
                $insert_id = $this->db->insert_id();

                return $insert_id;

    }

    function categories_by_id($id)
    {
             $this->db->where('id',$id);
            $query = $this->db->get($this->table_type);
            return $query->result();

    }

    function update_categories($id,$purpose,$amount_detail,$details)
    {


                $this->db->set('purpose', $purpose);
                $this->db->set('amount_detail', $amount_detail);
                $this->db->set('details', $details);
                $this->db->where('id', $id);
                $query =$this->db->update($this->table_type);

                return $query;
    }

    function Delete_categories($id)
    {

                    $status = "0";
                    $this->db->set('status', $status);
                     $this->db->where('id', $id);
                    $query =$this->db->update($this->table_type);
                return $query;

    }
}
 