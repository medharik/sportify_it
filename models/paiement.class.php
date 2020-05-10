<?php 
class Paiement {
//POJO : plain old java object
//datas
private $user; 
private $abonne; 
private $date_de;
private $date_a;
private $tarif_mois;
private $remise;
private $montant; 
private $type_paiement; 
//constructor 
function __construct(string $abonne=null,string $user=null,string $date_de=null,string $date_a=null,string $tarif_mois="",$remise,string $montant="",$type_paiement=""){
$this->abonne=$abonne;
$this->user=$user;
$this->date_de=$date_de;
$this->date_a=$date_a;
$this->tarif_mois=$tarif_mois;
$this->remise=$remise;
$this->montant=$montant;
$this->type_paiement=$type_paiement;
}

//Methodes  magics :
public  __get($abonne_attribut){
return $this->abonne_attribut;
}
public  __set($abonne_attribut,$value){
 $this->abonne_attribut=$value;
}

//methodes
public function ajouter(){
    
}


}




?>