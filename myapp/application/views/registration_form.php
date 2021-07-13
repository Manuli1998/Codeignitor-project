<!doctype html>
<html>
<head>
	<title>Volunteer Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

</head>
 
<style>
 
 body {
        background-image: url('../../assests/images/bg3.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
);
            }
.custom-bottom-margin{
	padding-bottom:30px;
}
 
.error-msg{
	margin:5px auto;
	width:30%;
	background:#db3737;
	color:#ffffff;
}
</style>
<body >
	
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2><font color="Purple">Registration Form</font></h2>
		</div>
  </div>
  <button onclick="document.location='http://localhost/myapp/index.php/home/homeview'" class="btn btn-primary">Home</button>

	<div class="row">
		
			
			
			<form method="post">
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="name">Full Name</label>
					<div class="col-sm-5">
					  <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" >
					</div>
				</div>
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="email">Email</label>
					<div class="col-sm-5">
					  <input type="email" name="email" class="form-control" value="<?php echo set_value('email');?>">
					</div>
				</div>
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="address">Permanent Address</label>
					<div class="col-sm-5">
					  <input type="text"  name="address" class="form-control" value="<?php echo set_value('address');?>">
					</div>
				</div>
				
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="password">Password</label>
					<div class="col-sm-5">
					  <input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>">
					</div>
				</div>
				
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="mobile">Mobile Number</label>
					<div class="col-sm-5">
					  <input type="text" name="mobile" class="form-control" value="<?php echo set_value('mobile');?>">
					</div>
				</div>
				
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right"></label>
					<div class="col-sm-5">
					  <input type="submit" name="save" value="Submit" class="btn btn-primary">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <button class="btn btn-primary" type="reset"> Reset</button>
					</div>

					  
					
				</div>
				
				
			</form>
		</div>
	</div>
</div>	</br></br>
<div class="col-md-6">
        <img src="../../assests/images/v1.png" width="500" class="img-fluid">
     </div>
     <div class="col-md-6">
        <img src="../../assests/images/v5.png" width="640" class="img-fluid">
     </div>
     
</body>
 
</html>