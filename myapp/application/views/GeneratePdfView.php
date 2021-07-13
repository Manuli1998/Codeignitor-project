<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Create PDF from View in CodeIgniter Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assests/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../assests/css/main.css">
    <script src="../../assests/js/jquery-3.5.1.js"></script>
    <script src="../../assests/js/main.js"></script>
    <script src="../../assests/js/bootstrap.js"></script>
	<script src="bootstrap.bundle.min.js / bootstrap.bundle.js"></script>
	
</head>
<body>
<nav class="navbar navbar-dark bg-success navbar-expand-md">
        <a class="navbar-brand" href="#"><img src="../../assests/images/2.jpg" width='100' height='75'></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">     
            <span class="navbar-toggler-icon"></span>  
        </button>
        <center>
            <b><font size="5" color="black">
           Tzu-Chi</br> Organization</font></b></center>
        <div class="collapse navbar-collapse" id="main-navigation">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/myapp/index.php/home/homeview">
                        <font size="5">Home</font>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/myapp/index.php/About/aboutus">
                        <font size="5">About Us</font>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/myapp/index.php/registration/savedata">
                        <font size="5">Register</font>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/myapp/index.php/GeneratePdfController/index">
                        <font size="5">Download</font>
                    </a>
                </li>
                <li class="nav-item">
                <div class="dropdown show">
                    <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <font size="4">Users</font>
                    </a>

                    <div class="dropdown-menu bg-success" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item " href="http://localhost/myapp/index.php/display/dispdata">View</a>
                        <a class="dropdown-item" href="#">Update</a>
                        <a class="dropdown-item" href="http://localhost/myapp/index.php/display/dispdata">Delete</a>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
	</nav>&nbsp
	
<div class="container box">
		<h2 class="text-center text-danger">Volunteers</h3>
		<br />
		
			<table class="table table-hover table-dark" width="1200" height="600" border="1" cellspacing="10" cellpadding="10" color="green">

				<tr class="bg-primary">
					<th>Name</th>
					<th>Create a PDF</th>
				</tr>
			<?php
			foreach($customer_data->result() as $row)
			{
				echo '
				<tr>
					<td>'.$row->name.'</td>

					<td><a class="btn btn-success" href="'.base_url().'GeneratePdfController/pdfdetails/'.$row->id.'">Generate PDF</a></td>
				</tr>
				';
			}
			?>
			</table>
		
	</div>
</body>
</html>