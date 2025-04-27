<html>
<head>
<link href="tab.css" rel="stylesheet" type="text/css" />
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

tr, td {
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
<form method="GET">
<h4>ENTER ORDER ID:</h4>
<input type="numbers" name="id" />
<button type="submit">GO</button>
</form>
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
include ("conn.php");
error_reporting(E_ERROR | E_PARSE);
if(isset($_GET['id']))
	$id = $_GET['id'];
$query="select * from orders where ord_id = $id";
$res=$connect-> query($query);
 if ($res-> num_rows > 0)
 {
while($row=$res-> fetch_assoc())
{
echo "<tr><td>".$row["ord_id"]."</td><td>".$row["p_id"]."</td><td>".$row["fullname"]."</td><td>".$row["address"]."</td><td>".$row["pincode"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["mobile"]."</td></tr></table>";
}
 }
?>
<br><br>
<button onclick="window.print()">Print invoice</button>
</html>