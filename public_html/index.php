<?php
require_once __DIR__ . "/Nerdweb/Database.php";
require_once __DIR__ . "/Nerdweb/Noticias.php";

use Nerdweb\Noticias;

$configDB = [
    "host" => "localhost",
    "database" => "nerdweb",
    "user" => "root",
    "password" => "d3f3ns0r1a"
];
$database = new \Nerdweb\Database($configDB);

$noticias = Noticias::getNoticias();

include __DIR__."/Includes/header.php";
include __DIR__ . "/Includes/List.php";
include __DIR__."/Includes/footer.php";


//$fields = ["name","quote"];
//
//$values = ["Dude","Isso que nao pode"];
//
//$name_teste = ["name"];
//
//$value_teste = ["Dude"];
//
//$new_teste = ["Formio"];


#$insert = $database->insertPrepared("sample",$fields,$values);


#$select = $database->selectPrepared("sample",$name_teste,$value_teste,"","","");


#$update = $database->updatePrepared("sample",$name_teste,$new_teste,$name_teste,$value_teste);