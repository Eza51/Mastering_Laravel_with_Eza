<?php
//Mastering Laravel With Eza

class car{
    public static $brand = "toyota";
    public static $color = "red";
    
    public $year = "2019";
    
    public static function newCar(){
        echo "my car" . " " . self::$brand . " is " . self::$color . "\n";
    }
    
    public function normalFunction(){
        echo "normal function the year of my car is  " . $this->year;
    }
    
}

car::newCar();

$newCar = new car;
$newCar->normalFunction();

?>