<html>
<title>Product Updation form </title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="form.css">
</head>
<body>


<form action="ordup.php" method="POST">
<h1 align="center">User updation form</h1>

  <div class="container">
  <label><b>ID:</b></label>
    <input type="number" placeholder="ID" name="id" maxlength="90" required />
  
	<label><b>User name:</b></label>
    <input type="text" placeholder="Enter user name" name="name" maxlength="90" required />

	<label><b>Address:</b></label>
    <input type="text" placeholder="Enter address" name="addr" maxlength="60" required />

	<label><b>Pincode:</b></label>
    <input type="number" placeholder="Enter pincode" name="pin" maxLength="100" required />

	<label><b>City:</b></label>
    <input type="text" placeholder="Enter city" name="city" maxLength="100" required />
	
	<label><b>State:</b></label>
    <input type="text" placeholder="Enter State" name="Stat" maxLength="100" required />

	<label><b>Mobile:</b></label>
    <input type="number" placeholder="Enter mobile number" name="mob" maxlength="50" required />

    <button name="update" type="submit">Update</button>


    <button type="reset">Cancel</button>
  </div>
</form>
</body>
</html>