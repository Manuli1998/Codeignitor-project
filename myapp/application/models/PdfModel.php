<?php
class PdfModel extends CI_Model
{
	function showRecord()
	{
		return $this->db->get('users');
	}
	function show_single_details($customer_id)
	{
		$this->db->where('id', $customer_id);
		$data = $this->db->get('users');
		$output = '<table width="100%" cellspacing="5" cellpadding="5">';
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				<td>
					<p><b>Name : </b>'.$row->name.'</p>
					<p><b>Email : </b>'.$row->email.'</p>
					<p><b>Address : </b>'.$row->address.'</p>
					<p><b>Password : </b>'.$row->password.'</p>
					<p><b>Mobile : </b> '.$row->mobile.' </p>
				</td>
			</tr>
			';
		}
		$output .= '</table>';
		return $output;
	}
}
?>