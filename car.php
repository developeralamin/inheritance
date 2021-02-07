<?php 
require 'vechile.php';
// inheritance 
class Car extends Vehicle{
	
   // method overridding
	public function fuelAmount(){
		return 50;
	}
}
// $car= new Car();
// echo $car->fuelAmount();
