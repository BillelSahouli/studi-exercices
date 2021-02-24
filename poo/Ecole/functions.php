<?php
require_once 'Description.php';

function displayDescription(Description $description)
{
    echo '<h3>'.$description->getTitle().'</h3><p>'.$description->getDescription().'</p>';
}