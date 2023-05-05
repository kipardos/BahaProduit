<?php

    require_once     '../Controller/categoryC.php';
    require_once '../Model/category.php' ;
    $categoryC = new categoryC();
    

    if (isset($_POST['idcategory'] ) && isset($_POST['titre']  )) 
    {
        echo $_POST['idcategory'] ;
            $category = new category($_POST['idcategory'] , $_POST['titre'] );
            $categoryC->modifiercategory($category);
            header('Location:affichercategory.php');
    }else
    {
        $a = $categoryC->getcategorybyID($_GET['idcategory']) ;
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

<h1>Modify category</h1>
			<br>
						<form action="" method="POST">
							<table class="table" border="1" align="center">
								<tr>
									<td>
										<label for="idcategory">idcategory:
										</label>
									</td>
									<td><input class="form-control" type="number" name="idcategory" id="idcategory" maxlength="20" value="<?php echo $a['idcategory'];?>"  readonly></td>
								</tr>
								<tr>
									<td>
										<label for="titre">titre:
										</label>
									</td>
									<td><input class="form-control" type="text" value="<?php echo $a['titre'];?>" name="titre" id="titre" maxlength="20"></td>
								</tr>
							   
								<tr>
									<td>
										<input class="btn btn-primary" type="submit" value="Modifier"> 
									</td>
									<td>
										<input class="btn btn-secondary" type="reset" value="Annuler" >
									</td>
								</tr>
							</table>
						</form>
		
<style>

form {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
}

table {
  border-collapse: collapse;
  width: 50%;
  max-width: 600px;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
  text-align: left;
}

.form-control {
  width: 100%;
  padding: 8px;
  box-sizing: border-box;
  border: none;
  border-radius: 4px;
  background-color: #f8f8f8;
}

.btn {
  display: inline-block;
  border: none;
  border-radius: 4px;
  padding: 8px 16px;
  margin-top: 8px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn-secondary {
  background-color: #bbb;
}

.btn:hover {
  background-color: #3e8e41;
}

.btn-secondary:hover {
  background-color: #999;
}

</style>
 
			

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