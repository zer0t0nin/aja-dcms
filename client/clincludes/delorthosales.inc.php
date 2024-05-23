<?php

require_once '../../includes/ajadcmsDB.php';

if(isset($_GET['Del'])) {

    $id = $_GET['Del'];
    $query = "delete from ortho_sales where ortho_id='".$id."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        echo "<script>
        alert('Data Deleted!');
        window.location.href = '../orthosales.php';
        </script>";
    }
    else
     {
        echo "<script>
            alert('Data Not Deleted!');
            window.location.href = '../orthosales.php';
            </script>";
    }

}
else {
    header("location: ../orthosales.php");
}

