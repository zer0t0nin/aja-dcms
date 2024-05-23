<?php include '../includes/navbar.php'; ?> 
<?php include '../includes/header.php'; ?> 
<?php include '../includes/ajadcmsDB.php'; ?> 



  <body>


 
 

  <!-- Profile-->

  <div class="row">
					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block"> <i class="fa fa-user" aria-hidden="true"></i> My Profile </h4> 
							</div>
							<div class="card-body p-0">
								<div class="border">

								<ul class="contact-list">
									<li> Name: </li>
								
									<li> E-mail: <?php echo $_SESSION['name']; ?> </li>
								
									<li> Contact Number: </li>
								
									<li> Birthday: </li>
								
									<li> Position: </li>

</ul>

								</div>
							</div>
						</div>
					</div>
<!-- Patient Count -->
					<div class="col-3">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block"> <i class="fa fa-wheelchair" aria-hidden="true"></i> Patients </h4> 
							</div>
							<div class="card-body p-0">
								<div class="border">

								<ul class="contact-list">
									<!-- Put Patient Count widget here -->
									<li> / </li>
								
									<li> /  </li>
								
									<li> / </li>
								
									<li> / </li>
								
									<li> / </li>

</ul>

								</div>
							</div>
						</div>
					</div>

					<!-- Date & Time -->
					<div class="col-3">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block"> <i class="fa fa-calendar-alt" aria-hidden="true"></i> Date & <i class="fa fa-clock" aria-hidden="true"></i> Time </h4> 
							</div>
							<div class="card-body p-0">
								<div class="border">

								<!-- Put Date and Time widget here -->
								<ul class="contact-list">
									<li> / </li>
								
									<li> /  </li>
								
									<li> / </li>
								
									<li> / </li>
								
									<li> / </li>

</ul>

								</div>
							</div>
						</div>
					</div>

					</div>

					


  <!-- Scheduled Appointments -->
  <?php
	$sql = "SELECT * FROM apprvd_appts;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	?>



				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8 mt-3">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block"><i class="fa fa-calendar-check" aria-hidden="true"></i> Scheduled Appointments</h4> <a href="scheduledappointments.php" class="btn btn-dark float-right">View all</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="d-none">
											
											<tr>
												<th>Patient Name</th>
												<th>Doctor Name</th>
												<th>Timing</th>
												<th class="text-right">Status</th>
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
												<td style="min-width: 200px;">
													
													<h4><a href="scheduledappointments.php"><?php echo $name ?></a></h4>
												</td>     
												<td>
													<h5 class="time-title p-0">Contact</h5>
													<p><?php echo $contact ?></p>
												</td>            
												<td>
													<h5 class="time-title p-0">Service</h5>
													<p><?php echo $service ?></p>
												</td>
												<td>
													<h5 class="time-title p-0">Date</h5>
													<p><?php echo $date ?></p>
												</td>
											</tr>
										
											<?php }  ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>


					<!-- Employee List -->

					<?php 
$sql = "SELECT * FROM admin_users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>

					<div class="col-12 col-md-6 col-lg-4 col-xl-4 mt-3">
                        <div class="card">
							<div class="card-header">
								<h4 class="card-title mb-0"><i class="fa fa-users" aria-hidden="true"></i> Employees</h4>
							</div>
                            <div class="card-body p-0">
								

											<?php 

// output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	
	$id = $row['admin_id'];
	$name = $row['admin_name'];
	?>

	<ul class="contact-list">
<li style="text-align: center"> <?php echo $name ?> </li>
	</ul>
                                   
											<?php } ?>       
                                        
                               
  </div>
                            <div class="card-footer text-center bg-white">
                                <a href="employeeusers.php" class="text-dark">View Employees Info</a>
                            </div>
                        </div>
                    </div>
  </div>
			
<!-- Patients -->




  </body>
