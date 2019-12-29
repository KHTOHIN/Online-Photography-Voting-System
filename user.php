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
    <link href="css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="demo/demo.css" rel="stylesheet" />
	<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
</head>
<?php
	require"connect.php";
	session_start();
	$id = $_SESSION['id'];
	if(isset($_POST['submit']))
	{		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$zip=$_POST['zip'];
		$nid=$_POST['nid'];
		$address=$_POST['address'];
		$about=$_POST['about'];
		$sql="UPDATE `user` SET `FirstName`='$fname',`LastName`='$lname',`Email`='$email',`Address`='$address',`Zip`='$zip',`Phone`='$phone',`NID`='$nid',
		`About`='$about' WHERE id='$id'";
		if(mysqli_query($link, $sql))
		{
			?>
            <script>$(document).ready(function () {
                                        $('#exampleModalCenter').modal('show');
                                    });</script>
            <?php
		}
		else
		{
			echo "Problem". mysqli_error($link);
		}  
	}
	elseif (isset($_POST['picture'])) {

        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $sql = "UPDATE `user` SET `Profilepic`='$file' WHERE id='$id'";
        if (mysqli_query($link, $sql)) {
            ?>
            <script>$(document).ready(function () {
                                        $('#exampleModalCenter').modal('show');
                                    });</script>
            <?php
        } else {
            echo "Problem" . mysqli_error($link);
        }
    }
	$sql="select * from user WHERE id='$id'";
	$r=mysqli_query($link,$sql);
	$result=mysqli_fetch_array($r);
?>
<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Nameless
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="admin.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="contest.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Manage Contest</p>
                        </a>
                    </li>
                    <li>
                        <a href="manage.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Manage Admin</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="user.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
					<li>
                        <a href="index.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Log-out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">User Profile</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
									<div class="row">
										<div class="col-md-6 pr-1">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" name="fname" value="<?php echo $result['FirstName']; ?>" class="form-control" placeholder="First Name">
											</div>
										</div>
										<div class="col-md-6 pl-1">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" name="lname" value="<?php echo $result['LastName']; ?>" class="form-control" placeholder="Last Name">
											</div>
										</div>
										<div class="col-md-6 pr-1">
											<div class="form-group">
												<label>Email</label>
												<input type="text" name="email" value="<?php echo $result['Email']; ?>" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="col-md-6 pl-1">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" name="phone" value="<?php echo $result['Phone']; ?>" class="form-control" placeholder="Phone">
											</div>
										</div>
										<div class="col-md-6 pr-1">
											<div class="form-group">
												<label>Zip</label>
												<input type="text" name="zip" value="<?php echo $result['Zip']; ?>" class="form-control" placeholder="Zip">
											</div>
										</div>
										<div class="col-md-6 pl-1">
											<div class="form-group">
												<label>NID</label>
												<input type="text" name="nid" value="<?php echo $result['NID']; ?>" class="form-control" placeholder="National ID">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" name="address" value="<?php echo $result['Address']; ?>" class="form-control" placeholder="Home Address">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>About Me</label>
												<input type="text" name="about" value="<?php echo $result['About'];?>" class="form-control" placeholder="Here can be your description">
											</div>
										</div>
									</div>
									<input class="btn btn-primary btn-round" type="submit" name="submit" style="padding-left: 80px;padding-right: 80px;" value="Save">		
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="img//bg5.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $result['Profilepic'] );?>" alt="...">
                                        <h5 class="title"><?php echo $result['FirstName'];echo " ";echo $result['LastName'];?></h5>
                                    </a>
                                    <p class="description">
                                        <?php echo $result['Email'];?>
                                    </p>
									<a href="" data-toggle="modal" data-target="#profilepicture" class="btn btn-primary btn-round btn-md">Change Profile Pic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="modal fade" id="profilepicture" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<form class="form" action="" method="POST" enctype="multipart/form-data">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Change Profile Picture</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" placeholder="First Name">
                                        <input class="btn btn-defalt" type="submit" name="picture"  value="Update Profile Pic">
                                    </div>
                                </div>
                            </div>
						</div>
						<div class="modal-footer">
							<input class="btn btn-primary btn-round" type="submit" name="picture" value="Update Profile Pic">
						</div>
					</form>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Sussefully Update.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
			
            <footer class="footer">
                <div class="container-fluid">
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
                        <a href="" target="_blank">Nameless</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="js/core/jquery.min.js"></script>
<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>
<script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="demo/demo.js"></script>

</html>
