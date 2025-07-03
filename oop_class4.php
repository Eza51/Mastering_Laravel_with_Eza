<?php
//Mastering Laravel With Eza
//function myCar($a , $b){
    //return $a+$b;
//}

//echo myCar(8,10);


class myCar{
    public $brand = "Toyota";
    public $color = "Red";
    public $year = "2019";
    
    
    
    
    public function myNewCar(){
        echo "My new car is " . $this->brand ." Color is ". $this->color. " " ."Year :". $this->year;
    }
}

$myCar = new myCar;

$myCar->myNewCar();

?>