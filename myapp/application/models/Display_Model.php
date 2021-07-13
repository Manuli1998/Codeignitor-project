<?php
class Display_Model extends CI_Model 
{

	function displayrecords()
	{
	$query=$this->db->query("select * from users");
	return $query->result();
	}

	function deleterecords($id)
	{
	$this->db->query("delete  from users where id='".$id."'");
	}

	function updaterecords($name,$email,$address,$password,$mobile,$id)
	{
	$query=$this->db->query("update users SET name='$name',email='$email',address='$address',password='$password',mobile='$mobile' where id='".$id."'");
	}
}