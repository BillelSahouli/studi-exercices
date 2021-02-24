<?php
ob_start();
?>
    <article>
        <?php foreach ($photos as $photo): ?>
            <a href="Photo.php?id=<?= $photo->getId() ?>">
                <img src="photos/<?= $photo->getFile() ?>" width="250" />
            </a>
            <h2><?= $photo->getTitle() ?></h2>
        <?php endforeach; ?>
    </article>
<?php
$content = ob_get_clean();
$title = 'Mon book';
require_once "/wamp64/www/studi-exercices/model-mvc2/views/layout.php";
