<!DOCTYPE html>
<html>
<?php
require("../include/connection.php");
?>

<head>
	<meta charset="utf-8">
	<title>Tournament Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
	if (isset($_GET['m3']))
		echo $_GET['m3'];
	?>
	<form action="../include/teamreg.php" method="post">
		<div class="wrapper" style="background-image: url('images/bg-registration-form-3.jpg');">
			<div class="inner">
				<form action="">
					<h3>Registration Form <br>Valorant</br></h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Team Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" name="teamname" class="form-control" required>
							</div>
						</div>


						<div class="form-wrapper">
							<label for="">Select Tournament </label>
							<div class="form-holder select">
								<select name="dropdown" id="" class="form-control">
									<?php
									$list = mysqli_query($con, "select tour_name , reg_fee from tour_reg");
									while ($row_list = mysqli_fetch_assoc($list)) {
										echo "<option value=" . $row_list["tour_name"] . ">" . $row_list["tour_name"] . "</option>";
									}
									?>
								</select>
								<i class="zmdi zmdi-face"></i>
							</div>
						</div>
					</div>



					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Player 1 Name(Leader):</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" name="player1" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Valorant ID:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">#</i>
								<input type="text" name="valorantid_1" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Player 2 Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" name="player2" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Valorant ID:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">#</i>
								<input type="text" name="valorantid_2" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Player 3 Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" name="player3" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Valorant ID:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">#</i>
								<input type="text" name="valorantid_3" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Player 4 Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" name="player4" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Valorant ID:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">#</i>
								<input type="text" name="valorantid_4" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Player 5 Name:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" name="player5" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Valorant ID:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">#</i>
								<input type="text" name="valorantid_5" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Email ID:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="email" name="mailid" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Phone Number</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;"></i>
								<input type="number" required name="phnumber" class="form-control" min="12" ">

							</div>
						</div>
					</div>
					<div class=" form-end">
						
								<div class="checkbox" checkboxObject.required>
									<label>
										<input type="checkbox" required name="term"> Term & Condition
										<span class="checkmark"></span>
									</label>
									
								</div>
								<div class="button-holder">

									<a href="" class="btn mt-4"> <button style="background-color: yellow; border: none;"> Register Now </button></a>

								</div>

							</div>
				</form>
			</div>
		</div>

		<script>
			function checkForm(form) {
				if (!form.terms.checked) {
					alert("Please indicate that you accept the Terms and Conditions");
					form.terms.focus();
					return false;
				}
				return true;
			}
		</script>
</body>

</html>