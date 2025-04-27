<?php
include('conn.php');

// php code to Update data from mysql database 
if(isset($_POST['update']))
{
	// get id to update
	$id = $_POST['id'];
    $uname = $_POST['name'];
    $pass = $_POST['pass'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    
    
    // mysql delete query 
    $query = "UPDATE `users` SET username = '$uname', password = '$pass', mobile = '$mob', email = '$email' WHERE `id`= '$id'";
    
       $result = mysqli_query($connect,$query);
       if($result)
    {
       header("location:adprofile.php");
    }else{
        echo 'Data Not Updated'.mysqli_error($connect);
    }    
}

?>
