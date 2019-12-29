<!DOCTYPE html>
<?php
	require"connect.php";
	session_start();
	//session_destroy();
	//if(!isset($_SESSION))
	//	$_SESSION['id']=
	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$conpassword = $_POST['conpassword'];
		$sql="INSERT INTO `user`(`firstname`, `lastname`, `Email`, `password`, `type`) VALUES ('$fname','$lname','$email','$password','User')";
		
		if(mysqli_query($link, $sql))
		{
			$s="select id from user where Email='$email'";
			$result=mysqli_query($link,$s);
			$row=mysqli_fetch_assoc($result);
			$_SESSION['id']=$row['id'];
			header("location:compliteprofile-page.php");
		}
		else
		{
			echo "Problem";
		}
	}
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sign up</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
   <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fa fa-trophy" aria-hidden="true"></i>  Winners</a>
                    <a class="dropdown-item" href="#"><i class="now-ui-icons files_paper" aria-hidden="true"></i>  Articles</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-eye" aria-hidden="true"></i>  Exhibitions</a>
                </div>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="#" rel="tooltip" title="Online Photography Voting System" data-placement="bottom">
                    Nameless
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Back to Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header">
        <div class="page-header-image" style="background-image:url(img/874949.png)"></div>
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="">
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="img/now-logo.png" alt="">
                            </div>
                        </div>
						<div class="content">
							<div class="input-group form-group-no-border input-lg">
								<span class="input-group-addon">
									<i class="now-ui-icons users_circle-08"></i>
								</span>
								<input type="text" name="fname" class="form-control" placeholder="First Name..." required>
							</div>
							<div class="input-group form-group-no-border input-lg">
								<span class="input-group-addon">
									<i class="now-ui-icons text_caps-small"></i>
								</span>
								<input type="text" name="lname" placeholder="Last Name..." class="form-control" required>
							</div>
							<div class="input-group form-group-no-border input-lg">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
								<input type="text" name="email" class="form-control" placeholder="Email..." required>
							</div>
							<div class="input-group form-group-no-border input-lg">
								<span class="input-group-addon">
									<i class="fa fa-key"></i>
								</span>
								<input type="password" name="password" placeholder="Password..." class="form-control" required>
							</div>
							<div class="input-group form-group-no-border input-lg">
								<span class="input-group-addon">
									<i class="fa fa-key"></i>
								</span>
								<input type="password" name="conpassword" placeholder="Confirm Password..." class="form-control" required>
							</div>
							
							<div class="footer text-center" style="padding-top: 0px;">
								<input class="btn btn-primary btn-round" type="submit" name='submit' style="padding-left: 100px;padding-right: 100px;" value="Sign up">
							</div>
						</div>
                        <div class="pull-left">
                            <h6>
                                <a href="login-page.php" class="link">Already have an account?</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#pablo" class="link">Need Help?</a>
                            </h6>
                        </div>
                    </form>
					
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="#" target="_blank">Nameless</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>