<?php
    require '../Controller/categoryC.php';

    $categoryC = new categoryC();
    $category = $categoryC->affichercategory();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culturize.tn</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" ></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
   
   <section id="header"> 
    <a href="#"><img src="logo.png" class="logo" alt=""> </a>
    <div>
        <ul id="navbar">
        <li><a   href="modifiersupp.php" >Panel</a></li>
            <li><a   href="shop.php" >Home</a></li>
            <li><a class="active" href="shop.php" >Shop</a></li>
            <li><a href="blog.html" >Blog</a></li>
            <li><a href="about.html" >About</a></li>
            <li><a href="contact.html" >Contact</a></li>
            <li id="lg-bag"><a href="cart.html" > <i class="fas fa-shopping-cart cart"></i></a></li>
            <li> <a href="login.html "><i class='bx bx-user-circle'></i></a></li>
            <a href="#" id="close"> <i class="far fa-times "> </i></a>
        </ul>

    </div>
    <div id="mobile">
        
    <a href="cart.html" > <i class="fas fa-shopping-cart cart"></i></a>

    <i id="bar" class ="fas fa-outdent"> </i>
</div>
   </section>
   <section id="page-header">
   <h2>Le meilleur choix des produits et services en Tunisie</h2>
   <p>Economisez plus avec des coupons et jusqu'à 70% de réduction</p>
</section>
<style>
	table {
	  border-collapse: collapse;
	  width: 100%;
	  margin-top: 20px;
	}

	th, td {
	  text-align: center;
	  padding: 8px;
	  font-size: 16px;
	  border: 1px solid black;
	}

	th {
	  background-color: #ccc;
	  color: #000;
	}

	td img {
	  width: 25px;
	  height: 25px;
	}

	a {
	  text-decoration: none;
	  font-weight: bold;
	  color: blue;
	}

	a:hover {
	  color: red;
	}

	.back-link {
	  display: inline-block;
	  margin-bottom: 20px;
	}
</style>

<div class="back-link">
  <a href="shop.php">Back to shop</a>
  <br>
  <a href="ajoutercategory.php">Add category</a>
</div>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($category as $category) { ?>
    <tr>
      <td><?php echo $category['idcategory']; ?></td>
      <td><?php echo $category['titre']; ?></td>
      <td>
        <a href="supprimercategory.php?idcategory=<?php echo $category['idcategory']; ?>">
          <img src="../Assets/Images/supp.png" alt="Delete" />
        </a>
        <a href="modifiercategory.php?idcategory=<?php echo $category['idcategory']; ?>">
          Edit
        </a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

			

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p> Get E-mail updates about our latest shop and <span>special offers.</span>
        </p>
    </div>
<div class="form">
<input type="text" placeholder="Your email address">
<button class="normal">Sign Up</button>
</div>
</section>

 <footer class="section-p1">
    <div class="col">
        <img class="logo" src="logo.png" alt="">
        <h4>Contact</h4>
        <p>
            <strong>Address:</strong> 562 WELINGTOM ROAD, STREET 32, SAN FRANCISCO
        </p> 
        <p>
            <strong>Phone:</strong> +01 2222 356 / (+91) 01 2345 6789
        </p>
        <p>
            <strong>Hours:</strong> 10:00 - 18:00, Mond - Sat
        </p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>      
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Condition</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>
    <div class="col install">
        <h4>Install APP</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="img/pay/app.jpg" alt="">
            <img src="img/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/pay.png" alt="">
    </div>
    <div class="copyright">
        <p> 2023, Tech2 etc - HTML CSS Ecommerce Template</p>
    </div>
 </footer>

<script src="script.js"></script>

</body>
</html>	