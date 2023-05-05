<?php
class produits{
    private int $id_produit;
    private string $marque;
    private string $modele;
    private float $prix;
    private string $image;
    private int $idcategory;

    public function __construct($marque, $modele, $prix, $image,$idcategory){
        $this->marque=$marque;
        $this->modele=$modele;
        $this->prix=$prix;
        $this->image=$image;
        $this->idcategory=$idcategory;
    }




    
    public function getid_produit(){
        return $this->id_produit;
    }
    public function getmarque(){
        return $this->marque;
    }
    public function getmodele(){
        return $this->modele;
    }
    public function getprix(){
        return $this->prix;
    }
    public function getimage(){
        return $this->image;
    }
    public function getidcategory(){
        return $this->idcategory;
    }



    public function setmarque( $marque){
        $this->marque=$marque;
    }
    public function setmodele( $modele){
        $this->modele=$modele;
    }
    public function setprix( $prix){
        $this->prix=$prix;
    }
    public function setimage( $image){
        $this->image=$image;
    }
    public function setidcategory( $idcategory){
        $this->idcategory=$idcategory;
    }
}

?>