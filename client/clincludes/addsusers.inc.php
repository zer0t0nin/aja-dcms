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
/* $photo = $_POST['photo']; */

$sql = "INSERT into user_profile (users_name, users_email, users_contact, users_dob, users_gender, users_pass) values ('$name','$email','$contact','$birthday','$gender','$password');";
$result = mysqli_query($conn, $sql);

if($result) {
    echo "<script>
        alert('Data Saved!');
        window.location.href = '../signedupusers.php';
        </script>";
}
else {
    echo "<script> alert('Data Not Saved!'); </script>";
}

}

?>
