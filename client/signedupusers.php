<?php include '../includes/navbar.php'; ?> 
<?php include '../includes/header.php'; ?> 
<?php include '../includes/ajadcmsDB.php'; ?> 


<body>



<!-- Modal for Add Users -->
<div class="modal fade" id="addsumodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
        <!-- FORM -->
		<form action="clincludes/addsusers.inc.php" method="POST">
		<div class="modal-body">


  	<div class="form-group">
	  <label> Name </label>
	  <input type="text" name="name" class="form-control" placeholder="Enter Name">
	</div>

	<div class="form-group">
	  <label> E-mail </label>
	  <input type="text" name="email" class="form-control" placeholder="Enter E-mail">
	</div>

	<div class="form-group">
	  <label> Password </label>
	  <input type="password" name="password" class="form-control" placeholder="Enter Password">
	</div>

	<div class="form-group">
	  <label> Confirm Password </label>
	  <input type="password" name="confpassword" class="form-control" placeholder="Confirm Password">
	</div>

	<div class="form-group">
	  <label> Contact </label>
	  <input type="text" name="contact" class="form-control" placeholder="Enter Contact Number">
	</div>

	<div class="form-group">
	  <label> Birthday </label>
	  <input type="date" name="birthday" class="form-control" placeholder="Enter Birthday">
	</div>

	<div class="form-group">
	  <label> Gender </label>
	  <input list="gender" name="gender" class="form-control" placeholder="">
	  <datalist id="gender">
  <option value="Male">
  <option value="Female">
	</div>

	<div class="form-group">
	<label> Upload Photo </label>
	<br>
<form method="POST" action="" enctype="multipart/form-data">
<input type="file" name="photo" value="" />
</div>

<!-- footer of modal -->
<div class="modal-footer">
	 <input type="submit" name="insertdata" class="btn btn-primary" value="Save"> 
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
</form>

 </div>

 
    </div>
  </div>
</div>

<!-- table header -->


                    <div class="table-container">
					<h2> Signed Up Users </h2>
                        <button type="button" class="btn btn btn-primary float-right" data-toggle="modal" data-target="#addsumodal"> <i class="fas fa-edit"></i> Add User </button>
                    </div>
<br>

					<!-- table -->

					<?php 
$sql = "SELECT * FROM user_profile;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>
				
					<div class="table-container">
							<table class="table table-bordered table-responsive-sm" id="example1">
								<thead class="thead-dark">
									<tr>
										<th>User ID</th>
										<th>Full Name</th>
										<th>Email</th>
										<th>Password</th>
										<th>Contact Number</th>
										<th>Birthday</th>
										<th>Gender</th>
										<th>Edit</th>
										<th>Delete</th>
										<th>Add as Patient</th>
									</tr>
								</thead>
								<tbody>

								<?php 

// output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	
	$id = $row['users_id'];
	$name = $row['users_name'];
	$email = $row['users_email'];
	$pass = $row['users_pass'];
	$contact = $row['users_contact'];
	$dob = $row['users_dob'];
	$gender = $row['users_gender'];
	?>

									<tr>
										<td> <?php echo $id ?> </td>
										<td> <?php echo $name ?> </td>
										<td> <?php echo $email ?> </td>
										<td> <?php echo $pass ?> </td>
										<td> <?php echo $contact ?> </td>
										<td> <?php echo $dob ?> </td>
										<td> <?php echo $gender ?> </td>
										<td> <button class="btn btn-warning" data-toggle="modal" data-target="#editsumodal<?php echo $row['users_id']?>"> <i class="fas fa-pen"></i> Edit </button> </td>
										<td> <a type="button" class="btn btn-danger" href="clincludes/delsusers.inc.php?Del=<?php echo $id ?> "> <i class="fas fa-trash"></i> Delete </a> </td>
										<td> <a type="button" class="btn btn-success" href=" "> <i class="fas fa-plus"></i> Add as Patient </a> </td>
									</tr>

<!-- Modal for Edit Button -->
<div class="modal fade" id="editsumodal<?php echo $row['users_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form action="clincludes/editsusers.inc.php" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

	  
  
        <!-- START OF FORM -->
		
		<div class="modal-body">

	<div class="form-group">
	  <label> User ID </label>
	  <input type="text" name="userid" class="form-control" id="userid" value="<?php echo $id?>" readonly>
	</div>

  	<div class="form-group">
	  <label> Name </label>
	  <input type="text" name="name" class="form-control" value="<?php echo $row['users_name']?>">
	</div>

	<div class="form-group">
	  <label> E-mail </label>
	  <input type="text" name="email" class="form-control" value="<?php echo $row['users_email']?>">
	</div>

	<div class="form-group">
	  <label> Password </label>
	  <input type="password" name="password" class="form-control" value="<?php echo $row['users_pass']?>">
	</div>

	<div class="form-group">
	  <label> Confirm Password </label>
	  <input type="password" name="confpassword" class="form-control" disabled>
	</div>

	<div class="form-group">
	  <label> Contact </label>
	  <input type="text" name="contact" class="form-control" value="<?php echo $row['users_contact']?>"> 
	</div>

	<div class="form-group">
	  <label> Birthday </label>
	  <input type="date" name="birthday" class="form-control" value="<?php echo $row['users_dob']?>">
	</div>

	<div class="form-group">
	  <label> Gender </label>
	  <input list="gender" name="gender" class="form-control" value="<?php echo $row['users_gender']?>">
	  <datalist id="gender">
  <option value="Male">
  <option value="Female">
	</div>

	<div class="form-group">
	<label> Change Photo </label>
	<br>
<form method="POST" action="" enctype="multipart/form-data">
<input type="file" name="photo" value="" />
</div>

<!-- footer of modal -->
<div class="modal-footer">
	 <input type="submit" name="update" class="btn btn-primary" value="Update"> 
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
</form>

 </div>

 
    </div>
  </div>
</div>
<!-- end edit of modal -->

									<?php } ?>
									
								</tbody>
							</table>
		
</div>



							<?php include '../includes/footer.php'; ?> 

    </body>