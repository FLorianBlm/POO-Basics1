<?php
// index.php
require_once 'Car.php';

//create two car
$batCar = new Car('Black', 2, 'fuel');
var_dump($batCar);

$jokeCar= new car('green', 1, 'fuel');
var_dump($jokeCar);

/**
 * start car and go away!
 */
$batCar->start();
$batCar->forward();
var_dump($batCar);

/**
 * brake to stop Joke
 */
$batCar->brake();
var_dump($batCar);