<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<form action="insert.php" method="GET" class="col-10 mx-auto">
			<div class="mt-3">
				<span class="font-weight-bold">Title</span>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Description</span>
				<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
			</div>			
			<div class="mt-3">
				<span class="font-weight-bold">Image</span>
				<input type="" name="img" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Price</span>
				<input type="" name="price" class="form-control">
			</div>			
			<button class="btn btn-success mt-5">Add the product</button>
		</form>
</body>
</html>