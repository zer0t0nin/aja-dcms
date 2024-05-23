<?php
include_once '../../includes/ajadcmsDB.php';

if (isset($_POST['addtohistory'])) {

    $users_name = $_POST['name'];
    $users_email = $_POST['email'];
    $users_contact = $_POST['contact'];
    $service_name = $_POST['service_name'];
    $service_price = $_POST['service_price'];
    $appt_date = $_POST['appt_date'];

    $sql = "INSERT INTO appt_history(users_name, users_email, users_contact, service_name,service_price, appt_date)
VALUES ('$users_name','$users_email','$users_contact','$service_name','$service_price','$appt_date');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $id = $_POST['id'];
        $query = "delete from apprvd_appts where appt_id='".$id."'";
        $result2 = mysqli_query($conn,$query);
        
        if ($result2) {
            echo "<script>
            alert('Appointment Marked Done!');
            window.location.href = '../appointmenthistory.php';
            </script>";
        } else {
            echo "<script>
                alert('Failed To Delete From Approved Appointments!');
                window.location.href = '../scheduledappointments.php';
                </script>";
        }
    } else {
        echo "<script>
        alert('Data Not Saved!');
        window.location.href = '../scheduledappointments.php';
        </script>";
    }
} else {
    header("location: ../scheduledappointments.php");
}
