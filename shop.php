<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <style>
			.product img{
				width: 100%;
				height: auto;
				box-sizing: border-box;
				object-fit: cover;
			}
		</style>
		
		<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

  	 <!--navbar-->
  	<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container-fluid">
      <img class="logo" src="assets/imgs/logo.png" alt="">
      <h2 class="brand">CShop</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <a href="account.php"><i class="fas fa-user"></i></a>
          </li>
        </ul>
      </div>
    </div>
  	</nav>

    <!--shop-->

	<section id="featured" class="my-5 py-5">
			<div class="container mt-5 py-5">
				<h3>Our Featured</h3>
				<hr>
				<p>Check Our Featured Products Here!</p>
			</div>
			<div class="row mx-auto container-fluid">
				<div class="product text-center col-lg-3 col-md-4 col-sm-12">
					<img class="img-fluid mb-3" src="assets/imgs/product1.jpg" alt="">
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h5 class="p-name">Sports Shoes</h5>
					<h4 class="p-price">#1500</h4>
					<button class="buy-btn">Buy Now</button>
				</div> 
				<div class="product text-center col-lg-3 col-md-4 col-sm-12">
					<img class="img-fluid mb-3" src="assets/imgs/product2.jpg" alt="">
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h5 class="p-name">Sports shoes</h5>
					<h4 class="p-price">#1500</h4>
					<button class="buy-btn">Buy Now</button>
				</div>  
				<div class="product text-center col-lg-3 col-md-4 col-sm-12">
					<img class="img-fluid mb-3" src="assets/imgs/product3.jpg" alt="">
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h5 class="p-name">Sports shoes</h5>
					<h4 class="p-price">#1500</h4>
					<button class="buy-btn">Buy Now</button>
				</div>  
				<div class="product text-center col-lg-3 col-md-4 col-sm-12">
					<img class="img-fluid mb-3" src="assets/imgs/product4.jpg" alt="">
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h5 class="p-name">Sports shoes</h5>
					<h4 class="p-price">#1500</h4>
					<button class="buy-btn">Buy Now</button>
				</div> 
				<div class="row mx-auto container-fluid">
					<div class="product text-center col-lg-3 col-md-4 col-sm-12">
						<img class="img-fluid mb-3" src="assets/imgs/clothe1.jpg" alt="">
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<h5 class="p-name">Sports Shoes</h5>
						<h4 class="p-price">#1000</h4>
						<button class="buy-btn">Buy Now</button>
					</div> 
					<div class="product text-center col-lg-3 col-md-4 col-sm-12">
						<img class="img-fluid mb-3" src="assets/imgs/clothe2.jpg" alt="">
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<h5 class="p-name">Sports shoes</h5>
						<h4 class="p-price">#1000</h4>
						<button class="buy-btn">Buy Now</button>
					</div>  
					<div class="product text-center col-lg-3 col-md-4 col-sm-12">
						<img class="img-fluid mb-3" src="assets/imgs/clothe3.jpg" alt="">
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<h5 class="p-name">Sports shoes</h5>
						<h4 class="p-price">#1000</h4>
						<button class="buy-btn">Buy Now</button>
					</div>  
					<div class="product text-center col-lg-3 col-md-4 col-sm-12">
						<img class="img-fluid mb-3" src="assets/imgs/clothe4.jpg" alt="">
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<h5 class="p-name">Sports shoes</h5>
						<h4 class="p-price">#1000</h4>
						<button class="buy-btn">Buy Now</button>
					</div>
					<div class="row mx-auto container-fluid">
						<div class="product text-center col-lg-3 col-md-4 col-sm-12">
							<img class="img-fluid mb-3" src="assets/imgs/tshirt2.jpg" alt="Shoe">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<h5 class="p-name">Sports Shoes</h5>
							<h4 class="p-price">#1000</h4>
							<button class="buy-btn">Buy Now</button>
						</div> 
						<div class="product text-center col-lg-3 col-md-4 col-sm-12">
							<img class="img-fluid mb-3" src="assets/imgs/tshirt3.jpg" alt="Shoe">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<h5 class="p-name">Sports shoes</h5>
							<h4 class="p-price">#1000</h4>
							<button class="buy-btn">Buy Now</button>
						</div>  
						<div class="product text-center col-lg-3 col-md-4 col-sm-12">
							<img class="img-fluid mb-3" src="assets/imgs/tshirt4.jpg" alt="Shoe">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<h5 class="p-name">Sports shoes</h5>
							<h4 class="p-price">#1000</h4>
							<button class="buy-btn">Buy Now</button>
						</div>  
						<div class="product text-center col-lg-3 col-md-4 col-sm-12">
							<img class="img-fluid mb-3" src="assets/imgs/tshirt5.jpg" alt="Shoe">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<h5 class="p-name">Sports shoes</h5>
							<h4 class="p-price">#1000</h4>
							<button class="buy-btn">Buy Now</button>
						</div> 
						<div class="row mx-auto container-fluid">
							<div class="product text-center col-lg-3 col-md-4 col-sm-12">
								<img class="img-fluid mb-3" src="assets/imgs/shoe1.jpg" alt="Shoe">
								<div class="star">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
								<h5 class="p-name">Sports Shoes</h5>
								<h4 class="p-price">#1000</h4>
								<button class="buy-btn">Buy Now</button>
							</div> 
							<div class="product text-center col-lg-3 col-md-4 col-sm-12">
								<img class="img-fluid mb-3" src="assets/imgs/sports-shoe.jpg" alt="Shoe">
								<div class="star">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
								<h5 class="p-name">Sports shoes</h5>
								<h4 class="p-price">#1000</h4>
								<button class="buy-btn">Buy Now</button>
							</div>  
							<div class="product text-center col-lg-3 col-md-4 col-sm-12">
								<img class="img-fluid mb-3" src="assets/imgs/sports-shoe3.jpg" alt="Shoe">
								<div class="star">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
								<h5 class="p-name">Sports shoes</h5>
								<h4 class="p-price">#1000</h4>
								<button class="buy-btn">Buy Now</button>
							</div>  
							<div class="product text-center col-lg-3 col-md-4 col-sm-12">
								<img class="img-fluid mb-3" src="assets/imgs/sports-shoe4.jpg" alt="Shoe">
								<div class="star">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
								<h5 class="p-name">Sports shoes</h5>
								<h4 class="p-price">#1000</h4>
								<button class="buy-btn">Buy Now</button>
							</div>
							<nav aria-label="page navigation example">
								<ul class="pagination my-5">
										<li class="page-item"><a class="page-link" href="#">Previous</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
							</nav>   
						</div>  
					</div>   
				</div>  
			</div>
	</section>

  	 <!--Footer-->
  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img class="logo" src="assets/imgs/logo.png" alt="logo">
        <p class="pt-3">we provide the best products for the most affordable prices</p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase">
          <li><a href="#">men</a></li>
          <li><a href="#">women</a></li>
          <li><a href="#">boys</a></li>
          <li><a href="#">girls</a></li>
          <li><a href="#">new arrivals</a></li>
          <li><a href="#">clothes</a></li>
        </ul>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">address</h6>
          <p>No.1 Dorowa Tsoho,<br>Barkin-Ladi-Mangu Road<br>Plateau State</p>
        </div>     
        <div>
          <h6 class="text-uppercase">phone</h6>
          <p>+2348085361621</p>
        </div>
        <div>
          <h6 class="text-uppercase">email</h6>
          <p>chunjiemmanueil@gmail.com</p>
        </div>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Instagram</h5>
        <div class="row">
          <img src="assets/imgs/clothe3.jpg" alt="" class="img-fluid w-25 h-100 m-2">
          <img src="assets/imgs/shoe4.jpg" alt="" class="img-fluid w-25 h-100 m-2">
          <img src="assets/imgs/shoe.jpg" alt="" class="img-fluid w-25 h-100 m-2">
          <img src="assets/imgs/featured3.jpg" alt="" class="img-fluid w-25 h-100 m-2">
          <img src="assets/imgs/bag3.jpg" alt="" class="img-fluid w-25 h-100 m-2">
        </div>  
      </div>
    </div>
    <div class="copyright mt-5">
      <div class="row container mx-auto pt-5">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
          <img src="assets/imgs/payment.jpg" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 text-nowrap mb-2">
          <p>CShop @ 2024 All Right Reserved</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
          <a href=""><i class="fab fa-facebook"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </footer>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>