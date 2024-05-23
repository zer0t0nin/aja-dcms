<?php include '../includes/navbar.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/ajadcmsDB.php'; ?>

<div class="table-container">
	<h2>Scheduled Appointments</h2>
</div>

<body>
	<?php
	$sql = "SELECT * FROM apprvd_appts;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	?>

	<div class="table-container">
		<table class="table table-bordered table-responsive-sm" id="example1" width="100%">
			<thead class="thead-dark">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact No</th>
					<th>Service</th>
					<th>Appt Date</th>
					<th></th>
				</tr>
			</thead>
			<tbody>

				<?php

				// output data of each row
				while ($row = mysqli_fetch_assoc($result)) {
					$id = $row['appt_id'];
					$name = $row['users_name'];
					$email = $row['users_email'];
					$contact = $row['users_contact'];
					$service = $row['service_name'];
					$date = $row['appt_date'];
				?>

					<tr>
						<td> <?php echo $id ?> </td>
						<td> <?php echo $name ?> </td>
						<td> <?php echo $email ?> </td>
						<td> <?php echo $contact ?> </td>
						<td> <?php echo $service ?> </td>
						<td> <?php echo $date ?> </td>
						<td> <button class="btn btn-success" data-toggle="modal" data-target="#markdoneModal<?php echo $id ?>"><i class="fas fa-clipboard-check"></i> Mark Done </button></td>
					</tr>

					<!-- Modal for MARK DONE Button -->
					<div class="modal fade" id="markdoneModal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">

								<div class="modal-header">
									<h4 class="modal-title">Appointment Details</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="clincludes/addappointmenthistory.php" method="POST">
									<div class="modal-body">
										<div class="form-group">
											<input type="text" name="id" class="form-control" id="id" value="<?php echo $id ?>" hidden>
											<label> Name: <?php echo $row['users_name'] ?></label>
											<input type="text" name="name" class="form-control" value="<?php echo $row['users_name'] ?>" hidden>
										</div>

										<div class="form-group">
											<label> E-mail: <?php echo $row['users_email'] ?></label>
											<input type="text" name="email" class="form-control" value="<?php echo $row['users_email'] ?>" hidden>
										</div>

										<div class="form-group">
											<label> Contact Number: <?php echo $row['users_contact'] ?></label>
											<input type="text" name="contact" class="form-control" value="<?php echo $row['users_contact'] ?>" hidden>
										</div>

										<div class="form-group">
											<label> Service: <?php echo $row['service_name'] ?></label>
											<input type="text" name="service_name" class="form-control" value="<?php echo $row['service_name'] ?>" hidden>
										</div>

										<div class="form-group">
											<label> Date: <?php echo $row['appt_date'] ?></label>
											<input type="date" name="appt_date" class="form-control" value="<?php echo $row['appt_date'] ?>" hidden>
										</div>

										<div class="form-group">
											<label> Price: </label>
											<input type="text" name="service_price" class="form-control" required>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-success" name="addtohistory"> OK </button>
										<button type="button" class="btn btn-btn" data-dismiss="modal">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				<?php }  ?>
			</tbody>

		</table>

	</div>

</body>

<?php include '../includes/footer.php'; ?>