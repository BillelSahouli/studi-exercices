<?php

class User
{
    public string $name;
    public string $surName;

    public function __construct(string $name, string $surName)
    {
        $this->name = $name;
        $this->surName = $surName;
    }

    public function getDisplayName(): string
    {
        return $this->name.' '.$this->surName;
    }
}