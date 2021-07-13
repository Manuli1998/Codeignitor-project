<!DOCTYPE html>
<html>
<head>
<title>Display Users</title>
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
    </nav>




&nbsp<center>
<caption> <font size="6" color="green"><b>Volunteers</b></font></caption>&nbsp
<table class="table table-hover table-dark" width="1200" height="600" border="1" cellspacing="10" cellpadding="10" color="green">


<tr class="bg-info">
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Password</th>
    <th>Mobile</th>
    <th class="bg-danger">Delete</th>
    <th class="bg-success">Update</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->address."</td>";
  echo "<td>".$row->password."</td>";
  echo "<td>".$row->mobile."</td>";
  echo "<td ><a class='btn btn-danger' href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "<td><a class='btn btn-success' href='updatedata?id=".$row->id."'>Update</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</center>

</br></br>


<footer class="page-footer text-center">
        <div class="container">
            <div class="row">

                <div class="form-group">
                    <div class="col-lg-16 col-md-16 col-sm-12"></div>
                    <h3 class="feature-title">Contact us!</h3>
                    <div class="form-group"> <input type="text" class="form-control" placeholder="Name" name=""> </div>
                    <div class="form-group"> <input type="email" class="form-control" placeholder="Email Address" name="email"> </div>
                    <div class="form-group"> <textarea class="form-control" rows="4"></textarea> </div> <input type="submit" class="btn btn-success btn-block" value="Send" name="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12"></div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">
                        <font size="5"> Contact Details</br>
                        </font>
                    </h6>
                    <p>
                        <font color="white">Tzu Chi Foundation, Siribopura, 82100 Hambantota
                            <br/>info@tzuchiweb.com
                            <br/>+ 0472 222 362
                            <br/>+ 01 234 567 89 </font>
                    </p>
                    <br/>
                    <img src=../../assests/images/3.jpg width="100">
                </div>
            </div>
            <div class="footer-copyright text-center">© 2019 Copyright: Tzuchiweb.com
            </div>
        </div>
    </footer>
</body>
</html>
