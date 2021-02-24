<?php

require_once 'User.php';

function displayUserName(User $user): void
{
    echo 'Connecté en tant que : ' . $user->getDisplayName().'<br>';
}