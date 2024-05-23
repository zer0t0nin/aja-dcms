<?php
include_once 'ajadcmsDB.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];

$sql = "INSERT into user_profile (users_name, users_email, users_contact, users_pass) values ('$name','$email','$contact','$password');";
$result = mysqli_query($conn, $sql);

if($result) {
    echo "<script>
        alert('Successfully Signed Up! Please Login.');
        window.location.href = '../index.php#login';
        </script>";
}
else {
    echo "<script>
        alert('Unsuccessful Register!');
        window.location.href = 'index.php';
        </script>";
}

?>
