<?php
include '../Controller/productC.php';


$id = $_GET["id"];
$produitsC=new produitsC();
if(
    isset($_POST['marque'])&&isset($_POST['modele']) &&isset($_POST['prix']) &&isset($_POST['image']) &&isset($_POST['idcategory'])
    
){
    $produits = new produits($_POST['marque'],$_POST['modele'],$_POST['prix'],$_POST['image'],$_POST['idcategory']);
    $produitsC->modifyProduct($id, $produits);
}
else
echo 'erreur';
header('Location: modifiersupp.php');
?>