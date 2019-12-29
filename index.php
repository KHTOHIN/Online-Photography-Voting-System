<!DOCTYPE html>
<?php
require"connect.php";
?>
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
    </head>

    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
            <div class="container">
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
                <div class="collapse navbar-collapse" id="navigation" data-nav-image="img/blurred-image-1.jpg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" href="#myModal">
                                <i class="fa fa-trophy fa-2x"></i>
                                <p>Winners</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" href="#myModal">
                                <i class="now-ui-icons files_paper"></i>
                                <p>Articles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" href="#myModal">
                                <i class="fa fa-eye fa-2x"></i>
                                <p>Exhibitions</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="img/blurred-image-1.jpg">
                    <ul class="navbar-nav">
                        <form class="navbar-form navbar-right" action="/action_page.php">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="signup-page.php">
                                <i class="fa fa-user-plus fa-2x"></i>
                                <p> Sign Up</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login-page.php">
                                <i class="fa fa-sign-in fa-2x"></i>
                                <p> Login</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Modal for Login First -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Sorry</h4>
                    </div>
                    <div class="modal-body">
                        <p>Please Login first.....</p>
                        <p>Please click the Sign up Button for open an account or already have a account then click the Login Button.....</p>
                    </div>
                    <div class="modal-footer">
                        <a href="login-page.php" class="btn btn-default">Login</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="page-header clear-filter" filter-color="orange">
                <div class="page-header-image" data-parallax="true" style="background-image: url('img/Photography.jpeg');">
                </div>
                <div class="container">
                    <div class="content-center brand">
                        <img class="n-logo" src="img/now-logo.png" alt="">
                        <h1 class="h1-seo" style="padding-bottom: 60px;">Nameless</h1>
                    </div>
                    <h6 class="category category-absolute">Get your photos exhibited in galleries around the world.</h6>
                </div>
            </div>
            <div class="main">
                <div class="section section-images">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-images-container">
                                    <img src="img/hero-image-1.png" alt="">
                                </div>
                                <div class="hero-images-container-1">
                                    <img src="img/hero-image-2.png" alt="">
                                </div>
                                <div class="hero-images-container-2">
                                    <img src="img/hero-image-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="carousel">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block" src="img/bg1.jpg" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5></h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block" src="img/bg3.jpg" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5></h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block" src="img/bg4.jpg" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab pan  -->
                <div class="section section-tabs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-8 col-xl-6 ml-auto mr-auto">
                                <p class="category">Last Week Winner</p>
                                <!-- Nav tabs -->
                                <div class="card">
                                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#first" role="tab">
                                                <i class="fa fa-trophy"></i> win
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="card-body">
                                        <!-- Tab panes -->
                                        <div class="tab-content text-center">
                                            <div class="tab-pane active" id="first" role="tabpanel">
												<?php
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
												<div class="row">
													<h5 class="display-4"><?php echo $result['Name']; ?></h5>
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
                            <div class="col-md-10 col-lg-8 col-xl-6 ml-auto mr-auto">
                                <p class="category">Recent photo challenges</p>
                                <!-- Tabs with Background on Card -->
                                <div class="card">
                                    <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                        <?php
                                        $sql = "select * from contest";
                                        $r = mysqli_query($link, $sql);
                                        $cnt = 0;
                                        while ($result = mysqli_fetch_array($r)) {
                                            ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if ($cnt === 0) echo " active"; ?>" data-toggle="tab" href="#contest<?php echo ++$cnt; ?>" role="tab"><?php echo $result['Name']; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <div class="card-body">
                                        <!-- Tab panes -->
                                        <div class="tab-content text-center">
                                            <?php
                                            $sql = "select * from contest";
                                            $r = mysqli_query($link, $sql);
                                            $cnt = 0;
                                            while ($result = mysqli_fetch_array($r)) {
                                                $cnt++;
                                                ?>
                                                <div class="tab-pane <?php if ($cnt === 1) echo " active"; ?>" id="contest<?php echo $cnt; ?>" role="tabpanel">
                                                    <p><?php echo $result['Rules']; ?></p>
													<h5><?php echo $result['price']; ?>$</h5>
                                                </div>

                                            <?php } ?> 
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tabs on plain Card -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Section Tabs -->           
                <div class="section section-signup" style="background-image: url('img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
                    <div class="container">
                        <div class="row">
                            <div class="tab-content gallery">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="col-md-10 ml-auto mr-auto">
                                        <div class="row collections">
                                            <div class="col-md-3">
                                                <img src="img/bg1.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg3.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg4.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg5.jpg" alt="" class="img-raised">
                                            </div>
                                            <h3 style="color:transparent">AAAAAA</h3>
                                            <div class="col-md-3">
                                                <img src="img/bg6.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg7.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg8.jpg" alt="" class="img-raised">
                                            </div>

                                            <div class="col-md-3">
                                                <img src="img/bg1.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg3.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg4.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg5.jpg" alt="" class="img-raised">
                                            </div>
                                            <h3 style="color:transparent">AAAAAA</h3>
                                            <div class="col-md-3">
                                                <img src="img/bg6.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg7.jpg" alt="" class="img-raised">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="img/bg8.jpg" alt="" class="img-raised">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="section section-download" id="#download-section" data-background-color="black">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="text-center col-md-12">
                                <a target="_blank" href="#" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a target="_blank" href="#" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a target="_blank" href="#" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a target="_blank" href="#" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                                    <i class="fa fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Footer -->
            <footer class="footer" data-background-color="black">
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
    <script type="text/javascript">
                            $(document).ready(function () {
                                nowuiKit.initSliders();
                            });

                            function scrollToDownload() {

                                if ($('.section-download').length != 0) {
                                    $("html, body").animate({
                                        scrollTop: $('.section-download').offset().top
                                    }, 1000);
                                }
                            }
    </script>

</html>