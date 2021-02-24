<?php
require_once 'Modele.php';

class Posts
{
    use Modele;

    public function posted()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT id, title, image FROM post');
        }
        $posts = [];
        while ($post = $stmt->fetchObject('Post')) {
            $posts[] = $post;
        }
        return $posts;
    }
}
