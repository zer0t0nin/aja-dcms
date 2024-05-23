<?php

require_once '../../includes/ajadcmsDB.php';

if(isset($_GET['Del'])) {

    $id = $_GET['Del'];
    $query = "delete from user_profile where users_id='".$id."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        echo "<script>
        alert('User Data Deleted!');
        window.location.href = '../signedupusers.php';
        </script>";
    }
    else
     {
        echo "<script>
            alert('Data Not Deleted!');
            window.location.href = '../signedupusers.php';
            </script>";
    }

}
else {
    header("location: ../signedupusers.php");
}

