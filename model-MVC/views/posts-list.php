<?php
ob_start();
?>

<article>
    <?php foreach ($posts as $post): ?>
    <a href="?id=<?= $post->getId() ?>">
        <img src="posts/<?= $post->getFile() ?>" width="250" />
    </a>
        <h2><?= $post->getTitle() ?></h2>
    <?php endforeach; ?>
</article>
<?php
$content = ob_get_clean();
$title = 'Mon Blog';
require_once "layout.php";