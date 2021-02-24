<?php

require_once 'Modele.php';

class Post
{
    private int $id;
    private string $title;
    private string $file;

    use Modele;

    public function post(int $id): int
    {
        if (!is_null($this->pdo)){
            $stmt = $this->pdo->prepare('SELECT id, image, title FROM post WHERE id = ?');
        }
        $postArticle = null;
        if ($stmt->execute(['id'])){
            $postArticle = $stmt->fetchObject('Post');
            if (!is_object($postArticle)){
                $postArticle = null;
            }
        }
        return $postArticle;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getFile(): string
    {
        return $this->file;
    }


}