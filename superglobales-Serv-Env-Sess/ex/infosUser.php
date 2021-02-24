<?php
session_start();
//I declare key and value for my session. Look the file display-session.php
    $_SESSION['name']= 'billel';
    $_SESSION['age']= 26 ;
    $_SESSION['favoriteLangages'] = ['PHP', 'HTML', 'CSS'];
?>