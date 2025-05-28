<?php
//mastering laravel with eza
class person
{

    public $height;
    public $weight;
    public $name; 
    private $income;
    function showName()
    {
        echo $this->name;
    }
}

$man = new person;
//var_dump($man);
$man->income;
$man->name = "Eza";
$man->showName();



?>