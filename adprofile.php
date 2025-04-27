<!--adprofile.php-->
<?php
include('adsession.php');
include('conn.php');
//include('delete.php');
if(!isset($_SESSION['login_user'])){
header("location: adlogin.php"); // Redirecting To home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Control Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="tab.css" rel="stylesheet" type="text/css" />
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.button{
display:block;
width:100px;
background-color:#4acf40;
color:white;
text-decoration:none;
border-radius:3px;
padding:12px 12px;
border:none;
}

.button:hover{
	opacity:0.8;
	color:blue;
}
</style>
</head>
<body>
<b style="float:left;"><a href="adlogout.php" class="button">Log Out</a></b>
<h1 align="right" style="color:blue;"><b>Welcome Admin</h1></b>
<hr size="5px" color="green">
<button class="tablink" onclick="openPage('Cart', this, '#18C9D2')" id="defaultOpen">Cart</button>
<button class="tablink" onclick="openPage('Orders', this, '#18C9D2')">Orders</button>
<button class="tablink" onclick="openPage('Users', this, '#18C9D2')">Users</button>
<button class="tablink" onclick="openPage('Products', this, '#18C9D2')">Products</button>
<button class="tablink" onclick="openPage('Feedback', this, '#18C9D2')">Feedback</button>

<div id="Cart" class="tabcontent">
  <h1>Cart</h1>
<button><a href="cartdelete.php" class="button">Delete</a></button>
<button><a href="cartupdate.php" class="button">Update</a></button>
 <table>
 <tr>
 <th>Customer id</th>
 <th>Name</th>
 <th>Price</th>
 </tr>
 <?php 
 $select_query = "SELECT c_id,c_name,c_price FROM cart";
 $res=$connect-> query($select_query);
 if ($res-> num_rows > 0)
 {
while($row=$res-> fetch_assoc())
{
echo "<tr><td>".$row["c_id"]."</td><td>".$row["c_name"]."</td><td>".$row["c_price"]."</td><tr>";
}
echo "</table>";
 }
 else{
	 echo "0 result";
 }
 ?>
 </table>

</div>

<div id="Orders" class="tabcontent">
  <h1>Orders</h1>
<button><a href="orddelete.php" class="button">Delete</a></button>
<button><a href="ordupdate.php" class="button">Update</a></button>
<button><a href="print.php" class="button">Print</a></button>
 <table>
 <tr>
 <th>id</th>
 <th>Product ID</th>
 <th>Name</th>
 <th>Address</th>
 <th>Pincode</th>
 <th>City</th>
 <th>State</th>
 <th>Mobile</th>
 </tr>
 <?php 
 $select_query = "SELECT ord_id,p_id,fullname,address,pincode,city,state,mobile FROM orders";
 $res=$connect-> query($select_query);
 if ($res-> num_rows > 0)
 {
while($row=$res-> fetch_assoc())
{
echo "<tr><td>".$row["ord_id"]."</td><td>".$row["p_id"]."</td><td>".$row["fullname"]."</td><td>".$row["address"]."</td><td>".$row["pincode"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["mobile"]."</td></tr>";
}
echo "</table>";
 }
 else{
	 echo "0 result";
 }
 ?>
 </table>
  
</div>

<div id="Users" class="tabcontent">
  <h1>Users</h1>
<button><a href="usrdelete.php" class="button">Delete</a></button>
<button><a href="usrupdate.php" class="button">Update</a></button>
 <table>
 <tr>
 <th>id</th>
 <th>Name</th>
 <th>Password</th>
 <th>Mobile</th>
 <th>Email</th>
 <th>Father's name</th>
 </tr>
 <?php 
 $select_query = "SELECT id,username,password,mobile,email,ques FROM Users";
 $res=$connect-> query($select_query);
 if ($res-> num_rows > 0)
 {
while($row=$res-> fetch_assoc())
{
echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td><td>".$row["mobile"]."</td><td>".$row["email"]."</td><td>".$row["ques"]."</td></tr>";
}
echo "</table>";
 }
 else{
	 echo "0 result";
 }
 ?>
 </table>
 
 </div>

<div id="Products" class="tabcontent">
  <h1>Products</h1>
<button><a href="padd.php" class="button">Add</a></button>
<button><a href="pdelete.php" class="button">Delete</a></button>
<button><a href="pupdate.php" class="button">Update</a></button>
 <table>
 <tr>
 <th>Product id</th>
 <th>Product name</th>
 <th>Product image</th>
 <th>Product price</th>
 <th>Product type</th>
 </tr>
 <?php 
 $select_query = "SELECT p_id,p_name,p_image,p_price,p_type FROM products";
 $res=$connect-> query($select_query);
 if ($res-> num_rows > 0)
 {
while($row=$res-> fetch_assoc())
{
echo "<tr><td>".$row["p_id"]."</td><td>".$row["p_name"]."</td><td>".$row["p_image"]."</td><td>".$row["p_price"]."</td><td>".$row["p_type"]."</td></tr>";
}
echo "</table>";
 }
 else{
	 echo "0 result";
 }
 ?>
 </table>
 
</div>

<div id="Feedback" class="tabcontent">
  <h1>Feedback</h1>
<button><a href="feeddelete.php" class="button">Delete</a></button>
 <table>
 <tr>
 <th>Feedback id</th>
 <th>Full name</th>
 <th>Feedback</th>
 </tr>
 <?php 
 $select_query = "SELECT f_id,fullname,feedback FROM feedbacktbl";
 $res=$connect-> query($select_query);
 if ($res-> num_rows > 0)
 {
while($row=$res-> fetch_assoc())
{
echo "<tr><td>".$row["f_id"]."</td><td>".$row["fullname"]."</td><td>".$row["feedback"]."</td></tr>";
}
echo "</table>";
 }
 else{
	 echo "0 result";
 }
 ?>
 </table>
 
 </div>

<div id="Details" class="tabcontent">
  <u><h2>Your Details</h2></u>
<h3>Name:<?php echo $login_session; ?></h3>
<br><br>

</div>

<script src="tab.js"></script>

</body>
</html>