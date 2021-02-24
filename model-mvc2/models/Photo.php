<?php
require_once 'Modele.php';

class Photo
{
    private int $id;
    private string $file;
    private string $title;

    use Modele;

    public function getPhoto(int $id)
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->prepare('SELECT * FROM photos WHERE id = ?');
        }
        $photo = null;
        if ($stmt->execute([$id])) {
            $photo = $stmt->fetchObject('Photo');
            if (!is_object($photo)) {
                $photo = null;
            }
        }

        return $photo;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

}