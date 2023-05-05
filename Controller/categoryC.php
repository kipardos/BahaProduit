<?php

include_once('..\config.php');
    require_once '../Model/category.php';


    Class categoryC {

        function affichercategory()
        {
            $requete = "select * from category";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function getcategorybyID($idcategory)
        {
            $requete = "select * from category where idcategory=:idcategory";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idcategory'=>$idcategory
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajoutercategory($category)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO category 
                (idcategory,titre)
                VALUES
                (:idcategory,:titre)
                ');
                $querry->execute([
                    'idcategory'=>$category->getidcategory(),
                    'titre'=>$category->gettitre(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifiercategory($category)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE category SET
                titre=:titre 
                where idcategory=:idcategory
                ');
                $querry->execute([
                    'idcategory'=>$category->getidcategory(),
                    'titre'=>$category->gettitre(),

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimercategory($idcategory)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM category WHERE idcategory =:idcategory
                ');
                $querry->execute([
                    'idcategory'=>$idcategory
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>