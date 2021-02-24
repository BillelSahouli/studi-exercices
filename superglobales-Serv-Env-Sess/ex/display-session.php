<?php
session_start();
// is just a simple verification of session we start the session with the file infosUser.php
if (isset($_SESSION['name']) && isset($_SESSION['age']) && isset($_SESSION['favoriteLangages'])) {

    echo sprintf("Bonjour, je m'appelle %s et j'ai %s ans .", $_SESSION['name'], $_SESSION['age']) ;
    $langage = "";

    foreach($_SESSION['favoriteLangages'] as $langages)
    {
     $langage .= " ".$langages;
    }
    echo sprintf("Mes langages de programmation préférés sont %s ",$langage ); 

}else {

    echo "Qui ete vous ?";
}
session_destroy()
?>