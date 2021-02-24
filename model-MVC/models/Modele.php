<?php


trait Modele
{
    private PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=book;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            exit('Erreur : ' . $e->getMessage());
        }
    }
}