<?php
include_once '../../includes/ajadcmsDB.php';

if(isset($_POST['insertdata']))
{
$patientid = $_POST['patientid'];
$name = $_POST['name'];
$date = $_POST['date'];
$amount = $_POST['amount'];

$sql = "INSERT into ortho_sales (patient_id, users_name, admin_pass, appt_date, admt_paid) values ('$patientid','$name','$date');";
$result = mysqli_query($conn, $sql);

if($result) {
    echo "<script>
        alert('Data Added!');
        window.location.href = '../orthosales.php';
        </script>";
}
else {
    echo "<script> alert('Data Not Added!'); </script>";
}

}

?>
