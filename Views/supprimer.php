<?php
include '../controller/productC.php';

$produitsC = new produitsC();
$produitsC->deleteProduct($_GET["id"]);

header('Location: modifiersupp.php');

?>


