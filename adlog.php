<!--adlogin.php-->
<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "ecom");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT name, password from admin where name=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) {//fetching the contents of the row 
$_SESSION['login_user'] = $username; // Initializing Session
header("location: adprofile.php"); // Redirecting To Profile Page
}
else
{
	echo"<h1>password is incorrect</h1>";
}
}
?>