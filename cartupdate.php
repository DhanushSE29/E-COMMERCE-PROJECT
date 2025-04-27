<html>
<title>Cart Updation form </title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="form.css">
</head>
<body>


<form action="cartup.php" method="POST">
<h1 align="center">User updation form</h1>

  <div class="container">
  <label><b>ID:</b></label>
    <input type="number" placeholder="ID" name="id" maxlength="90" required />
  
	<label><b>Name:</b></label>
    <input type="text" placeholder="Enter Product name" name="name" maxlength="90" required />

	<label><b>Price:</b></label>
    <input type="number" placeholder="Enter price number" name="price" maxlength="50" required />

    <button name="update" type="submit">Update</button>


    <button type="reset">Cancel</button>
  </div>
</form>
</body>
</html>