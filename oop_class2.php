<?php
//mastering laravel with eza
class person
{

    public $height;
    public $weight;
    public $name;
    function showName()
    {
        echo $this->name;
    }
}

$man = new person;
//var_dump($man);
$man->name = "Eza";
$man->showName();
