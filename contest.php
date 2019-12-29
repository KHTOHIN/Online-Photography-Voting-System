<!DOCTYPE html>
<?php
	require"connect.php";
	session_start();
	$id = $_SESSION['id'];
	if(isset($_POST['submit']))
	{		
		$name=$_POST['name'];
		$rule=$_POST['rule'];
		$price=$_POST['price'];
		$sdate=$_POST['sdate'];
		$edate=$_POST['edate'];
		$sql="INSERT INTO `contest`(`Name`, `Rules`, `Sdate`, `Edate`, `uid`,`price`) VALUES ('$name','$rule','$sdate','$edate','$id','$price')";
		if(mysqli_query($link, $sql))
		{
			
		}
		else
		{
			echo "Problem". mysqli_error($link);
		}
	}
	$table = "select * from contest";
    $r = mysqli_query($link, $table);
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
    <link href="css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="" class="simple-text logo-normal">
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
                    <li class="active">
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
                    <li>
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
                        <a class="navbar-brand" href="#pablo">Contest</a>
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Contest</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Contest Name</label>
												<input type="text" name="name" class="form-control" placeholder="Name of New Contest">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Rules</label>
												<input type="text" name="rule" class="form-control" placeholder="Contest Rules">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Award</label>
												<input type="text" name="price" class="form-control" placeholder="Price Money">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 pr-1">
											<div class="form-group">
												<label>Start Date</label>
												<input type="text" name="sdate" class="form-control" placeholder="Year-Month-Day">
											</div>
										</div>
										<div class="col-md-6 pl-1">
											<div class="form-group">
												<label>End Time</label>
												<input type="text" name="edate" class="form-control" placeholder="Year-Month-Day">
											</div>
										</div>
									</div>
									<input class="btn btn-primary btn-round" type="submit" name="submit" style="padding-left: 100px;padding-right: 100px;" value="Save">
									<button class="btn btn-defalt btn-round" onclick="document.getElementById('myInput').value = ''">Clear input field</button>
                                </form>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Contest</h4>
                            </div>
                            <div class="card-body" style="padding-top: 25px;">
                                <form action="" method="POST">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Contest Number</label>
												<input type="text" name="no" id="no" class="form-control" placeholder="Contest ID">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Contest Name</label>
												<input type="text" name="cname" id="cname" class="form-control" placeholder="Contest Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Start Date</label>
												<input type="text" name="sdate" id="sdate" class="form-control" placeholder="Start Date">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>End Date</label>
												<input type="text" name="edate" id="edate" class="form-control" placeholder="End Date">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Award</label>
												<input type="text" name="award" id="award" class="form-control" placeholder="Award">
											</div>
										</div>
									</div>
									<input class="btn btn-primary btn-round" type="submit" name="modify" style="padding-left: 82px;padding-right: 82px;" value="Modify">
									<input class="btn btn-primary btn-round" type="submit" name="delete" style="padding-left: 82px;padding-right: 82px;" value="Delete">
									<br>
									<input class="btn btn-primary btn-round" type="submit" name="result" style="padding-left: 165px;padding-right: 165px;" value="Result Publish">
                                </form>
								<?php
									if (isset($_POST['modify'])) 
									{
										$no = $_POST['no'];
										$cname = $_POST['cname'];
										$sdate = $_POST['sdate'];
										$edate = $_POST['edate'];
										$award = $_POST['award'];
										$sql = "UPDATE `contest` SET `Name`='$cname',`Sdate`='$sdate',`Edate`='$edate',`price`='$award' WHERE cid='$no'";
										if (mysqli_query($link, $sql)) 
										{
											
										} 
										else 
										{
											echo "Problem" . mysqli_error($link);
										}
									}
									if (isset($_POST['delete'])) 
									{
										$no = $_POST['no'];
										$sql = "DELETE FROM `contest` WHERE cid = '$no'";
										if (mysqli_query($link, $sql)) 
										{
											
										} 
										else 
										{
											echo "Problem" . mysqli_error($link);
										}
									}
									if (isset($_POST['result'])) 
									{
										$no = $_POST['no'];
										$sql = "select pid from photo where cid='$no'";
										$r = mysqli_query($link, $sql);
										$pot=0;
										while ($result = mysqli_fetch_array($r))											
										{
                                            $sqlll = "select count(uid) from vote where pid='".$result['pid']."'";
											$r1 = mysqli_query($link, $sqlll);
											$cnt = 0;
											$pid=0;
											while ($result1 = mysqli_fetch_array($r1)) 
											{
												if($cnt<$result1[0]){$cnt=$result1[0];$pot=$result['pid'];}
											}
                                        }
										$sql2 = "select uid from photo where pid='$pot'";
										$result2=mysqli_query($link,$sql2);
										$row2=mysqli_fetch_assoc($result2);
										$us=$row2['uid'];
										$cname = $_POST['cname'];
										$award = $_POST['award'];
										$sql3 = "INSERT INTO `result`(`vote`, `uid`, `pid`,`Name`,`Price`) VALUES ('$cnt','$us','$pot','$cname','$award')";
										if (mysqli_query($link, $sql3))
										{
											echo"<script>alert('Hello')</script>";
										}
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contest</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover" id="table">
									<thead class="thead-dark" style="background-color: #f96332;">
										<tr>
											<th scope="col">#SL</th>
											<th scope="col">Contest Name</th>
											<th scope="col">Start Date</th>
											<th scope="col">End Date</th>
											<th scope="col">Award</th>
										</tr>
									</thead>
									<tbody>
									
										<?php
											while($result = mysqli_fetch_assoc($r))
											{
										?>
												<tr>
													<th scope="row"><?php echo $result['cid'];?></th>
													<td><?php echo $result['Name'];?></td>
													<td><?php echo $result['Sdate'];?></td>
													<td><?php echo $result['Edate'];?></td>
													<td><?php echo $result['price'];?>$</td>
												</tr>
										<?php
											}
										?>
									</tbody>
								</table>
								<script>
									var table = document.getElementById('table');
									for(var i = 1; i < table.rows.length; i++)
									{
										table.rows[i].onclick = function()
										{
											 //rIndex = this.rowIndex;
											 document.getElementById("no").value = this.cells[0].innerHTML;
											 document.getElementById("cname").value = this.cells[1].innerHTML;
											 document.getElementById("sdate").value = this.cells[2].innerHTML;
											 document.getElementById("edate").value = this.cells[3].innerHTML;
											 document.getElementById("award").value = this.cells[4].innerHTML;
										};
									}
						
								</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="http://presentation.creative-tim.com">
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
