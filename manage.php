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
	if (isset($_POST['Modify'])) 
	{
		$email=$_POST['email'];
		//echo"<script>alert('".$email."')</script>";
		$sql="select * from user where email='".$email."'";
		$result=mysqli_query($link,$sql);
		if(mysqli_num_rows($result)==1)
		{
			$s="select type from user where Email='$email'";
			$result=mysqli_query($link,$s);
			$row=mysqli_fetch_assoc($result);
			$k=$row['type'];
			if($k==='Admin')
			{
				?>
					<script>$(document).ready(function () {
					$('#admin').modal('show');
					});</script>
				<?php
			}
			if($k==='User')
			{
				$a="UPDATE `user` SET `Type`='Admin' where Email='$email'";
				$resulta=mysqli_query($link,$a);
				if (mysqli_query($link, $resulta))
				{
					?>
						<script>$(document).ready(function () {
						$('#user').modal('show');
						});</script>
					<?php
				}
				
			}
			if($k==='Block')
			{
				?>
					<script>$(document).ready(function () {
					$('#block').modal('show');
					});</script>
				<?php
			}
		}
	}
	if (isset($_POST['Block'])) 
	{
		$no = $_POST['no'];
		$sql = "UPDATE `user` SET `Type`='Blocked' WHERE Email='$email'";
		if (mysqli_query($link, $sql)) 
		{
			
		} 
		else 
		{
			echo "Problem" . mysqli_error($link);
		}
	}
	$table = "select * from user where type='admin'";
    $r = mysqli_query($link, $table);
	
	$table2 = "select * from user where type='user'";
    $r2 = mysqli_query($link, $table2);
?>
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
					<li>
                        <a href="contest.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Manage Contest</p>
                        </a>
                    </li>
                    <li class="active">
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
        </div>*/
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
                        <a class="navbar-brand" href="#pablo">Manage Admin</a>
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
			<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							This User already Admin.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							New Admin Creation Done. Thank You.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="block" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							ImPossible. because This This is a Block User.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ADD ADMIN</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" name="name" class="form-control" placeholder="First Name.....">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" name="name" class="form-control" placeholder="Last Name.....">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Email</label>
												<input type="text" name="rule" class="form-control" placeholder="Email.....">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" name="price" class="form-control" placeholder="Address.....">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 pr-1">
											<div class="form-group">
												<label>Zip Code</label>
												<input type="text" name="sdate" class="form-control" placeholder="Zip Code.....">
											</div>
										</div>
										<div class="col-md-6 pl-1">
											<div class="form-group">
												<label>Nid</label>
												<input type="text" name="edate" class="form-control" placeholder="Nid.....">
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
                                <h4 class="card-title">MANAGE ADMIN</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" name="fname" id="fname" class="form-control" placeholder="First Name.....">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name.....">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Email</label>
												<input type="text" name="email" id="email" class="form-control" placeholder="Email.....">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Zip</label>
												<input type="text" name="zip" id="zip" class="form-control" placeholder="Zip.....">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" name="phone" id="phone" class="form-control" placeholder="Phone.....">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" name="address" id="address" class="form-control" placeholder="Address.....">
											</div>
										</div>
									</div>
									<input class="btn btn-primary btn-round" type="submit" name="Modify" style="padding-left: 82px;padding-right: 82px;" value="Admin">
									<input class="btn btn-primary btn-round" type="submit" name="Block" style="padding-left: 82px;padding-right: 82px;" value="Block">
                                </form>
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
                                <h4 class="card-title">Admin</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover" id="table">
									<thead class="thead-dark" style="background-color: #f96332;">
										<tr>
											<th scope="col">Profile Pic</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Email</th>
											<th scope="col">Zip</th>
											<th scope="col">Phone</th>
											<th scope="col">Address</th>
										</tr>
									</thead>
									<tbody>
									
										<?php
											while($result = mysqli_fetch_assoc($r))
											{
										?>
												<tr>
													<th scope="row"><img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($result['Profilepic']); ?>" alt="" class="rounded-circle" height="30" width="30"></th>
													<td><?php echo $result['FirstName'];?></td>
													<td><?php echo $result['LastName'];?></td>
													<td><?php echo $result['Email'];?></td>
													<td><?php echo $result['Zip'];?></td>
													<td><?php echo $result['Phone'];?></td>
													<td><?php echo $result['Address'];?></td>
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
											 document.getElementById("fname").value = this.cells[1].innerHTML;
											 document.getElementById("lname").value = this.cells[2].innerHTML;
											 document.getElementById("email").value = this.cells[3].innerHTML;
											 document.getElementById("zip").value = this.cells[4].innerHTML;
											 document.getElementById("phone").value = this.cells[5].innerHTML;
											 document.getElementById("address").value = this.cells[6].innerHTML;
										};
									}
						
								</script>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover" id="table2">
									<thead class="thead-dark" style="background-color: #f96332;">
										<tr>
											<th scope="col">Profile Pic</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Email</th>
											<th scope="col">Zip</th>
											<th scope="col">Phone</th>
											<th scope="col">Address</th>
										</tr>
									</thead>
									<tbody>
									
										<?php
											while($result2 = mysqli_fetch_assoc($r2))
											{
										?>
												<tr>
													<th scope="row"><img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($result2['Profilepic']); ?>" alt="" class="rounded-circle" height="30" width="30"></th>
													<td><?php echo $result2['FirstName'];?></td>
													<td><?php echo $result2['LastName'];?></td>
													<td><?php echo $result2['Email'];?></td>
													<td><?php echo $result2['Zip'];?></td>
													<td><?php echo $result2['Phone'];?></td>
													<td><?php echo $result2['Address'];?></td>
												</tr>
										<?php
											}
										?>
									</tbody>
								</table>
								<script>
									var table = document.getElementById('table2');
									for(var i = 1; i < table.rows.length; i++)
									{
										table.rows[i].onclick = function()
										{
											 document.getElementById("fname").value = this.cells[1].innerHTML;
											 document.getElementById("lname").value = this.cells[2].innerHTML;
											 document.getElementById("email").value = this.cells[3].innerHTML;
											 document.getElementById("zip").value = this.cells[4].innerHTML;
											 document.getElementById("phone").value = this.cells[5].innerHTML;
											 document.getElementById("address").value = this.cells[6].innerHTML;
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
