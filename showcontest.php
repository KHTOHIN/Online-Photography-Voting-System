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
    $sql = "select * from contest";
    $r = mysqli_query($link, $sql);
    $result = mysqli_fetch_array($r);
    $cid = $result['cid'];

    if (isset($_POST['submit'])) 
	{
		$sqll="select * from contastent where cid='$cid' and uid='$id'";
		if($r=mysqli_query($link,$sqll))
		{
			if(mysqli_num_rows($r)>0)
			{
				
				echo"<script>alert('You are Alredy joined.')</script>";
			}
			else
			{
				$sql = "INSERT INTO `contastent`(`cid`, `uid`) VALUES ('$cid','$id')";
				if (mysqli_query($link, $sql)) {
					?>
					<script>$(document).ready(function () 
					{
							$('#myModal').modal('show');
					});</script>
					<?php
				} else {
					echo "Problem" . mysqli_error($link);
				}
			}
		}
		else echo"<script>alert('error :".mysqli_error($link)."')</script>";
    }
    if (isset($_POST['psubmit'])) {
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $about = $_POST['about'];
        $sql = "INSERT INTO `photo`(`photo`, `about`, `uid`, `cid`) VALUES ('$file','$about','$id','$cid')";
        if (mysqli_query($link, $sql)) {
            ?>
            <script>
                $(document).ready(function () {
                    $('#exampleModalCenter').modal('show');
                });
            </script>
            <?php
        } else {
            echo"<script>alert('Problems Photo Upload :" . mysqli_error($link) . "')</script>";
        }
    } else {
        
    }
    $sql = "select * from contest";
    $r = mysqli_query($link, $sql);
    $result = mysqli_fetch_array($r);
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
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form" action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Please Upload Photo</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>1st Photo</label>
                                        <input type="file" name="image" class="form-control">
										<br>
                                        <input type="text" name="about" class="form-control" placeholder="About Something........">
										<br>
                                        <input class="btn btn-primary btn-round" type="submit" name="psubmit" value="Upload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Photo Update Susessfully.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="section" style="background-color: gray;">
				
				<?php
					$sql = "select * from contest";
					$r = mysqli_query($link, $sql);
					$cnt = 0;
					while ($result = mysqli_fetch_array($r)) {
						$cnt++;
				?>
				<div class="jumbotron">
						<h1 class="display-3"><?php echo $result['Name']; ?></h1>
						<p class="lead"><?php echo $result['Rules']; ?></p>
						<hr class="my-4">
						<h5><?php echo $result['price']; ?>$</h5>
						<h3>Start from <?php echo $result['Sdate'];?></h3>
						<p>To</p>
						<h4>Result <?php echo $result['Edate'];?></h4>
						<p class="lead">
						<form action="" method="POST">
							<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Join">
						</form>
						</p>
				</div>
				<?php } ?> 
                
				
				
                
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