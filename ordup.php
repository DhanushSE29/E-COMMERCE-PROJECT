<?php
include('conn.php');

// php code to Update data from mysql database 
if(isset($_POST['update']))
{
	// get id to update
	$id = $_POST['id'];
    $uname = $_POST['name'];
	$address = $_POST['addr'];
	$pin = $_POST['pin'];
	$city = $_POST['city'];
    $state = $_POST['Stat'];
    $mobile = $_POST['mob'];
    
    
    // mysql delete query 
    $query = "UPDATE `orders` SET fullname = '$uname', address = '$address', pincode = '$pin', city = '$city' , state= '$state',mobile= '$mobile' WHERE `ord_id`= '$id'";
    
       $result = mysqli_query($connect,$query);
       if($result)
    {
       header("location:adprofile.php");
    }else{
        echo 'Data Not Updated'.mysqli_error($connect);
    }    
}

?>
