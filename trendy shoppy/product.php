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
    <title>Boy’s T-Shirt</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
            <div class="logo">
                <h1>Trendy Shoppy</h1>
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
              <a href="index.php" class="nav-link">Account</a>
            </li>
			 <li class="nav-item">
               <a href="logout.php" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
              <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
            </li>
          </ul> 
            </div>

            <a href="cart.html" class="cart-icon">
                <i class="bx bx-shopping-bag"></i>
            </a>

            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>All Products</h1>
            <form>
                <select>
                    <option value="1">Defualt Sorting</option>
                    <option value="2">Sort By Price</option>
                    <option value="3">Sort By Popularity</option>
                    <option value="4">Sort By Sale</option>
                    <option value="5">Sort By Rating</option>
                </select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>
        </div>

        <div class="product-center container">
            <div class="product">
                <div class="product-header">
                    <img src="./images/blktshirt.jpg" alt="blk">
                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                          <a href="checkout.php">  <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a></a>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.html">
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
                    <img src="./images/hoodie.jpg" alt="Hoodiee">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                         <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Boy’s Hoodiee</h3>
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
                    <h4 class="price" value="950">950Rs/-</h4>
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
            <div class="product">
                <div class="product-header">
                    <img src="./images/whcroptop.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                         <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Girl's Croptop</h3>
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
                         <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
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
                    <img src="./images/blkskirt.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                         <a href="checkout.php"> <span><i class="bx bx-shopping-bag"></i></span></a>
                        <span><i class="bx bx-search"></i></span>
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
        </div>
    </section>

    <section class="pagination">
        <div class=" container">
             <a href="product.html"><span>1</span></a>
			 <a href="product1.html"><span>2</span></a>
			 <a href="product.html"><span>3</span></a>
			 <a href="product.html"><span>4</span></a>
            <span><i class='bx bx-right-arrow-alt'></i></span>
        </div>
    </section>



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