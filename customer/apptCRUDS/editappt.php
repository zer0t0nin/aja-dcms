<?php


require_once '../../includes/ajadcmsDB.php';

$id = $_GET['GetID'];
$query = "select * from admin_users where admin_id='".$id."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)) {
    $id = $row['admin_id'];
	$name = $row['admin_name'];
	$email = $row['admin_email'];
	$pass = $row['admin_pass'];
	$contact = $row['admin_contact'];
	$dob = $row['admin_dob'];
	$gender = $row['admin_gender'];
	$position = $row['admin_position'];

}
