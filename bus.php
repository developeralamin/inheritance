<?php 
require 'vechile.php';

class Bus extends Vehicle{
 
  public function display(){
  	echo "capacity is :" .$this->capacity .'<br>';
  	// overriding method
  	$this->capacity=40;
  	echo "Welcome to our bus";
  }

}

$bus= new Bus();
$bus->display();
echo "</br>";

echo $bus->Capacity();
$bus->capacity=60;
echo "</br>";
echo $bus->Capacity();

