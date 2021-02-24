<?php

require_once 'User/User.php';
require_once 'User/Seller.php';
require_once 'User/displayFunctions.php';

$user = new User('John', 'Doe');
$seller = new Seller('Laure', 'Dupond', 'JD Incorporated');

displayUserName($user); // Affiche "John Doe"
displayUserName($seller); // Laure Dupond (JD Incorporated)