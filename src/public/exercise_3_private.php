<?php

declare(strict_types=1);

use Beer as GlobalBeer;

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

class Bevrage
{

    private $color;
    private $price;
    private $temperature;


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

    //________________________

    private static function beerInfo($beer)
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
