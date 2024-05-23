<?php
include_once '../../includes/ajadcmsDB.php';

if(isset($_POST['insertdata']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$position = $_POST['position'];
/* $photo = $_POST['photo']; */

$sql = "INSERT into admin_users (admin_name, admin_email, admin_pass, admin_contact, admin_dob, admin_gender, admin_position) values ('$name','$email','$password','$contact','$birthday','$gender','$position');";
$result = mysqli_query($conn, $sql);

if($result) {
    echo "<script>
        alert('Data Saved!');
        window.location.href = '../employeeusers.php';
        </script>";
}
else {
    echo "<script> alert('Data Not Saved!'); </script>";
}

}

?>
