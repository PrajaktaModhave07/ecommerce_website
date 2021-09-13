<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Trendy Shoppy - Ecommerce Website</title>
</head>

<body>
  <!-- Header -->
  <header id="home" class="header">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <h1>Trendy shoppy</h1>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <h1>Trendy Shoppy</h1>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>

         <ul class="nav-list">
            <li class="nav-item">
              <a href="welcome.php" class="nav-link">Home</a>
            </li>                                          
            <li class="nav-item">
              <a href="product.php" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>                
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="account.php" class="nav-link">Account</a>
            </li>
			 <li class="nav-item">
               <a href="logout.php" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
              <a href="checkout.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
            </li>
          </ul>
        </div>

        <a href="checkout.php" class="checkout-icon">
          <i class="bx bx-shopping-bag"></i>
        </a>

        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </nav>

    <!-- Hero style="transition: 5s;-->
    <img src="./images/banner10.png" alt="banner img"  class="hero-img" " />
    
 
    <div class="hero-content">
	  
    <!--  <h2><span class="discount">70% </span> SALE OFF</h2> -->
	  <div  style="color: black;">
         <?php echo   "<h2> Welcome, </span>" . $_SESSION['username'] . " !</h2>"; ?>
      </div>
      <h1>
        <span>Trendy Vibes</span>
        <span>mode on</span>             
      </h1>     
      <a class="btn" href="product.php">shop now</a>
    </div>
  </header>

  <!-- Main -->
  <main>
    <section class="advert section">
      <div class="advert-center container">
        <div class="advert-box">
		<a href="product.php">
          <div class="dotted" >
            <div class="content">
              <h2>
                Girls <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
		  </a>
          <img src="./images/advert1.png" alt="">
        </div>

        <div class="advert-box">
		<a href="product.php">
          <div class="dotted">
            <div class="content">
              <h2>
                Summer <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
		  </a>
          <img src="./images/advert2.png" alt="">
        </div>

        <div class="advert-box">
		<a href="product.php">
          <div class="dotted">
            <div class="content">
              <h2>
                Boys <br />
                Clothing
              </h2>
              <h4>Worlds Best Brands</h4>
            </div>
          </div>
		  </a>
          <img src="./images/advert3.png" alt="">
        </div>
      </div>
    </section>

    <!-- Featured -->
    <section class="section featured">
      <div class="title">
        <h1>Featured Products</h1>
      </div>

      <div class="product-center container">
         <div class="product">
                <div class="product-header">
                    <img src="./images/blkskirt.jpg" alt="black skirt">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                          <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span> </a>
                        <a href="product-details.php"> <span><i class="bx bx-search"></i></span> </a>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Girl's Skirt</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">450Rs/-</h4>
                </div>
            </div>
			<div class="product">
                <div class="product-header">
                    <img src="./images/hoodie.jpg" alt="hoodiee">
                    <ul class="icons">
                        <span><i class="bx bx-heart" ></i></span>
                        <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span>
                        </a>
                      <a href="product-details.php"> <span><i class="bx bx-search"></i></span> </a>
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.php">
                        <h3>Boy’s Hoodiee</h3>
                    </a>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">650Rs/-</h4>
                </div>
            </div>
        <div class="product">
                <div class="product-header">
                    <img src="./images/bluetop.jpg" alt="blue offsholder">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Boy’s Trackpantt</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">300Rs/-</h4>
                </div>
            </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/product-8.jpg" alt="watch blk">
            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
               <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s Wrist Watch</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">1250Rs/-</h4>
          </div>
        </div>
      <!--  <div class="product">
          <div class="product-header">
            <img src="./images/pic4.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">200Rs/-</h4>
          </div>
        </div> -->
      </div>
    </section>

    <!--Latest -->
    <section class="section featured">
      <div class="title">
        <h1>Latest Products</h1>
      </div>

      <div class="product-center container">
                   <div class="product">
                <div class="product-header">
                    <img src="./images/pinktop.jpg" alt="white crop top">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                         <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Girl’s Top</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">250Rs/-</h4>
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/blueshorts.jpg" alt="short pant">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-shopping-bag"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Girk's Shorts</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">350Rs/-</h4>
                </div>
            </div>
         <div class="product">
                <div class="product-header">
                    <img src="./images/blktshirt.jpg" alt="blk">
                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span>
                        </a>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.php">
                        <h3>Boy’s T-Shirt</h3>
                    </a>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">400Rs/-</h4>
                </div>
            </div>
         <div class="product">
                <div class="product-header">
                    <img src="./images/pic6.jpg" alt="black Jeans">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Boy’s Trackpantt</h3>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">950Rs/-</h4>
                </div>
            </div>
     
        <div class="product">
          <div class="product-header">
            <img src="./images/pic1.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">200Rs/-</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic3.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
             <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">200Rs/-</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic2.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
               <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s T-Shirt</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">200Rs/-</h4>
          </div>
        </div>
        <div class="product">
          <div class="product-header">
            <img src="./images/pic5.jpg" alt="">

            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
                <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="#"><h3>Boy’s Shoes</h3></a>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bx-star"></i>
            </div>
            <h4 class="price">150Rs/-</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Banner -->
    <section class="section">
      <div class="product-banner">
        <div class="left">
          <img src="./images/test.jpg" alt="product banner" />
        </div>
        <div class="right">
          <div class="content">
            <h2><span class="discount">70% </span> SALE OFF</h2>
            <h1>
              <span>Collect Your</span>
              <span>Kids Collection</span>
            </h1>
				 <a href="product.php" class="btn">Products</a> 
		<!--  	<a href="product.html" class="btn">
                <button>Shop now</button>
            </a>
          <a  href="#" id="myButton" class="btn" >Shop now </a> 
			 <a href="product.html" class="btn">Products</a>  --> 
          </div>
        </div>
      </div>
    </section>
<!--<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "www.yoursite.com";
    };
	
	type="submit" onClick="myFunction()" 
</script> -->
    <!-- Testimonials -->
    <section class="section">
      <div class="testimonial-center container">
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="./images/profile1.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="./images/profile2.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="./images/profile3.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
      </div>
    </section>

    <!-- Brands -->
    <section class="section">
      <div class="brands-center container">
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="./images/brand2.png" alt="" />
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Dream House, Dreammy street, 7131 Dreamville, USA
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            company@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Dream City, USA
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
</body>

</html>
