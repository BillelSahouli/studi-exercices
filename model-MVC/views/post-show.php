<?php
$title = 'Mon Article';
if (is_null($post)){
    $content = 'Cela ne mêne vers aucun articles';
}
else{
    ob_start();
    ?>
    <article>
            <img src="posts/<?= $post->getFile()?>" width="300">
        <h2><?= $post->getTitle() ?></h2>
    </article>
<?php
    $content = ob_get_clean();
}
require_once 'layout.php';