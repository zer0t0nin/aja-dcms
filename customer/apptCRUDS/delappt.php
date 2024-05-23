<?php

require_once '../../includes/ajadcmsDB.php';

if(isset($_GET['Del'])) {

    $id = $_GET['Del'];
    $query = "delete from admin_users where admin_id='".$id."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        header("location: ../employeeusers.php");
    }
    else
     {
        echo 'Please check your query';
    }

}
else {
    header("location: ../employeeusers.php");
}

