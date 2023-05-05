<?php
include '../Controller/productC.php';
include '../Controller/categoryC.php';
include '../vendor/autoload.php';

use Twilio\Rest\Client;

$produitC=new produitsC();
$categoryC = new categoryC();
$resultats = $categoryC->affichercategory();
if( isset($_POST['marque'])&&isset($_POST['modele']) &&isset($_POST['prix']) &&isset($_POST['image'])&&isset($_POST['idcategory']))
{ 
    $produits = new produits($_POST['marque'],$_POST['modele'],$_POST['prix'],$_POST['image'],$_POST['idcategory']);
    $produitC->addProduct($produits);
    $sid = "ACa84375123538acdb2be7a353105a5eb5";
    $token = "25705c5e0d3f7473071ad762afdfbec4";
    $twilio = new Client($sid, $token);
    //data
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $prix = $_POST['prix'];
    $id_cat = $_POST['idcategory'];
    $message = $twilio->messages
                  ->create("+21655132330", // to
                           [
                               "body" => "Vous Avez ajouter un produit : Marque : $marque | Modele : $modele | Prix : $prix TND | ID Categorie : $id_cat",
                               "from" => "+13203010204"
                           ]
                  );

print($message->sid);
    header('Location: backadmin.php');

} 
else
{
    
echo 'Erreur';
}

?>
