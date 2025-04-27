<html>
<title>Product Add form </title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="form.css">
</head>
<body>


<form action="add.php" method="POST">
<h1 align="center">Product insertion form</h1>

  <div class="container">
  
	<label><b>Product name:</b></label>
    <input type="text" placeholder="Enter product name" name="name" maxlength="90" required />

	<label><b>Select image:</b></label>
    <input type="file" placeholder="select image" name="img" maxlength="60" required />

	<label><b>Price:</b></label>
    <input type="number" placeholder="Enter price" name="price" maxlength="50" required />

	<label><b>Type:</b></label>
    <input type="text" placeholder="Enter type of product" name="type" maxLength="10" required />

    <button name="add" type="submit">Add</button>


    <button type="reset">Cancel</button>
  </div>
</form>
</body>
</html>