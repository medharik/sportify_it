<?php
//autoloading (chargement (include) automatique des classes )
spl_autoload_register(function($class){
require "models/".strtolower($class).".class.php";
});
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
// $data=['libelle'=>'hp','prix'=>4000];
// update produit set libelle=? , prix =? where id=?
// $str_keys=join(",",array_keys($data));
// $in=function ($v){
// return "$v=?";
// };
// $keys=array_keys($data);//['libelle','prix'] =>['libelle=?','prix=?']
// // var_dump($keys);
// $tab_intro=array_map($in,$keys);
// // print_r($tab_intro);
// //['libelle=?','prix=?'] => libelle=? , prix=?
// $sets=join(",",$tab_intro);
// echo $sets;
 Utils::connecter_db();
// Utils::$TABLE='users';
$user=['login'=>'ali','nom'=>'alami','email'=>'ali@gmail.com','passe'=>12345,'role'=>'admin'];
// Utils::update($user,2);
User::delete(2);


?>