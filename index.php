<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<?php
		$connect = mysqli_connect("127.0.0.1","root", "", "store");
		$query = mysqli_query($connect, "SELECT * FROM items");
		$result1 = $query->fetch_assoc();
		$result2 = $query->fetch_assoc();
		$result3 = $query->fetch_assoc();
		$result4 = $query->fetch_assoc();
		$result5 = $query->fetch_assoc();
		$result6 = $query->fetch_assoc();
		$result7 = $query->fetch_assoc();
	?>
	<div class="col-12 bg-dark" style="height: 120px;">
		<div class="col-10 mx-auto pl-0 pr-0 row" style="height: 120px;">
			<div class="col-1" style="height: 120px;">
				<img src="logo.png" class="w-100 bg-light mt-2" alt="">
			</div>
			<div class="col-8 d-flex" style="height: 120px;">
				<h4 class="mx-auto my-auto text-light">да да я</h4>
				<h4 class="mx-auto my-auto text-light">норм товары</h4>
				<h4 class="mx-auto my-auto text-light">возврата нет</h4>
				<h4 class="mx-auto my-auto text-light">без денег не входить</h4>
			</div>
			<div class="col-3" style="height: 120px;">
				<div class="mt-5 ml-5 col-12"><span><a href="admin.php" class="text-light">add new items</a></span></div>
			</div>
		</div>
	</div>
	<div class="col-12 mt-3" style="">
		<div class="col-10 mx-auto row pl-0 pr-0" style="">
			<div class="col-12" style="">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="1.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5 class="bg-dark">Xiaomi Mi Curved Gaming Monitor</h5>
				        <p class="bg-dark">имеет формат экрана 21:9, его разрешение - WQHD 3 440 × 1 440 точек (чуда тут не случилось), зато развертка достигает 144 Гц.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="2.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5 class="bg-dark">Клавиатуры с новыми клавишами</h5>
				        <p class="bg-dark">Microsoft Ergonomic Keyboard и Bluetooth Keyboard будут присутствовать две новые спецклавиши.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="3.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5 class="bg-dark">Yamaha P71 Review</h5>
				        <p class="bg-dark">You could call the Yamaha P71 and the P45 identical twins.</p>
				      </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-10 mt-3 mx-auto" style="height: 600px;">
		<div class="col-12 mx-auto row" style="">
			<div class="col-4 mx-auto" style="">
				<h3>Acer Aspire 5 Slim Laptop</h3>
				<p>15.6 inches Full HD IPS Display, AMD Ryzen 3 3200U, Vega 3 Graphics, 4GB DDR4, 128GB SSD, Backlit Keyboard, Windows 10 in S Mode</p>
				<img src="a.jpg" alt="" class="w-100 mx-auto">
				<h5>$419.99</h5>
			</div>
			<div class="col-4 mx-auto" style="">
				<?php
					echo "<h3>" . $result1["title"] . "</h3>";
					echo "<p>" . $result1["description"] . "</p>";
					echo "<img src='" . $result1["img"] . "' class='w-100 mx-auto'>";
					echo "<h5>" . $result1["price"] . "</h5>";
				?>
			</div>
			<div class="col-4 mx-auto" style="">
				<?php
					echo "<h3>" . $result2["title"] . "</h3>";
					echo "<p>" . $result2["description"] . "</p>";
					echo "<img src='" . $result2["img"] . "' class='w-100 mx-auto'>";
					echo "<h5>" . $result2["price"] . "</h5>";
				?>
			</div>
		</div>
		<div class="col-12 mx-auto mt-3 row" style="height: 290px;">
			<div class="col-4 mx-auto" style="height: 290px;">
				<?php
					echo "<h3>" . $result3["title"] . "</h3>";
					echo "<p>" . $result3["description"] . "</p>";
					echo "<img src='" . $result3["img"] . "' class='w-50'>";
					echo "<h5>" . $result3["price"] . "</h5>";
				?>
			</div>
			<div class="col-4 mx-auto" style="height: 290px;">
				<?php
					echo "<h3>" . $result4["title"] . "</h3>";
					echo "<p>" . $result4["description"] . "</p>";
					echo "<img src='" . $result4["img"] . "' class='w-50'>";
					echo "<h5>" . $result4["price"] . "</h5>";
				?>
			</div>
			<div class="col-4 mx-auto" style="height: 290px;">
				<?php
					echo "<h3>" . $result5["title"] . "</h3>";
					echo "<p>" . $result5["description"] . "</p>";
					echo "<img src='" . $result5["img"] . "' class='w-50'>";
					echo "<h5>" . $result5["price"] . "</h5>";
				?>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>