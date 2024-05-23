<?php
  require_once '../../includes/ajadcmsDB.php';
 
if(isset($_POST['update'])) {

    $id = $_POST['userid'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $position = $_POST['position'];
	
$query = "UPDATE admin_users SET admin_name='$name', admin_email='$email', admin_pass='$password', admin_contact='$contact', admin_position='$position' WHERE admin_id='$id' ";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        echo "<script>
            alert('Data Saved Successfully!');
            window.location.href = '../employeeusers.php';
            </script>";
  
    }
    else
     {
        echo "<script>
            alert('Data Not Saved!');
            window.location.href = '../employeeusers.php';
            </script>";
    }

}

else
{

    header("location: ../employeeusers.php");

}

