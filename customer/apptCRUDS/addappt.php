<?php
include_once '../../includes/ajadcmsDB.php';

$users_name = $_POST['username'];
$users_email = $_POST['email'];
$users_contact = $_POST['contact'];
$service_name = $_POST['service_name'];
$appt_date = $_POST['appt_date'];

$sql = "INSERT INTO req_appts(users_name, users_email, users_contact, service_name, appt_date)
VALUES ('$users_name','$users_email','$users_contact','$service_name','$appt_date');";

$result = mysqli_query($conn, $sql);

if($result) {
    echo "<script>
        alert('Request Sent. Thank you!');
        window.location.href = '../customerportal.php';
        </script>";
}
else {
    echo "<script>
        alert('Data Not Saved!');
        window.location.href = '../customerportal.php';
        </script>";
}

?>
