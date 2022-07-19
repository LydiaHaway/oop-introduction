<?php

declare(strict_types=1);

/* EXERCISE 7
Copy your solution from exercise 6
TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Rue Bruce Dickinson 9, 4000 Liège".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere! */

class Bevrage
{

    private $color;
    private $price;
    private $temperature;
    const barman = "The Trooper";
    static $adress = "Rue Bruce Dickinson 9, 4000 Liège";


    public function __construct($color, $price, $temperature)
    {

        $this->color = $color;

        if (!is_float($price)) {
            exit;
        } else {
            $this->price = $price . " €";
        }


        if (!empty($temperature)) {
            $this->temperature = $temperature;
        } else {

            $this->temperature = "cold";
        }
    }

    //_______________

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setPrice($price)
    {
        $this->price = $price . " €";
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    //______________________

    public function getinfo(): string
    {
        return "This bevrage is $this->temperature and $this->color";
    }

    //________________________

    function showConst()
    {
        echo  self::barman;
    }
}

class Beer extends Bevrage
{
    private $name;
    private $alcoholPercentage;

    public function __construct($color, $price, $temperature, $name, $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);

        $this->name = $name;

        if (!is_float($alcoholPercentage)) {
            exit;
        } else {
            $this->alcoholPercentage = $alcoholPercentage . " %";
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAlcoholPercentage($alcoholPercentage)
    {
        $this->alcoholPercentage = $alcoholPercentage . " %";
    }

    public function getAlcoholPercentage(): string
    {
        return $this->alcoholPercentage;
    }

    function showConst()
    {
        echo  self::barman;
    }
}

$cola = new Bevrage("black", 2.0, "");

echo $cola->getinfo();

echo "<br>" . $cola->getTemperature();

echo "<br>" . $cola->getPrice() . "<br>";

$Duvel = new Beer("blond", 3.5, "", "Duvel", 8.5);

echo "<br>" . $Duvel->getColor() . "<br>";

echo $Duvel->getinfo();

echo "<br>" . $Duvel->getName();

echo "<br>" . $Duvel->getAlcoholPercentage();

echo "<br>";

echo "<br>";

echo Bevrage::barman;

echo "<br>";

$cola->showConst();

echo "<br>";

$Duvel->showConst();

echo "<br>";

echo $Duvel::$adress;
