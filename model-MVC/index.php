<?php

require_once 'controllers/Controller.php';

$controller = new Controller();

if (!isset($_GET['page'])){
    $controller->listPosts();
    require_once 'views/posts-list.php';
}elseif ($_GET['page'] === 'post'){
    $controller->linkOnePost();
    require_once 'views/post-show.php';
}
