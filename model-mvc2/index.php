<?php
require_once "/wamp64/www/studi-exercices/model-mvc2/controleurs/PhotoController.php";

$controller = new PhotoController();

if (!isset($_GET['page'])){
    $controller->listerPhoto();
}elseif ($_GET['page'] === 'photo'){

    $controller->afficherPhoto();
    require_once "/wamp64/www/studi-exercices/model-mvc2/views/affiche-photo.php";
}
