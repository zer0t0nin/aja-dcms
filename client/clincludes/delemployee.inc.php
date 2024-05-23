<?php

require_once '../../includes/ajadcmsDB.php';

if(isset($_GET['Del'])) {

    $id = $_GET['Del'];
    $query = "delete from admin_users where admin_id='".$id."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        echo "<script>
        alert('Employee Data Deleted!');
        window.location.href = '../employeeusers.php';
        </script>";
    }
    else
     {
        echo "<script>
            alert('Data Not Deleted!');
            window.location.href = '../employeeusers.php';
            </script>";
    }

}
else {
    header("location: ../employeeusers.php");
}

