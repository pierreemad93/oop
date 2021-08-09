<?php
require "vendor/autoload.php";
use app\DisplayCar;




$fiat = new DisplayCar("Fiat" , "Black");
$fiat->coloring = "red" ;
echo "<pre>";
print_r ($fiat);
echo  "</pre>";    




/*spl_autoload_register(function($class){
   require "app/car".$class. ".php";
   
});*/


?>
