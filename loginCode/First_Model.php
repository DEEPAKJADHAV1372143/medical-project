<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_Model extends CI_Model {

	public function Insert_data($data)
	{
	$this->db->insert("first_tbl",$data);
    }
	public function Fetch_all_data()
	{
    $ret=$this->db->get("first_tbl");
    return $ret;
    }
    public function delete_data($id)
	{
    $this->db->where("id",$id);
    $this->db->delete("first_tbl");
    
    }
    
    public function get_single_data($id)
	{
    $this->db->where("id",$id);
    $single=$this->db->get("first_tbl");
    return $single;
    }
    
    public function Update_data($id,$data)
	{
        $this->db->where("id",$id);
	$this->db->update("first_tbl",$data);
    }


    /* next code login system */

    public function isLogin($email,$password)
	{
        $this->db->where("email",$email);
        $this->db->where("password",$password);
        $chicking=$this->db->get("first_tbl");
        if($chicking->num_rows() > 0)
        { return true;}
        else
        { return false;}
    }
}