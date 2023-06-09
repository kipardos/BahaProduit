<?php

    require_once     '../Controller/categoryC.php';
    require_once '../Model/category.php' ;

   
  

    if ( isset($_POST['titre'] )) 
    {
            $category = new category(NULl, $_POST['titre'] );
            $categoryC = new categoryC();
            $categoryC->ajoutercategory($category);
            header('Location:affichercategoryadmin.php');
    }


  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard - Culturize.tn</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="admindashboardmain.php" class="logo d-flex align-items-center">
        <img src="logo.png" alt="">
        <span class="d-none d-lg-block">Culturize.tn</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="admindashboardmain.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li> 

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Produit</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="modifiersupp.php">
              <i class="bi bi-circle"></i><span>Liste Produit</span>
            </a>
          </li>
          <li>
            <a href="backadmin.php">
              <i class="bi bi-circle"></i><span>Ajouter Produit</span>
            </a>
          </li>
          <li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#s-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="s-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="affichercategoryadmin.php">
              <i class="bi bi-circle"></i><span>Liste Category</span>
            </a>
          </li>
          <li>
            <a href="ajoutercategoryadmin.php">
              <i class="bi bi-circle"></i><span>Ajouter Category</span>
            </a>
          </li>
          <li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="shop.php">
          <i class="bi bi-grid"></i>
          <span>Front</span>
        </a>
      </li> 
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindashboardmain.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div> <!-- End Page Title -->
  
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ajouter Produits</h4>
 
						  <form action="" method="POST" onsubmit="return verif();" >
							<table class="table" border="1" align="center">
								
								<tr>
									<td>
										<label for="titre">titre:
										</label>
									</td>
									<td><input type="text" name="titre" id="titre" maxlength="20" required></td>
								</tr>
								<tr>
									<td>
										<input onclick="verif()" type="submit" value="Envoyer"> 
									</td>
									<td>
										<input type="reset" value="Annuler" >
									</td>
								</tr>
							</table>
						</form>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Culturize.tn</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>