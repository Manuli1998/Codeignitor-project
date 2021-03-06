<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneratePdfController extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('PdfModel');
			$this->load->library('pdf');
		}
	
		public function index()
		{
			$data['customer_data'] = $this->PdfModel->showRecord();
			$this->load->view('GeneratePdfView', $data);
		}
	
		
	
		public function pdfdetails()
		{
			if($this->uri->segment(3))
			{
				$customer_id = $this->uri->segment(3);
				$html_content = '<h3 align="center">Volunteer Details</h3>';
				$html_content .= $this->PdfModel->show_single_details($customer_id);
				$this->pdf->loadHtml($html_content);
				$this->pdf->render();
				$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
				
			}
		}
	
	}

?>