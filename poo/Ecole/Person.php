<?php
require_once 'Description.php';

abstract class Person implements Description
{
    public string $firstName;
    public string $lastName;


    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName()
    {
        return $this->firstName.' '.$this->lastName;
    }

    public function getTitle(): string
    {
        return $this->getFullName();
    }
}
