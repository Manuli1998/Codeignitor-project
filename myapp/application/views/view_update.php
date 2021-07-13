<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assests/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../assests/css/main.css">
    <script src="../../assests/js/jquery-3.5.1.js"></script>
    <script src="../../assests/js/main.js"></script>
    <script src="../../assests/js/bootstrap.js"></script>
    <script src="bootstrap.bundle.min.js / bootstrap.bundle.js"></script>
</head>

<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post"><center>&nbsp&nbsp&nbsp
<table class="table table-hover table-dark" width="500" height="500" border="1" cellspacing="10" cellpadding="10">

  <tr class="bg-info">
    <td>Enter Your Name </td>
    <td><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email" value="<?php echo $row->email; ?>"/></td>
  </tr>
  <tr>
  <tr>
    <td>Enter Your Address </td>
    <td><input type="text" name="address" value="<?php echo $row->address; ?>"/></td>
  </tr>
  <tr>
  <tr>
    <td>Enter Your Password </td>
    <td><input type="password" name="password" value="<?php echo $row->password; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="mobile" value="<?php echo $row->mobile; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update Records" class="btn btn-primary"/></td>
  </tr>
</table></center>
	</form>
	<?php } ?>
</body>
</html>