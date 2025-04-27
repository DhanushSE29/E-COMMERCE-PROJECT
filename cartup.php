<?php
include('conn.php');

// php code to Update data from mysql database 
if(isset($_POST['update']))
{
	// get id to update
	$id = $_POST['id'];
    $uname = $_POST['name'];
    $price = $_POST['price'];
    
    
    // mysql delete query 
    $query = "UPDATE `cart` SET c_id = '$id', c_name = '$uname', c_price = '$price' WHERE `c_id`= '$id'";
    
       $result = mysqli_query($connect,$query);
       if($result)
    {
       header("location:adprofile.php");
    }else{
        echo 'Data Not Updated'.mysqli_error($connect);
    }    
}

?>
