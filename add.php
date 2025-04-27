<?php
include('conn.php');

// php code to Update data from mysql database 
if(isset($_POST['add']))
{
	// get id to update
    $productname = $_POST['name'];
    $pimage = $_POST['img'];
    $pprice = $_POST['price'];
    $ptype = $_POST['type'];
    
    
    // mysql delete query 
    $query = "insert into `products` (p_name,p_image,p_price,p_type) values ('$productname','$pimage','$pprice','$ptype')";
    
       $result = mysqli_query($connect,$query);
       if($result)
    {
       header("location:adprofile.php");
    }else{
        echo 'Data Not Updated'.mysqli_error($connect);
    }    
}

?>
