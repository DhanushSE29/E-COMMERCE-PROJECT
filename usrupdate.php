<html>
<title>Product Updation form </title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="form.css">
</head>
<body>


<form action="uupdate.php" method="POST">
<h1 align="center">User updation form</h1>

  <div class="container">
  <label><b>ID:</b></label>
    <input type="number" placeholder="ID" name="id" maxlength="90" required />
  
	<label><b>User name:</b></label>
    <input type="text" placeholder="Enter user name" name="name" maxlength="90" required />

	<label><b>Password:</b></label>
    <input type="password" placeholder="Enter password" name="pass" maxlength="60" required />

	<label><b>Mobile:</b></label>
    <input type="number" placeholder="Enter mobile number" name="mob" maxlength="50" required />

	<label><b>Email:</b></label>
    <input type="email" placeholder="Enter email" name="email" maxLength="100" required />

    <button name="update" type="submit">Update</button>


    <button type="reset">Cancel</button>
  </div>
</form>
</body>
</html>