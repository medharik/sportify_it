<?php 

class Utils {
// connection 
public static  $_CNX=NULL;// attribut de la classe 
const TVA=20;
public static  $TABLE ='abonne'; 
public    static function connecter_db() {
    try{
        $options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
        // creation d'un singleton pattern
        if(!self::$_CNX){
            self::$_CNX=  new PDO ("mysql:host=localhost;dbname=sportify_db_2020;port=3306;charset=utf8","root","",$options);
        }
            return self::$_CNX;
    }catch(PDOException $e ){
        die ("erreur de connexion a la base de donnees ".$e->getMessage());
    }
}



//delete 
public static  function supprimer($id){
    try{
  
        $rp=self::$_CNX->prepare("delete from ".self::$TABLE." where id=?");
        $rp->execute([$id]);
}catch(PDOException $e ){
die ('erreur de suppression  de  '.SELF::$TABLE.' dans  la base de donnees '.$e->getMessage());
}
}

//all

public static function all(){
    try{
       
         $rp=self::$_CNX->prepare("select * from ".SELF::$TABLE." order by id  desc");
         $rp->execute();
     $resultat=  $rp->fetchAll();  

     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recuperation des ".SELF::$TABLE." dans  la base de donnees ".$e->getMessage());
 }

}
// find by id
public static function find($id){
    try{
         $rp=self::$_CNX->prepare("select * from ".SELF::$TABLE." where id=?");
         $rp->execute([$id]);
     $resultat=  $rp->fetch();  

     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recuperation des ".SELF::$TABLE."  d'id =$id dans  la base de donnees ".$e->getMessage());
 }

}

//findBy
// findBy("prix>2000")
public static function findBy($condition){
    try{
         $rp=self::$_CNX->prepare("select * from ".SELF::$TABLE." where $condition order by id  desc");
         $rp->execute();
        $resultat=  $rp->fetchAll();  

     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recuperation des ".SELF::$TABLE." dans  la base de donnees ".$e->getMessage());
 }

}
//add


// update







}



?>