<?php
include_once('..\config.php');
include '..\Model\produit.php';
class produitsC {
    function showProduct(){
        $sql="SELECT * FROM produits";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function deleteProduct($id_produit){
        $sql=" DELETE FROM produits WHERE id_produit=:id_produit";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_produit' , $id_produit);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function addProduct($produits){

       $sql = "INSERT INTO produits (marque,modele,prix,image,idcategory)
                 VALUES (:marque, :modele, :prix, :image,:idcategory)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'marque'=> $produits->getmarque(),
            'modele'=> $produits->getmodele(),
            'prix'=> $produits->getprix(),
            'image'=> $produits->getimage(),
            'idcategory'=> $produits->getidcategory()

        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifyProduct($id_produit,$produits){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE produits SET marque = :marque, modele = :modele, prix = :prix, image=:image , idcategory = :idcategory WHERE id_produit = :id_produit');
$query->execute([
    'marque'=> $produits->getmarque(),
    'modele'=> $produits->getmodele(),
    'prix'=> $produits->getprix(),
    'image'=> $produits->getimage(),
    'idcategory'=> $produits->getidcategory(),
    'id_produit'=> $id_produit
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function getProduct($id_produit){
    $sql="SELECT * from produits where id_produit=$id_produit";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$produits = $query->fetch();
return $produits;
}catch (Exception $e){
    $e->getMessage();}
}
//pagination 
public function paginationLIMIT($sql)
    {
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
    }  

    public function paginationCOUNTER($sql)
    {
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            $row=$liste->fetch(PDO::FETCH_NUM);
            $total=$row[0];
            return $total;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    } 
        // statics functions

        function count_normal(){

            $sql="SELECT count(id_produit) FROM produits" ;
            $db = config::getConnexion();
            try{
                $query = $db->query($sql);
                $query->execute();
                   $prog_number =$query->fetchColumn();
                return $prog_number;
            }
            catch(Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
        
}
?>