<?php
    require '../Controller/categoryC.php';

    $categoryC = new categoryC();
    $category = $categoryC->affichercategory();
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
  

    <h4 class="card-title">Listes De Category</h4>
    <input type="text" class="recherche" name="" id="myInput" placeholder="cherhcer" oninput="searchFun()">
                    <div class="table-responsive">
						<table class="table" border='2' id="table_id">
							<tr>
								<th>idcategory</th>
								<th>titre</th>
							  </tr>
									<?php 
											foreach ($category as $category) {
									?>
							  <tr>
								<td><?php echo $category['idcategory'] ; ?></td>
								<td><?php echo $category['titre'] ; ?></td>
							
								<td><a href="supprimercategoryadmin.php?idcategory=<?php echo $category['idcategory'] ; ?>"><img src="../Assets/Images/supp.png" witdh='25px' height='25px'></a></td>
								<td><a href="modifiercategoryadmin.php?idcategory=<?php echo $category['idcategory'] ; ?>">modifier</a></td>
							  </tr>
									<?php
											}
									?>
						</table>
            <script>
                                                function searchFun() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("table_id");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        // loop through all the td elements of the current row
        for (j = 0; j < tr[i].cells.length; j++) {
            td = tr[i].cells[j];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break; // exit the loop if a match is found
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
}
                                            </script>
						</div>
                  </div>
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