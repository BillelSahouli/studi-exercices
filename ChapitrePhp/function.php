<?php

function greetings(string $name, int $age, array $favoriteLanguages = [])
{
    echo(sprintf("Bonjour, je m'appelle %s et j'ai %d ans. ", $name, $age));

    if (empty($favoriteLanguages)) {
        echo "Je n'ai pas de langage de programmation favori" . PHP_EOL;
    } else {
        echo(sprintf("J'ai %s langages favoris, il s'agit de : %s " . PHP_EOL, count($favoriteLanguages), implode(', ', $favoriteLanguages)));
    } 
    
    echo sprintf('La fonction a été exécutée %s fois' . PHP_EOL, countGreetings());
}

function countGreetings()
{
    static $count = 0;
    
    return ++$count;
}

greetings('Laure', 27, ['PHP', 'Python']);
greetings('Julie', 26);