<?php
  require_once '../../includes/ajadcmsDB.php';
 
if(isset($_POST['update'])) {

    $patientid = $_POST['patientid'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
	
$query = "UPDATE ortho_sales SET users_name='$name', appt_date='$date', amt_paid='$amount' WHERE patient_id='$patientid' ";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        echo "<script>
            alert('Data Saved Successfully!');
            window.location.href = '../orthosales.php';
            </script>";
  
    }
    else
     {
        echo "<script>
            alert('Data Not Saved!');
            window.location.href = '../orthosales.php';
            </script>";
    }

}

else
{

    header("location: ../employeeusers.php");

}

