<?php
require_once '../../includes/ajadcmsDB.php';

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $service = $_POST['service'];
    $date = $_POST['date'];

    $query = "UPDATE req_appts SET users_name='$name', users_email='$email', users_contact='$contact', service_name='$service', appt_date='$date' WHERE appt_id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
            alert('Data Saved Successfully!');
            window.location.href = '../apptreqs.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Not Saved!');
            window.location.href = '../apptreqs.php';
            </script>";
    }
} else {
    header("location: ../apptreqs.php");
}
