<?php 
require 'vechile.php';

class Truck extends Vehicle{
	public function message(){
		parent::message();
		echo "</br>";
     echo "Welcome to our toyoto motors";
	}
}
$truck = new Truck();
$truck->message();

