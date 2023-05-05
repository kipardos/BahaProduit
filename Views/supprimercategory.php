<?php
    require '../Controller/categoryC.php';

    $categoryC = new categoryC();
    $categoryC->supprimercategory($_GET['idcategory']);
    header('Location:affichercategory.php');
?>