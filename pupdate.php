<html>
<title>Product Updation form </title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="form.css">
</head>
<body>


<form action="update.php" method="POST">
<h1 align="center">Product updation form</h1>

  <div class="container">
  <label><b>ID:</b></label>
    <input type="number" placeholder="ID" name="id" maxlength="90" required />
  
	<label><b>Product name:</b></label>
    <input type="text" placeholder="Enter product name" name="name" maxlength="90" required />

	<label><b>Select image:</b></label>
    <input type="file" placeholder="select image" name="img" maxlength="60" required />

	<label><b>Price:</b></label>
    <input type="number" placeholder="Enter price" name="price" maxlength="50" required />

	<label><b>Type:</b></label>
    <input type="text" placeholder="Enter type of product" name="type" maxLength="10" required />

    <button name="update" type="submit">Update</button>


    <button type="reset">Cancel</button>
  </div>
</form>
</body>
</html>