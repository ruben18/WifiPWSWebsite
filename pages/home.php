<!DOCTYPE html>
<html lang="en">
<?php require_once("bd.php"); ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website with wifi passwords">
    <meta name="author" content="Ruben Santos">

    <title>Wifi Passwords</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/ef03940515.js"></script>

</head>

<body>
	<?php
		session_start();
		if(!isset($_SESSION['login'])){
			header('location:../index.php');
		}
	?>
    <div id="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href=""><i class="fa fa-wifi" aria-hidden="true"></i></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav">
							<li class="active"><a href="">Home <span class="sr-only">(current)</span></a></li>
						  </ul>
						  
						  <ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['login']?> <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="logout.php">Logout</a></li>
							  </ul>
							</li>
						  </ul>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Networks</h4>
						</div>
						<div class="panel-body">
							<table class="table table-collapse">
								<thead>
									<tr>
										<th>SSID</th>
										<th>Authentication</th>
										<th>Password</th>
									</tr>
								</thead>
								<tbody>
								<?php
								$sql = "SELECT * FROM networks";
								$result = $link->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) { ?>
									<tr>
										<td><?=$row["ssid"]?></td>
										<td><?=$row["authentication"]?></td>
										<td><?=$row["password"]?></td>
									</tr>
									<?php
									}
								}?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php mysqli_close($link); ?>

<script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
