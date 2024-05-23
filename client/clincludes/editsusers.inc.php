<?php
  require_once '../../includes/ajadcmsDB.php';
 
if(isset($_POST['update'])) {

    $id = $_POST['userid'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $position = $_POST['position'];
	
$query = "UPDATE user_profile SET users_name='$name', users_email='$email', users_pass='$password', users_contact='$contact' WHERE users_id='$id' ";
   // $query = "UPDATE admin_users SET admin_name='".$name."' , admin_email='".$email."' , admin_pass='".$password."' , admin_contact ='".$contact."' , admin_position ='".$position."' where admin_id='".$id."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        echo "<script>
            alert('Data Saved Successfully!');
            window.location.href = '../signedupusers.php';
            </script>";
  
    }
    else
     {
        echo "<script>
            alert('Data Not Saved!');
            window.location.href = '../signedupusers.php';
            </script>";
    }

}

else
{

    header("location: ../signedupusers.php");

}