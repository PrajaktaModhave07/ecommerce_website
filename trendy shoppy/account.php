

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

    <!-- Hero -->
    <img src="./images/banner.png" alt="banner img"  class="hero-img" />

    <div class="hero-content">
     <!-- <h2><span class="discount">70% </span>Create Account</h2> -->
	 <h2><span class="discount">you are allready  </span>logged in...</h2> 
      <h1>
        <span>log out from here..</span>
      </h1>
	                   
					   <a href="logout.php" class="btn">Logout</a>
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

<!--

include('config.php');

session_start();

if(isset($_POST['submit']))
{
  
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  
  $sql = "SELECT * FROM  login WHERE email='$email' AND password= '$password' ";
   $result = mysqli_query($conn, $sql);
   
   if($result->num_rows >0 ){
   $row = mysqli_fetch_assoc($result);
   $_SESSION['username'] = $row['username'];
   
   }else{
   echo "<script>alert('OPPs  email or password is wrong')</script>";
   }
  
  if($password == $cpassword)
  {
  $sql = " INSERT INTO signup (username , email, password) VALUES ('$username', '$email' , '$password')";
  $result = mysqli_query($conn, $sql);
  
  if($result){
	  echo "<script>alert('wow! its successfull !')</script>";
  }
  else{
	   echo "<script>alert('something went wrong!')</script>";
  }
  }
  else{
  
  echo "<script>alert('password is not matching')</script>";
  }
 
  
}
header("Location: welcome.php");

 -->
