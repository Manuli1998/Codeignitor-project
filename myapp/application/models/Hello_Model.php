<?php
class Hello_Model extends CI_Model 
{
	function saverecords($name,$email,$address,$password,$mobile)
	{
	$query="insert into users values('','$name','$email','$address','$password','$mobile')";
	$this->db->query($query);
	}
}