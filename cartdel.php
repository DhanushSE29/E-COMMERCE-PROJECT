<?php
include('conn.php');

// php code to Delete data from mysql database 
if(isset($_POST['delete']))
{
	    // get id to delete
    $id = $_POST['id'];
       
    // mysql delete query 
    $query = "DELETE FROM `cart` WHERE `c_id` = $id";
    
    $result = mysqli_query($connect,$query);
    
    if($result)
    {
       header("location:adprofile.php");
    }else{
        echo "Data Not Deleted".mysqli_error($connect);
    }
}

?>
