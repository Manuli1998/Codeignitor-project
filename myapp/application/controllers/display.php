<?php
class display extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Display_Model');
	}

	
	public function dispdata()
	{
	$result['data']=$this->Display_Model->displayrecords();
	$this->load->view('view_display',$result);
	}

	public function deletedata()
	{
	$id=$this->input->get('id');
	$this->Display_Model->deleterecords($id);
	echo "Successfully Deleted the record.";
	redirect("http://localhost/myapp/index.php/display/dispdata");
	}

	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Display_Model->displayrecords($id);
	$this->load->view('view_update',$result);	
	
		if($this->input->post('update'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('email');
		$a=$this->input->post('address');
		$p=$this->input->post('password');
		$m=$this->input->post('mobile');
		$this->Display_Model->updaterecords($n,$e,$a,$p,$m,$id);
		redirect("http://localhost/myapp/index.php/display/dispdata");
		}
	}
}
?>