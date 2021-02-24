<?php

require_once 'Modele.php';

class Photos
{
    use Modele;

    public function getPhotosList()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM photos');
        }
        $photos = [];
        while ($photo = $stmt->fetchObject('Photo')) {
            $photos[] = $photo;
        }

        return $photos;
    }

}