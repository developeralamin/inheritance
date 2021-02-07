<?php 

class Vehicle{
  
  public $capacity=15;

  public function fuelAmount(){
  	return 12;
  }
  public function Capacity(){
  	 return $this->capacity;
  }
  public function Braekd(){
  	echo "Crushed";
  }

  public function message(){
  	echo "welcome to our TATA motors";
  }

}

