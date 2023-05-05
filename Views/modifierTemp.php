<?php
include '../Controller/productC.php';
$produitsC = new produitsC();
$id = $_GET["id"];
$produits = $produitsC->getProduct($id);
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
  

    </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modifier Produits</h4>
                    <form  method="post" id="myForm" class="myForm" action="modifierF.php?id=<?php echo $produits['id_produit']; ?>">
                      <div class="form-group">
                        <label for="marque">Marque</label>
                        <input type="text" class="form-control" id="marque" placeholder="Marque" name="marque" value="<?php echo $produits['marque']; ?>">
                        <span id="errormarque"></span> 
                      </div>
                      <div class="form-group">
                        <label for="modele">Modele</label>
                        <input modele="text" class="form-control" id="modele" placeholder="Modele" name="modele" value="<?php echo $produits['modele']; ?>">
                        <span id="errormodele"></span>
                      </div>
                      <div class="form-group">
                        <label for="prix">Prix</label>
                        <input  class="form-control" id="prix" placeholder="Prix" name="prix" value="<?php echo $produits['prix']; ?>">
                        <span id="errorprix"></span>
                      </div> 
                      <div class="form-group">
                      <?php 
                      include '../Controller/categoryC.php';
                      $categoryC = new categoryC();
                      $resultats = $categoryC->affichercategory();
                      ?>
                         <label for="idcategory">Category</label>
                        <br>
    <select name="idcategory" id="idcategory" required>
        
        <?php foreach ($resultats as $value) { ?>
            <option value="<?php echo $value['idcategory']; ?>"><?php echo $value['titre']; ?></option>
        <?php } ?>
    </select>         </div>
                      </div> 
                      <div class="form-group">
                        <label for="image">Image</label>
                        <input  class="form-control" id="image" placeholder="Image" name="image" value="<?php echo $produits['image']; ?>">
                        <span id="errorimage"></span>
                      </div> 
                      <div id="display-image"></div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Modifier</button>
                      <button class="btn btn-dark" href="modifiersupp.php">Annuler</button>
                    </form>
                    <script> 
                    
                     // cntrl de saisie
                     let myForm = document.getElementById('myForm');
                    
                    myForm.addEventListener('submit' , function(e){
                      let mymarque = document.getElementById('marque');
                      let mymodele = document.getElementById('modele');
                      let myprix = document.getElementById('prix');
                      let myimage = document.getElementById('image');
                    
                      if(mymarque.value=='')
                      {
                        let error = document.getElementById('errormarque');
                        error.innerHTML = "Le champs marque est requis";
                        error.style.color = 'red';
                        e.preventDefault();
                      }
                      if(mymodele.value=='')
                      {
                        let error = document.getElementById('errormodele');
                        error.innerHTML = "Le champs modele est requis";
                        error.style.color = 'red';
                        e.preventDefault();
                      }
                      if(myimage.value=='')
                      {
                        let error = document.getElementById('errorimage');
                        error.innerHTML = "Le champs image est requis";
                        error.style.color = 'red';
                        e.preventDefault();
                      }
                    
                    });
                    </script>
                  </div>
                </div>
                </div>
              </div>


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