<!DOCTYPE html>
<html lang="en">
<?php require_once("bd.php"); ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   


    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
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
									<td><?php echo $row["ssid"]; ?></td>
									<td><?php echo $row["authentication"]; ?></td>
									<td><?php echo $row["password"]; ?></td>
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

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<?php mysqli_close($link); ?>

</body>

</html>
