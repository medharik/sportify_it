<?php 
include("models/utils.class.php");
Utils::connecter_db();
Utils::$TABLE="users";
Utils::add($_POST);

?>