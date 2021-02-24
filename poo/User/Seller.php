<?php

require_once 'User.php';

class Seller extends User
{
    public string $company;

    public function __construct(string $name, string $surname, string $company)
    {
        parent::__construct($name, $surname); // Nous appelons le constructeur de la méthode mère. Comme tout appel de fonction, il faut lui passer les paramètres.
        $this->company = $company;
    }

    public function getDisplayName(): string
    {
        return parent::getDisplayName().' ('.$this->company.')'; // Nous appelons la méthode getDisplaydName de la méthode mère, qui retourne la concaténation du nom et du prénom, à laquelle nous rajoutons l'entreprise.
    }
}