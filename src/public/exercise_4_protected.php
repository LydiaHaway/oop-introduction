<?php

declare(strict_types=1);

use Bevrage as GlobalBevrage;

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/

class Bevrage
{

    protected $color;
    protected $price;
    protected $temperature;


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
}

class Beer extends Bevrage
{
    protected $name;
    protected $alcoholPercentage;

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

    /* public function getName(): string
    {
        return $this->name;
    } */

    public function setAlcoholPercentage($alcoholPercentage)
    {
        $this->alcoholPercentage = $alcoholPercentage . " %";
    }

    /* public function getAlcoholPercentage(): string
    {
        return $this->alcoholPercentage;
    } */

    //________________________

    protected static function beerInfo($beer)
    {
        return " Hi i'm " . $beer->getName() . " have an alcochol percentage of " . $beer->getAlcoholPercentage() . " and I have a " . $beer->getColor() . " color. ";
    }

    public function getBeerInfo($beer)
    {
        return $this->beerInfo($beer);
    }
}


$Duvel = new Beer("blond", 3.5, "", "Duvel", 8.5);

echo $Duvel->getColor();

echo "<br>";

echo $Duvel->getinfo();

echo "<br>";

echo $Duvel->getName();

echo "<br>";

echo $Duvel->getAlcoholPercentage();

$Duvel->setColor("light");

echo "<br>";

echo $Duvel->getColor();

echo "<br>";

echo $Duvel->getBeerInfo($Duvel);
