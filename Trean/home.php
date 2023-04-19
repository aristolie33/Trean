<?php
 include 'components/connection.php';
 session_start();
 if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = '';
	}

	if (isset($_POST['logout'])) {
		session_destroy();
		header("location: login.php");
	}
?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Green Coffee - home page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">

		<section class="home-section">
			<div class="slider">
				<div class="slider__slider slide1">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Relax with Us</h1>
						<p>Green tea is high in L-theanine, which is considered to calm the mind and relieve stress.</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide2">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>welcome to my shop</h1>
						<p>What bring you here? Curiousity? Seek for stress reliever? Or simply craving for our product?</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide3">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>No Day with No Trean!</h1>
						<p>It's healthy to routinely consume our products. Be happy and share the words, my friend!</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide4">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>The Perfet Green Coffee</h1>
						<p>Green coffee is considered safer for people with gastritis and is friendly to people with vertigo.</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide5">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Healty is Numero Uno</h1>
						<p>Being Healty prevent the body from getting sick so that we can carry out our daily activities.</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="left-arrow"><i class='bx bxs-left-arrow'></i></div>
                <div class="right-arrow"><i class='bx bxs-right-arrow'></i></div>
			</div>
		</section>
		<!-- home slider end -->
		<section class="thumb">
			<div class="box-container">
				<div class="box">
					<img src="img/thumb2.jpg">
					<h3>Green Tea</h3>
					<p>A healthy drink rich in antioxidants. Do you want a cup of tea?</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb0.jpg">
					<h3>Lemon Tea</h3>
					<p>Refreshing and perfect as a refreshing drink or for relaxation.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb1.jpg">
					<h3>Pastry</h3>
					<p>Folded dough filled with various ingredients to create a delicious savoury food.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb.jpg">
					<h3>Green Coffee</h3>
					<p>Raw green coffee, rich in antioxidants, good for metabolism and weight loss.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="box-container">
				<div class="box">
					<img src="img/about-us.jpg">
				</div>
				<div class="box">
					<img src="img/download.png">
					<span>healthy tea</span>
					<h1>save up to 50% off</h1>
					<p>Everyone can be healthy</p>
				</div>
			</div>
		</section>
		<section class="shop">
			<div class="title">
				<img src="img/download.png">
				<h1>Trending Products</h1>
			</div>
			<div class="row">
				<img src="img/about.jpg">
				<div class="row-detail">
					<img src="img/basil.jpg">
					<div class="top-footer">
						<h1>a cup of green tea makes you healthy</h1>
					</div>
				</div>
			</div>
			<div class="box-container">
				<div class="box">
					<img src="img/card.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/card0.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/card1.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/card2.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/10.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/6.webp">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</section>
		<section class="shop-category">
			<div class="box-container">
				<div class="box">
					<img src="img/6.jpg">
					<div class="detail">
						<span>BIG OFFERS</span>
						<h1>Extra 15% off</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
				<div class="box">
					<img src="img/7.jpg">
					<div class="detail">
						<span>new in taste</span>
						<h1>coffee house</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="services">
			<div class="box-container">
				<div class="box">
					<img src="img/icon2.png">
					<div class="detail">
						<h3>great savings</h3>
						<p>save big every order</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon.png">
					<div class="detail">
						<h3>24*7 support</h3>
						<p>one-on-one support</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon0.png">
					<div class="detail">
						<h3>gift vouchers</h3>
						<p>vouchers on every festivals</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon1.png">
					<div class="detail">
						<h3>worldwide delivery</h3>
						<p>dropship worldwide</p>
					</div>
				</div>
			</div>
		</section>
		<section class="brand">
			<div class="box-container">
				<div class="box">
					<img src="img/brand (1).jpg">
				</div>
				<div class="box">
					<img src="img/brand (2).jpg">
				</div>
				<div class="box">
					<img src="img/brand (3).jpg">
				</div>
				<div class="box">
					<img src="img/brand (4).jpg">
				</div>
				<div class="box">
					<img src="img/brand (5).jpg">
				</div>
			</div>
		</section>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>
</html>
