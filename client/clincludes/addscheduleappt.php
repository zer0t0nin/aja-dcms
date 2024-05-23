<?php
include_once '../../includes/ajadcmsDB.php';

if (isset($_POST['addschedule'])) {

    $id = $_POST['id'];
    $users_name = $_POST['name'];
    $users_email = $_POST['email'];
    $users_contact = $_POST['contact'];
    $service_name = $_POST['service_name'];
    $appt_date = $_POST['appt_date'];

    $sql = "INSERT INTO apprvd_appts(users_name, users_email, users_contact, service_name, appt_date)
VALUES ('$users_name','$users_email','$users_contact','$service_name','$appt_date');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $id = $_POST['id'];
        $query = "delete from req_appts where appt_id='".$id."'";
        $result2 = mysqli_query($conn,$query);
    
        if ($result2) {
            echo "<script>
            alert('Appointment Approved!');
            window.location.href = '../scheduledappointments.php';
            </script>";
        } else {
            echo "<script>
                alert('Failed To Deleted From Appointments!');
                window.location.href = '../apptreqs.php';
                </script>";
        }
    } else {
        echo "<script>
        alert('Data Not Saved!');
        window.location.href = '../apptreqs.php';
        </script>";
    }
} else {
    header("location: ../apptreqs.php");
}
