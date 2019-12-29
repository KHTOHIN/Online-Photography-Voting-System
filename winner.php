<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" href="img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Nameless</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="css/demo.css" rel="stylesheet" />
        <script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    </head>

    <?php
    require"connect.php";
    session_start();
	$id = $_SESSION['id'];
	
	$sql="select * from result";
	$r = mysqli_query($link, $sql);
    $result = mysqli_fetch_array($r);
	$userid=$result['uid'];
	$userpid=$result['pid'];
	
	$sqluser="select * from user where id='$userid'";
	$ruser = mysqli_query($link, $sqluser);
    $resultuser = mysqli_fetch_array($ruser);
	
	$sqlpic="select * from photo where pid='$userpid'";
	$rpic = mysqli_query($link, $sqlpic);
    $resultpic = mysqli_fetch_array($rpic);
    ?>

    <body class="template-page sidebar-collapse">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top " color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" rel="tooltip" title="Online Photography Voting System" data-placement="bottom" target="_blank">
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
                            <a class="nav-link" href="afterlogin.php">
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">
                                <p>Go to Profile</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        


        <div class="wrapper">
			<div class="section" style="background-color: gray;">
			
				<div class="jumbotron">
					<h1 class="display-4"><?php echo $result['Name']; ?></h1>
					<div class="container">
						<div class="row">
							<h3><i class="fa fa-trophy"></i> Winner</h3>
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<h3></i> <?php echo $resultuser['FirstName'];echo " "; echo $resultuser['LastName'];?></h3>
										<h6><?php echo $result['Price']; ?>$</h6>
									</div>
									<div class="col-md-6">
										<div class="thumbnail">
											<a class="lightbox" href="">
												<p><?php echo $resultpic['about']; ?></p>
												<img class="img-responsive" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($resultpic['photo']); ?>" alt="Park" style="display: block;max-width: 100%;height: inherit;">
											</a>
											<div class="caption">
												<p><?php echo $result['vote']; ?> VOTE</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul>
                            <li>
                                <a href="">
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
                        <a href="">Nameless</a>.
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