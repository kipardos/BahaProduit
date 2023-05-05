<?php
    class category
    {
        private $idcategory;
        private $titre;


        function __construct($idcategory, $titre){
			$this->idcategory=$idcategory;
			$this->titre=$titre;
		}

        function setidcategory(string $idcategory){
			$this->idcategory=$idcategory;
		}
        function settitre(string $titre){
			$this->titre=$titre;
		}

        function getidcategory(){
			return $this->idcategory;
		}
        function gettitre(){
			return $this->titre;
		}
      

        
    }
    

?>