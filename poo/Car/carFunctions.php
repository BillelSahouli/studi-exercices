<?php
require_once 'Car.php';

function displayCharacteristics(Car $car): void
{
    echo '<ul>';
    foreach ($car->getCharacteristics() as $name => $value){
        echo '<li>'.$name.' : '.$value.'</li>';
    }
    echo '</ul>';
}