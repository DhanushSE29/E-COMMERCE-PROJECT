<?php
include('conn.php');

// php code to Update data from mysql database 
if(isset($_POST['update']))
{
	// get id to update
	$id = $_POST['id'];
    $productname = $_POST['name'];
    $pimage = $_POST['img'];
    $pprice = $_POST['price'];
    $ptype = $_POST['type'];
    
    
    // mysql delete query 
    $query = "UPDATE `products` SET p_name = '$productname', p_image = '$pimage', p_price = '$pprice', p_type = '$ptype' WHERE `p_id`= '$id'";
    
       $result = mysqli_query($connect,$query);
       if($result)
    {
       header("location:adprofile.php");
    }else{
        echo 'Data Not Updated'.mysqli_error($connect);
    }    
}

?>
