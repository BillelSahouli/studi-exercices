<?php
require_once "/wamp64/www/studi-exercices/model-mvc2/models/Photos.php";
require_once "/wamp64/www/studi-exercices/model-mvc2/models/Photo.php";
class PhotoController
{
    private Photos $photosObject;
    private Photo $photoObject;

    public function __construct()
    {
        $this->photosObject = new Photos();
        $this->photoObject = new Photo();
    }

    public function listerPhoto()
    {
        $photos = $this->photosObject->getPhotosList();
        require_once "/wamp64/www/studi-exercices/model-mvc2/views/liste-photos.php";
    }

    public function afficherPhoto()
    {
        $photo = null;
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $photo = $this->photoObject->getPhoto();
        }
        require_once "/wamp64/www/studi-exercices/model-mvc2/views/affiche-photo.php";
    }
}