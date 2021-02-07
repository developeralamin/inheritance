<?php 
require 'car.php';
// multilevel inheritance
class Newcar extends Car{

}

$newcar = new Newcar();
echo $newcar->message();



?>