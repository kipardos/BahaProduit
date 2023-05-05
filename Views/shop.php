<?php
include '../controller/productC.php';

$produitsC = new produitsC();

// pagination 
$per_page_record = 3;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;
/////////Search Form
$sqlSearch="SELECT * FROM produits LIMIT $start_from, $per_page_record";
$query = $produitsC->paginationLIMIT($sqlSearch);
////////////COUNTER
$sql = "SELECT COUNT(*) FROM produits";
$total_recordse=$produitsC->paginationCOUNTER($sql);
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
            <li><a href="admindashboardmain.php" >Admin</a></li>
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

<a   href="affichercategory.php" >Category</a>
<section id="product1"class="section-p1">
<div class="pro-container">
<?php
    include_once '../Controller/categoryC.php';

    $categoryC = new CategoryC();

    foreach ($query as $produits) {
        // Get the category details for the current product
        $categoryId = $produits['idcategory'];
        $category = $categoryC->getCategoryById($categoryId);
        $categoryTitle = $category['titre'];

        // Output the product details in a table row
        ?>
<div class="pro" onclick="window.location.href='sproduct.html';"">
<img src="img/products/<?php echo $produits['image']; ?>" alt="">
<div class="des">
    <h5> marque :<?php echo $produits['marque']; ?>
    </h5>
    <br>
    <span>category:  <?php echo $categoryTitle; ?>
    </span>
    <br>
    <span> modele :<?php echo $produits['modele']; ?></span>
    
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
</div>
<h4><?php echo $produits['prix']; ?>DT</h4>
</div>  
<i class="fas fa-shopping-cart cart"></i>

</div> 
<?php
                            }
                            ?>
      
    
    </div>
    
    
    </section>
    <style>
.pagination {
  padding-left: 0%;
  justify-content: center;
  align-items: center;
  margin: 20px 0;
}

.pagination a {
  color: #0da487;
  background-color: #FFFFFF;
  border: 1px solid #0da487;
  border-radius: 4px;
  padding: 8px 16px;
  margin: 0 4px;
  text-decoration: none;
}

.pagination a:hover {
  background-color: #0da487;
  color: #FFFFFF;
  text-decoration: none;
}

.pagination .active {
  color: #FFFFFF;
  background-color: #0da487;
  border: 1px solid #0da487;
  border-radius: 4px;
  padding: 8px 16px;
  margin: 0 4px;
  text-decoration: none;
}

                                            </style>
                                            <div class="pagination" style="padding-left:40%;">    
      <?php      
        $total_records =$produitsC->paginationCOUNTER($sql);      
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='shop.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='shop.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='shop.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='shop.php?page=".($page+1)."'>  Next </a>";   
        }  
  
      ?>    
      </div>  





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