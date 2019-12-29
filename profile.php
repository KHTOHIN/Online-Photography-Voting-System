<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" href="img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Profile</title>
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


    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $zip = $_POST['zip'];
        $nid = $_POST['nid'];
        $address = $_POST['address'];
        $about = $_POST['about'];
        $sql = "UPDATE `user` SET `FirstName`='$fname',`LastName`='$lname',`Email`='$email',`Address`='$address',`Zip`='$zip',`Phone`='$phone',`NID`='$nid',
		`About`='$about' WHERE id='$id'";
        if (mysqli_query($link, $sql)) {
            ?>
            <script>$(document).ready(function () {
                                        $('#exampleModalCenter').modal('show');
                                    });</script>
            <?php
        } else {
            echo "Problem" . mysqli_error($link);
        }
    } elseif (isset($_POST['psubmit'])) {

        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $fname = $_POST['fname'];
        $sql = "UPDATE `user` SET `Profilepic`='$file' WHERE id='$id'";
        if (mysqli_query($link, $sql)) {
            echo "Updated";
        } else {
            echo "Problem" . mysqli_error($link);
        }
    }

    $sql = "select * from user WHERE id='$id'";
    $r = mysqli_query($link, $sql);
    $result = mysqli_fetch_array($r);
    ?>

    <body class="profile-page sidebar-collapse">
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
                        <a class="dropdown-header"><i class="fa fa-user" aria-hidden="true"></i>  My profile</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i>  Account settings</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-users" aria-hidden="true"></i>  Invite friends</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Sign out</a>
                    </div>
                </div>
                <div class="navbar-translate">
                    <a class="navbar-brand" href="#" rel="tooltip" title="Online Photography Voting System" data-placement="bottom" target="_blank">
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
                            <a class="nav-link" href="afterlogin.php">Back to Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#myModal">Edit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chat with Admin</a>
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
                            <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Profile Pic</label>
                                        <input type="file" name="image" class="form-control" placeholder="First Name">
                                        <input class="btn btn-primary btn-round" type="submit" name="psubmit" style="padding-left: 145px;padding-right: 145px;" value="Update Profile Pic">
                                    </div>
                                </div>
                            </div>
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
                                        <input type="text" name="about" value="<?php echo $result['About']; ?>" class="form-control" placeholder="Here can be your description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary btn-round" type="submit" name="submit" style="padding-left: 80px;padding-right: 80px;" value="Save">
                            <button type="button" class="btn btn-default btn-round" data-dismiss="modal" style="padding-left: 80px;padding-right: 80px;">Close</button>
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
                        You profile are Sussefully Updated.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="page-header page-header-small" filter-color="orange">
                <div class="page-header-image" data-parallax="true" style="background-image: url('img/bg5.jpg');">
                </div>
                <div class="container">
                    <div class="content-center">
                        <div class="photo-container">
                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($result['Profilepic']); ?>" alt="">
                        </div>
                        <h3 class="title"><?php echo $result['FirstName'];echo " ";echo $result['LastName']; ?></h3>
                        <p class="category">Photographer</p>
                        <div class="content">
                            <div class="social-description">
                                <h2>46</h2>
                                <p>Vote</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="button-container">
                        <a href="#button" class="btn btn-primary btn-round btn-lg">Follow</a>
                        <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <h3 class="title">About me</h3>
                    <h5 class="description">I am a very simple man.</h5>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <h4 class="title text-center">My Portfolio</h4>
                        </div>
                        <!-- Galary -->
                    </div>
					<div>
						<?php
                            require"connect.php";
                            $sql = "select * from photo where uid='$id'";
                            $r = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($r)) {
                                ?>
                                <div class="col-md-6 ml-auto mr-auto">
                                    <div class="thumbnail">
                                        <a class="lightbox" href="">
                                            <img class="img-responsive" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['photo']); ?>" alt="Park" style="display: block;max-width: 100%;height: inherit;">
											<br>
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>
					</div>
                </div>
            </div>
            <footer class="footer footer-default">
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
                        <a href="https://www.creative-tim.com" target="_blank">Nameless</a>.
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <!--   Core JS Files   -->

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