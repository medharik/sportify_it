<?php
include("models/utils.class.php");
//$cnx=Utils::connecter_db();// en php on utilise :: pour les static et les constantes  Utils::TVA
// var_dump($cnx);
Utils::$TABLE='users';
// Utils::supprimer(1);

// $data=['libelle'=>'hp','prix'=>9000,'qte'=>8];
// // $sql="insert into $table (libelle,prix,qte) values (?,?,?)";
// // $sql="insert into $table ($str_keys) values (?,?,?)";
//   $keys= array_keys($data);//['libelle','prix','qte'] =>(join) libelle,prix,qte
// // var_dump($keys);
// // print_r($keys);
// $str_keys=join(",",$keys);// libelle,prix,qte
// // echo ($str_keys);
// $t= [1,2,3];// =>[2,4,6] 
// //closure
// $fct=function ($v){ 
//     return "?";
//  };
// $intero=array_map($fct,$data);
//    $interogation=join(",",$intero);
// //    echo $interogation;
// $table ="produit";
// $sql="insert into  $table($str_keys) values ($interogation)";

?>