<?php

error_reporting(0);
session_start();

include "Connection.php";

$P_CODE = '';
$P_NAME = '';
$id = 0;
$P_UPDATE = false;

$Prev_Value = '';


if (isset($_POST['save'])) {
	$P_CODE = utf8_encode($_POST['code']) ;
	$P_NAME = utf8_encode($_POST['name']) ;
	// $P_NAME = mb_convert_encoding($_POST['name'], 'UTF-16LE', 'UTF-8') ;

	

	$sql = "INSERT INTO TEST.NC_MJR_CAT_MST(MJR_CODE, MJR_DESC) VALUES('$P_CODE', '$P_NAME')";

	$parseresults = ociparse($conn, $sql);
	ociexecute($parseresults);
}


if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;

	$Prev_Value = $_GET['edit'];
	$result = "select MJR_CODE, MJR_DESC from TEST.NC_MJR_CAT_MST where MJR_CODE=" . $_GET['edit'];

	$parseresults = ociparse($conn, $result);
	ociexecute($parseresults);

	if (count($result) == 1) {

		while ($row = oci_fetch_assoc($parseresults)) {
			$P_CODE = utf8_encode($row['MJR_CODE']);
			$P_NAME = utf8_encode($row['MJR_DESC']);
		}
	}
}


if (isset($_POST['update'])) {
	// $id = $_POST['id'];
	$P_CODE = $_POST['code'];
	$P_NAME = $_POST['name'];



	if ($P_CODE != $Prev_Value) {
		$sql = "INSERT INTO TEST.NC_MJR_CAT_MST(MJR_CODE, MJR_DESC) VALUES('$P_CODE', '$P_NAME')";
	} else {
		$sql = "UPDATE TEST.NC_MJR_CAT_MST SET MJR_CODE='" . $P_CODE . "', MJR_DESC='" . $P_NAME . "' WHERE MJR_CODE='" . $P_CODE . "'";
		// $sql = "UPDATE TEST.NC_MJR_CAT_MST SET MJR_CODE='$P_CODE', MJR_DESC='$P_NAME' WHERE MJR_CODE=".$P_CODE;
	}
	$parseresults = ociparse($conn, $sql);
	ociexecute($parseresults);

	header("location: crud1.php");
}

oci_free_statement($parseresults);
oci_close($conn);

?>

<!doctype html>
<html lang="en">

<head>
	<link rel="icon" href="./image/icon.ico" type="image/ico">
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>CRUD</title>


	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;


		}

		html {
			font-size: 62.5%;

		}

		.logo {
			float: right;
		}

		.note {
			text-align: center;
			height: 15%;
			background: -webkit-linear-gradient(left, #0072ff, #8811c5);
			color: #fff;
			font-weight: bold;
			line-height: 80px;
		}

		.select {
			border: 1px solid;
			padding: 10px;
			box-shadow: 5px 10px #888888;
		}

		.mar_top {
			margin-top: 10px !important;
		}

		table tr {
			text-align: center;
		}
	</style>
</head>

<body>


	<!-- header starts  -->

	<div class="note">

		<legend>
			<center>
				<div class="row">

					<div class="col-md-2" style="padding-right: 0!important;">
						<img class=" mt-2 mb-2 logo" src="./image/Logo.png" alt="BPDB" height="80px" width="80px">
					</div>

					<div class="col-md-8 mt-4">
						<center>
							<h1><b>বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড</b></h1>

						</center>
					</div>
					<div class="col-md-2"></div>

				</div>
			</center>
		</legend>
	</div>
	<!-- header ends  -->


	<!-- input field starts  -->

	<div class="container select">
		<div class="row justify-content-center">
			<form class="form-inline" action="" method="POST">

				<!-- code no. starts  -->
				<div class="form-group">
					<label class="control-label col-sm-2" id="code" for="code"> Code: </label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="code" id="code" value="<?php echo $P_CODE; ?>" placeholder="Enter code no. ">
					</div>
				</div>
				<!-- code no. ends  -->

				<!-- code description starts  -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" value="<?php echo $P_NAME; ?>" placeholder="Enter name">
					</div>
				</div>
				<!-- code description ends  -->

				<!-- save/update button starts  -->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<?php
						if ($update) { ?>
							<button type="submit" class="btn btn-primary" name="update">Update</button>
						<?php } else { ?>

							<button type="submit" class="btn btn-success" name="save">Save</button>
						<?php } ?>
					</div>
				</div>
				<!-- save/update button ends  -->
			</form>
		</div>
	</div>

	<!-- input field ends  -->


	<!-- show data starts  -->
	<div class="container mar_top">
		<div class="row justify-content-center">
			<table class="table" style="width: 40%;">
				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php
					include "Connection.php";

					$sql = "select MJR_CODE, MJR_DESC from TEST.NC_MJR_CAT_MST";
					$parseresults = ociparse($conn, $sql);
					ociexecute($parseresults);

					while ($row = oci_fetch_assoc($parseresults)) { ?>
						<tr>
							<td><?php echo utf8_decode($row['MJR_CODE']);   ?></td>
							<td><?php echo  utf8_encode($row['MJR_DESC']);  ?></td>
							<td>
								<a href="crud1.php?edit=<?php echo $row["MJR_CODE"]; ?>" class="btn btn-info">Edit</a>

							</td>
						</tr>

					<?php }

					oci_free_statement($parseresults);
					oci_close($conn);
					?>

				</tbody>
			</table>
		</div>
	</div>
	<!-- show data ends  -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>