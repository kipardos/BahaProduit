<?php

    require_once     '../Controller/categoryC.php';
    require_once '../Model/category.php' ;

   
  

    if (isset($_POST['titre'] )) 
    {
            $category = new category(NULL, $_POST['titre'] );
            $categoryC = new categoryC();
            $categoryC->ajoutercategory($category);
            header('Location:affichercategory.php');
    }


  
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
            <li><a   href="index.html" >Home</a></li>
            <li><a class="active" href="shop.html" >Shop</a></li>
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

<div class="form-container">
<form action="" method="POST" onsubmit="return verif();" >
<br>
<h1>add category</h1>
	
	<div class="form-group">
		<label for="titre">titre:</label>
		<input type="text" class="form-control" name="titre" id="titre" maxlength="20" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary" onclick="verif()">Envoyer</button>
<br>
		<button type="reset" class="btn btn-secondary">Annuler</button>
	</div>
</form>	</div>
<style>
	.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.table {
  width: 400px;
}
h1 {color:black;}

td {
  padding: 10px;
}

input[type="text"], input[type="submit"], input[type="reset"] {
  width: 100%;
  padding: 8px;
  box-sizing: border-box;
  border: none;
  background-color: #f2f2f2;
  font-size: 16px;
}

input[type="submit"], input[type="reset"] {
  margin-top: 10px;
}

input[type="submit"]:hover, input[type="reset"]:hover {
  background-color: #ddd;
  cursor: pointer;
}
	.form-group {
	margin-bottom: 20px;
}
label {
	display: block;
	margin-bottom: 5px;
	font-weight: bold;
}
input[type="text"] {
	width: 100%;
	padding: 10px;
	border-radius: 5px;
	border: 1px solid #ccc;
}
button[type="submit"], button[type="reset"] {
	padding: 10px 20px;
	border-radius: 5px;
	border: none;
	color: #fff;
	cursor: pointer;
}
button[type="submit"] {
	background-color: #007bff;
}
button[type="reset"] {
	background-color: #6c757d;

}
</style>
				
<script src="js.js"></script>
  
			

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
</html>	</body>
</html>