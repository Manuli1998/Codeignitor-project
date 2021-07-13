<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tzu Chi Organization</title>
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
                    <a class="nav-link" href="#">
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
                        <a class="dropdown-item" href="http://localhost/myapp/index.php/display/dispdata">Update</a>
                        <a class="dropdown-item" href="http://localhost/myapp/index.php/display/dispdata">Delete</a>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <header class="page-header header container-fluid">
        <div class="overlay">
            <div class="description">
                <h1>Welcome to the Tzu-Chi Organization!</h1>
                <p style = "font-family:Verdana;"> Tzu Chi is an international humanitarian Volunteering organization with over 10 million members throughout 47 countries. Since 1966 we relieve the suffering of those in need, while creating a better world for all, through compassion, kindness,
                    and hope.
                </p>
                <a class="btn btn-outline-success btn-lg" href="http://localhost/myapp/index.php/about/aboutus" target="_self">Read More</a>
            </div>

        </div>
    </header>
    <div class="container features">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">
                    <b><font color="purple">Volunteering</font></b>
                </h3>
                <img src="../../assests/images/v3.jpg" class="img-fluid">
                <p class="text-justify" style = "font-family:Lucida Bright;"><b>Volunteering with Tzu-Chi Organization provides you the benefits of helping our people who are in Sri Lanka. You will be rewarded with valuable certificates which add colours to your life. Join us today!

                    </b>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">
                    <b> <font color="purple">Tzu-Chi Market</font></b>
                </h3>
                <img src="../../assests/images/m3.jpg" width="210" class="img-fluid">
                <p class="text-justify" style = "font-family:Lucida Bright;"><b>Tzu-Chi Market sells various recycling products and many other products which are valuable for everyone.Visit the place to buy something valuable for you while helping us. Quick Grab your product!
                </b></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">
                    <b><font color="purple">Donations</font></b>
                </h3>
                <img src="../../assests/images/d1.jpg" width="210" class="img-fluid">
                <p class="text-justify" style = "font-family:Lucida Bright;"><b>Your donations will make another person's life much easier. Contribute to this great communtiy service by joining us as a Donor. Joing us today and be a great community server!
                </b> </p>
            </div>
        </div>
    </div>
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