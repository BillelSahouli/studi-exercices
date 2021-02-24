<?php
require_once "display/list.php";

$data = ['Chaque élément', 's\'affiche', 'sur une ligne'];
$dataToDisplay = displayList($data);

include 'html/page.php';
?>