<?php

declare(strict_types=1);

use Bevrage as GlobalBevrage;

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

class Bevrage
{

    private $color;
    private $price;
    private $temperature;
    const barman = "Het Vervolg";


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

$myclass = "Bevrage";

echo "<br>";

echo "<br>";

echo $myclass::barman;
